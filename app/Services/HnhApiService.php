<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

class HnhApiService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.hnh.base_url');
        $this->apiKey = config('services.hnh.api_key');
    }

    public function getSubscriptions(string $externalUserId): array
    {
        $response = Http::withHeaders(['X-API-KEY' => $this->apiKey])
            ->acceptJson()
            ->get("{$this->baseUrl}/api/v1/subscriptions", [
                'external_user_id' => $externalUserId
            ]);

        return $response->json()['data'] ?? [];
    }

    public function getSubscriptionDetails(string $externalSubId): array
    {
        $response = Http::withHeaders(['X-API-KEY' => $this->apiKey])
            ->acceptJson()
            ->get("{$this->baseUrl}/api/v1/subscriptions/{$externalSubId}");

        return $response->json()['data'] ?? [];
    }

    public function syncSubscription(array $payload): array
    {
        $response = Http::withHeaders(['X-API-KEY' => $this->apiKey])
            ->acceptJson()
            ->post("{$this->baseUrl}/api/v1/subscriptions", $payload);

        if ($response->failed()) {
            Log::error("HNH API Sync Error: " . $response->body());
            throw new Exception("Failed to sync subscription to HNH. Status: " . $response->status());
        }

        return $response->json();
    }

    public function skipMeal(string $externalSubId, string $date, string $slot): array
    {
        $response = Http::withHeaders(['X-API-KEY' => $this->apiKey])
            ->acceptJson()
            ->post("{$this->baseUrl}/api/v1/subscriptions/{$externalSubId}/skip", [
                'date' => $date,
                'slot' => $slot,
            ]);

        if ($response->failed()) {
            throw new Exception("HNH API Skip Error: " . $response->body());
        }

        return $response->json();
    }

    public function pauseSubscription(string $externalSubId, string $startDate, string $resumeDate, ?string $reason = null): array
    {
        $response = Http::withHeaders(['X-API-KEY' => $this->apiKey])
            ->acceptJson()
            ->post("{$this->baseUrl}/api/v1/subscriptions/{$externalSubId}/pause", [
                'pause_start_date' => $startDate,
                'resume_date' => $resumeDate,
                'reason' => $reason,
            ]);

        if ($response->failed()) {
            throw new Exception("HNH API Pause Error: " . $response->body());
        }

        return $response->json();
    }
}
