<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HnhWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $signature = $request->header('X-HNH-Signature');
        $payload = $request->getContent();
        $secret = config('services.hnh.webhook_secret');

        if (!$this->verifySignature($payload, $signature, $secret)) {
            return response()->json(['message' => 'Invalid signature'], 401);
        }

        $data = $request->input('data');
        $event = $request->input('event');

        Log::info("Received HNH Webhook: {$event}", $data);

        return response()->json(['status' => 'ok']);
    }

    protected function verifySignature(string $payload, ?string $signature, string $secret): bool
    {
        if (!$signature) {
            return false;
        }

        $computed = hash_hmac('sha256', $payload, $secret);
        return hash_equals($signature, $computed);
    }
}
