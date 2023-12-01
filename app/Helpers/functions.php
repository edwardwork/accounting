<?php

use Illuminate\Http\JsonResponse;

if (!function_exists('formatFileSize')) {
    function formatFileSize($bytes): string
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 1) . 'gb';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 1) . 'mb';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 1) . 'kb';
        } elseif ($bytes > 1) {
            $bytes .= 'bytes';
        } elseif ($bytes === 1) {
            $bytes .= 'byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }
}

if (!function_exists('getDataForErrorResponse')) {
    function getDataForErrorResponse(array $errors, string $message = 'Operation contains errors'): array
    {
        return [
            'success' => false,
            'message' => $message,
            'errors' => $errors,
        ];
    }
}

if (!function_exists('responseWithErrors')) {
    function responseWithErrors(array $errors, string $message = 'Operation contains errors'): JsonResponse
    {
        return response()->json(getDataForErrorResponse($errors, $message));
    }
}

if (!function_exists('responseSuccess')) {
    function responseSuccess(string $message = 'Operation is successful'): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }
}
