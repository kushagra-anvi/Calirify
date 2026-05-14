<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    protected $apiBaseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.hnh.base_url');
        $this->apiKey = config('services.hnh.api_key');
    }

    public function index()
    {
        $phone = session('user_phone') ?? '9876543210'; // Default phone for demo
        
        // Fetch subscriptions from Hub
        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->get("{$this->apiBaseUrl}/api/v1/subscriptions", [
            'phone' => $phone
        ]);

        $subscriptions = [];
        $userData = null;

        if ($response->ok()) {
            $data = $response->json();
            $subscriptions = $data['data'] ?? [];
            $userData = $data['user'] ?? null;
        }

        // Fallback to dummy data if empty (for demonstration)
        if (empty($subscriptions) || empty($userData)) {
            $userData = [
                'name' => 'Kushagra',
                'loyalty_tier' => 'Platinum Member',
                'wallet_balance' => 1250.50,
                'journey_days' => 45,
                'total_meals' => 120
            ];

            $subscriptions = [
                [
                    'external_id' => 'SUB-CAL-001',
                    'external_subscription_id' => 'SUB-CAL-001', // Ensure this matches route expectations
                    'plan_name' => 'High Protein Wellness',
                    'status' => 'active',
                    'next_billing' => '2024-05-20',
                    'meals_remaining' => 12,
                    'total_meals' => 24,
                    'diet_type' => 'Non-Veg',
                    'meal_slots' => ['lunch', 'dinner'],
                    'next_billing_amount' => 4500.00,
                    'next_billing_date' => 'May 20, 2024'
                ]
            ];
        }

        // Store in session for other portal pages
        session(['user_data' => $userData, 'user_phone' => $phone]);

        return view('dashboard', compact('subscriptions', 'userData', 'phone'));
    }

    public function showSubscription($externalId)
    {
        $phone = session('user_phone') ?? '9876543210';

        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->get("{$this->apiBaseUrl}/api/v1/subscriptions/{$externalId}");

        if ($response->ok()) {
            $subscription = $response->json()['data'];
        } else {
            // Dummy Data for Demonstration
            $subscription = [
                'subscription_number' => 'CAL-8821',
                'plan_name' => 'High Protein Wellness',
                'status' => 'Active',
                'total_amount' => 4500.00,
                'diet_type' => 'Non-Vegetarian',
                'meal_slots' => ['lunch', 'dinner'],
                'active_days' => 30,
                'meals_remaining' => 12,
                'total_meals' => 24,
                'address' => [
                    'full_name' => 'Kushagra',
                    'address_line_1' => 'Plot 42, Hitech City',
                    'city' => 'Hyderabad',
                    'pincode' => '500081'
                ],
                'upcoming_meals' => [
                    ['date' => '2024-05-14', 'status' => 'active'],
                    ['date' => '2024-05-15', 'status' => 'active'],
                    ['date' => '2024-05-16', 'status' => 'skipped'],
                    ['date' => '2024-05-17', 'status' => 'active'],
                    ['date' => '2024-05-18', 'status' => 'active'],
                    ['date' => '2024-05-19', 'status' => 'active'],
                    ['date' => '2024-05-20', 'status' => 'active'],
                ]
            ];
        }

        return view('subscription-detail', compact('subscription', 'phone'));
    }
}
