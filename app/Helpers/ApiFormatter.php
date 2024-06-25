<?php

namespace App\Helpers;

class ApiFormatter {
    protected static $response = [
        'status' => null,
        'message' => null,
        'data' => null,
    ];

    public static function sendResponse($status = null, $message = null, $data = null) {
        // Mengonversi $data menjadi JSON jika $data adalah array atau objek
        if (is_array($data) || is_object($data)) {
            $data = json_encode($data);
        }

        // Mengatur nilai-nilai dalam properti $response
        self::$response['status'] = $status;
        self::$response['message'] = $message;
        self::$response['data'] = $data;

        // Mengembalikan respon dalam format JSON dengan status yang diberikan
        return response()->json(self::$response, self::$response['status']);
    }
}
?>
