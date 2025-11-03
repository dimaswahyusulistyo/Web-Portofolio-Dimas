<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatAIController extends Controller
{
    public function chat(Request $request)
    {
        $apiKey = env('GEMINI_API_KEY');
        $message = $request->input('message');

        if (!$apiKey) {
            return response()->json(['error' => 'API key not found'], 500);
        }

        $response = Http::timeout(20)
            ->withHeaders(['Content-Type' => 'application/json'])
            ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}", [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $message]
                        ]
                    ]
                ]
            ]);

        if ($response->successful()) {
            $data = $response->json();
            $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Tidak ada respons dari AI';
            return response()->json(['reply' => $reply]);
        } else {
            return response()->json([
                'error' => 'Gagal mengambil respons dari Gemini',
                'body' => $response->body()
            ], $response->status());
        }
    }
}
