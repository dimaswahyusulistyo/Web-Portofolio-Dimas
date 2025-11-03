<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatAIController;

Route::post('/chat-ai', [ChatAIController::class, 'chat'])->name('chat.ai');

Route::get('/debug-chat', function() {
    try {
        $apiKey = env('GEMINI_API_KEY');
        
        echo "<h1>Debug Chat AI</h1>";
        echo "<p>API Key: " . ($apiKey ? substr($apiKey, 0, 15) . '...' : 'NOT FOUND') . "</p>";
        
        if (!$apiKey) {
            return response()->json(['error' => 'API Key not found']);
        }

        $response = Http::timeout(15)
            ->withHeaders(['Content-Type' => 'application/json'])
            ->post(
                "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}",
                [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => "Ibukota Indonesia"]
                            ]
                        ]
                    ]
                ]
            );

        echo "<p>Status: " . $response->status() . "</p>";
        
        if ($response->successful()) {
            $data = $response->json();
            $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No text in response';
            
            echo "<p><strong>Response:</strong> " . $reply . "</p>";
            echo "<pre>" . json_encode($data, JSON_PRETTY_PRINT) . "</pre>";
            
            return response()->json([
                'status' => 'success', 
                'reply' => $reply
            ]);
        } else {
            echo "<p><strong>Error Body:</strong> " . $response->body() . "</p>";
            return response()->json([
                'status' => 'error',
                'code' => $response->status(),
                'body' => $response->body()
            ]);
        }

    } catch (\Exception $e) {
        echo "<p><strong>Exception:</strong> " . $e->getMessage() . "</p>";
        echo "<pre>Trace: " . $e->getTraceAsString() . "</pre>";
        
        return response()->json([
            'status' => 'exception',
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
    }
});


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/portfolio/rasudi', function () {
    return view('portfolio.rasudi');
})->name('rasudi');

Route::get('/portfolio/gameunity', function () {
    return view('portfolio.gameunity');
})->name('gameunity');

Route::get('/portfolio/monitoring', function () {
    return view('portfolio.monitoring');
})->name('monitoring');

Route::get('/portfolio/kencana', function () {
    return view('portfolio.kencana');
})->name('kencana');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/history', function () {
    return view('history');
})->name('history');