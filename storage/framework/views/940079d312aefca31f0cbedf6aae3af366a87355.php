<?php

session_start();
$msg = !empty($_SESSION['msg']) ? $_SESSION['msg'] : '';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Compress Image Size Using PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!--====image upload form===-->

    <?php

    ?>

    <form method="post" enctype="multipart/form-data">
        <label>Select Your File</label>
        <input type="file" name="image">
        <?php echo csrf_field(); ?>
        <input type="submit" value="Compress Now" name="submit">
    </form>

    <!-- image upload form====-->
</body>

</html>
<?php /**PATH D:\wealthMark\resources\views/welcome2.blade.php ENDPATH**/ ?>