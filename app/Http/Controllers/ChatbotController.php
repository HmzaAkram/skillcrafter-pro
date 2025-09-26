<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Handle incoming chatbot messages and return AI response using Google Gemini 2.0 Flash.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handleMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $userMessage = $request->input('message');

        // Check if API key exists
        $apiKey = env('GEMINI_API_KEY');
        if (!$apiKey) {
            Log::error('GEMINI_API_KEY not found in environment variables');
            return response()->json([
                'text' => 'Configuration error: API key missing. Please contact administrator.',
                'time' => now()->format('H:i'),
            ]);
        }

        // Retrieve or initialize conversation history from session
        $history = Session::get('chat_history', []);

        // System prompt to define the persona
        $systemPrompt = "You are SkillCrafter AI assistant, a helpful AI for personalized learning and skill development. You can help users understand our features, answer questions about skill building, course recommendations, learning paths, progress tracking, and provide general learning guidance. Respond professionally, concisely, and helpfully. Keep responses under 150 words.";

        try {
            // Build conversation context for Gemini
            $messages = [];

            // Add conversation history (simplified approach)
            foreach ($history as $entry) {
                $messages[] = [
                    'role' => 'user',
                    'parts' => [['text' => $entry['user']]]
                ];
                $messages[] = [
                    'role' => 'model', 
                    'parts' => [['text' => $entry['assistant']]]
                ];
            }

            // Add current user message with system context
            $currentMessage = $systemPrompt . "\n\nUser: " . $userMessage;
            $messages[] = [
                'role' => 'user',
                'parts' => [['text' => $currentMessage]]
            ];

            // Make API call to Gemini with timeout
            $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-exp:generateContent?key={$apiKey}";

            $response = Http::timeout(30)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                ])
                ->post($apiUrl, [
                    'contents' => $messages,
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'topK' => 40,
                        'topP' => 0.95,
                        'maxOutputTokens' => 200,
                    ],
                    'safetySettings' => [
                        [
                            'category' => 'HARM_CATEGORY_HARASSMENT',
                            'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                        ],
                        [
                            'category' => 'HARM_CATEGORY_HATE_SPEECH', 
                            'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                        ],
                        [
                            'category' => 'HARM_CATEGORY_SEXUALLY_EXPLICIT',
                            'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                        ],
                        [
                            'category' => 'HARM_CATEGORY_DANGEROUS_CONTENT',
                            'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                        ]
                    ]
                ]);

            // Debug logging
            Log::info('Gemini API Response Status: ' . $response->status());
            Log::info('Gemini API Response Body: ' . $response->body());

            if ($response->successful()) {
                $responseData = $response->json();
                
                if (isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
                    $aiResponse = $responseData['candidates'][0]['content']['parts'][0]['text'];
                } elseif (isset($responseData['candidates'][0]['finishReason'])) {
                    // Handle blocked content
                    $finishReason = $responseData['candidates'][0]['finishReason'];
                    Log::warning('Gemini blocked response: ' . $finishReason);
                    $aiResponse = 'I apologize, but I cannot provide a response to that message. How can I help you with your learning goals instead?';
                } else {
                    Log::error('Unexpected Gemini response structure: ' . json_encode($responseData));
                    $aiResponse = 'I apologize, but I encountered an issue generating a response. How can I help you with your learning goals?';
                }
            } else {
                // More detailed error logging
                $statusCode = $response->status();
                $errorBody = $response->body();
                Log::error("Gemini API Error - Status: {$statusCode}, Body: {$errorBody}");
                
                if ($statusCode === 400) {
                    $aiResponse = 'I had trouble understanding your message. Could you rephrase your question about learning or our platform?';
                } elseif ($statusCode === 401) {
                    $aiResponse = 'Authentication issue detected. Please contact support.';
                } elseif ($statusCode === 429) {
                    $aiResponse = 'I\'m receiving too many requests right now. Please wait a moment and try again.';
                } else {
                    $aiResponse = 'I\'m having trouble connecting to my knowledge base right now. Please try again in a moment, or feel free to explore our platform features!';
                }
            }

        } catch (\Exception $e) {
            // Log the full exception
            Log::error('Chatbot Exception: ' . $e->getMessage() . ' | Trace: ' . $e->getTraceAsString());
            $aiResponse = 'I encountered an unexpected error. Please try again, and I\'ll do my best to help you with your learning journey!';
        }

        // Update history (keep only last 8 exchanges to manage memory)
        $history[] = ['user' => $userMessage, 'assistant' => $aiResponse];
        if (count($history) > 8) {
            $history = array_slice($history, -8);
        }
        Session::put('chat_history', $history);

        return response()->json([
            'text' => $aiResponse,
            'time' => now()->format('H:i'),
        ]);
    }

    /**
     * Clear chat history
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function clearHistory()
    {
        Session::forget('chat_history');
        return response()->json(['message' => 'Chat history cleared']);
    }
}