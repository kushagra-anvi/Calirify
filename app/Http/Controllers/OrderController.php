<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    protected string $apiBaseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.hnh.base_url');
        $this->apiKey = config('services.hnh.api_key');
    }

    public function checkServiceability(Request $request)
    {
        $pincode = $request->query('pincode');

        \Illuminate\Support\Facades\Log::info("Proxying serviceability check to Hub", [
            'pincode' => $pincode
        ]);

        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->get("{$this->apiBaseUrl}/api/v1/serviceability/check", [
            'pincode' => $pincode,
        ]);

        return response()->json($response->json(), $response->status());
    }

    public function getPricing(Request $request)
    {
        \Illuminate\Support\Facades\Log::info("Proxying pricing request to Hub");

        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->get("{$this->apiBaseUrl}/api/v1/pricing/matrix");

        return response()->json($response->json(), $response->status());
    }

    public function createSubscription(Request $request)
    {
        $payload = $request->all();
        
        \Illuminate\Support\Facades\Log::info("Proxying subscription creation to Hub", [
            'phone' => $payload['customer']['phone'] ?? 'unknown'
        ]);

        // Add brand and generated IDs for simulation
        $payload['brand'] = 'calirify';
        $payload['external_user_id'] = 'CAL-' . uniqid();
        $payload['subscription']['external_subscription_id'] = 'SUB-' . uniqid();

        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->post("{$this->apiBaseUrl}/api/v1/subscriptions", $payload);

        return response()->json($response->json(), $response->status());
    }
}
