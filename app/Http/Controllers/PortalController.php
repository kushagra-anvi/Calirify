<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortalController extends Controller
{
    private $apiBase;
    private $apiKey;

    public function __construct()
    {
        $this->apiBase = config('services.hnh.base_url');
        $this->apiKey = config('services.hnh.api_key');
    }

    public function calendar(Request $request)
    {
        $userData = session('user_data') ?? [
            'name' => 'Kushagra',
            'loyalty_tier' => 'Platinum Member',
            'wallet_balance' => 1250.50,
        ];

        return view('portal.calendar', compact('userData'));
    }

    public function menu(Request $request)
    {
        $userData = session('user_data') ?? [
            'name' => 'Kushagra',
            'loyalty_tier' => 'Platinum Member',
            'wallet_balance' => 1250.50,
        ];

        return view('portal.menu', compact('userData'));
    }

    public function wallet(Request $request)
    {
        $userData = session('user_data') ?? [
            'name' => 'Kushagra',
            'loyalty_tier' => 'Platinum Member',
            'wallet_balance' => 1250.50,
        ];

        return view('portal.wallet', compact('userData'));
    }

    public function profile(Request $request)
    {
        $userData = session('user_data') ?? [
            'name' => 'Kushagra',
            'loyalty_tier' => 'Platinum Member',
            'wallet_balance' => 1250.50,
        ];

        return view('portal.profile', compact('userData'));
    }

    public function support(Request $request)
    {
        $userData = session('user_data') ?? [
            'name' => 'Kushagra',
            'loyalty_tier' => 'Platinum Member',
            'wallet_balance' => 1250.50,
        ];

        return view('portal.support', compact('userData'));
    }
}
