<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Exception;

class BmkApiController extends Controller
{
    /**
     * Authenticate with BMK API and return token.
     */
    public function authenticate(): ?string
    {
        try {
            // Check if token is cached
            if (Cache::has('bmk_api_token')) {
                return Cache::get('bmk_api_token');
            }

            $baseUrl  = env('BMK_API_BASE_URL');
            $username = env('BMK_API_USERNAME');
            $password = env('BMK_API_PASSWORD');

            $response = Http::asForm()->post("$baseUrl/Authenticate", [
                'username' => $username,
                'password' => $password,
            ]);

            if ($response->failed()) {
                throw new Exception("BMK API authentication failed: " . $response->body());
            }

            $token = $response->json()['token'] ?? null;

            if (!$token) {
                throw new Exception("BMK API did not return a valid token.");
            }

            // Cache token for 50 minutes (assuming 1 hour validity)
            Cache::put('bmk_api_token', $token, now()->addMinutes(50));

            return $token;
        } catch (Exception $e) {
            // Log or handle the exception as needed
            return null;
        }
    }

    /**
     * Verify API request with given endpoint and parameters.
     */
    public function verify_api(string $url, array $params)
    {
        try {
            $token = $this->authenticate();

            if (!$token) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to authenticate with BMK API',
                ], 500);
            }

            $response = Http::withToken($token)->post($url, $params);

            if ($response->failed()) {
                return response()->json([
                    'success' => false,
                    'message' => 'BMK API request failed',
                    'details' => $response->body(),
                ], 500);
            }

            return $response->json();
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
