<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ImageCompressionController extends Controller
{
    // Logic for uploading images is handled in controllers that use this class.

    public function upload_image($uploadTo, $imageName, $tempPath)
    {

        $allowImageExt = array('jpg', 'png', 'jpeg', 'gif');
        $prod = date("Yndhis");
        $extension = end(explode(".", $imageName));
        $imageName = $prod . "." . $extension;

        $imageQuality = 50;
        $basename = basename($imageName);
        $originalPath = $uploadTo . $basename;
        $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
        if (empty($imageName)) {
            $error = "Please Select files..";
            return $error;
        } else {
            if (in_array($imageExt, $allowImageExt)) {
                $compressedImage = $this->compress_image($tempPath, $originalPath, $imageQuality);
                if ($compressedImage) {
                    return "Image was compressed and uploaded to server";
                } else {
                    return "Some error !.. check your script";
                }
            } else {
                return "Image Type not allowed";
            }
        }
    }

    public function compress_image($tempPath, $originalPath, $imageQuality)
    {
        // Get image info
        $imgInfo = getimagesize($tempPath);
        $mime = $imgInfo['mime'];
        // Create a new image from file
        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($tempPath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($tempPath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($tempPath);
                break;
            default:
                $image = imagecreatefromjpeg($tempPath);
        }
        // Save image
        imagejpeg($image, $originalPath, $imageQuality);
        // Return compressed image
        return $originalPath;
    }

    public function imgCompressAfterStored($storedImgPath, $pathToStoreCompressed)
    {
        $image = imagecreatefromjpeg($storedImgPath);

        // Set the compression quality
        $imageQuality = 50;

        // Get the file name from the original path
        $imageName = basename($storedImgPath);

        // Set the path and file name for the compressed image
        $compressedImg = $pathToStoreCompressed . '/' . $imageName;

        // Create a new compressed image
        imagejpeg($image, $compressedImg, $imageQuality);

        // Free up memory used by the images
        imagedestroy($image);
    }
}
