<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatAIController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->input('message');
        
        if (empty($message)) {
            return response()->json([
                'reply' => 'Pesan tidak boleh kosong',
                'status' => 'error'
            ]);
        }

        try {
            $apiKey = env('GEMINI_API_KEY');
            
            if (!$apiKey) {
                return response()->json([
                    'reply' => 'API Key tidak ditemukan',
                    'status' => 'error'
                ]);
            }

            // 🔥 FIX: Nonaktifkan SSL verification untuk development
            $response = Http::timeout(30)
                ->withOptions([
                    'verify' => false, // 🔥 NONAKTIFKAN SSL VERIFICATION
                    'curl' => [
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => false
                    ]
                ])
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post(
                    "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}",
                    [
                        'contents' => [
                            [
                                'parts' => [
                                    ['text' => $message]
                                ]
                            ]
                        ]
                    ]
                );

            if ($response->successful()) {
                $data = $response->json();
                $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Tidak ada response dari AI';
                
                return response()->json([
                    'reply' => $reply,
                    'status' => 'success'
                ]);
            } else {
                return response()->json([
                    'reply' => 'Error API: ' . $response->status() . ' - ' . $response->body(),
                    'status' => 'error'
                ]);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'reply' => 'Terjadi kesalahan: ' . $e->getMessage(),
                'status' => 'error'
            ]);
        }
    }
}