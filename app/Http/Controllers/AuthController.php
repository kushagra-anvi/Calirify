<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|size:10',
        ]);

        $otp = "123456"; // For testing/local
        
        session([
            'otp_phone' => $request->phone,
            'otp_code' => $otp,
            'otp_sent' => true
        ]);
        
        Log::info("OTP sent to {$request->phone}: {$otp}");

        return back()->with('success', 'OTP sent successfully!')->withInput();
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|size:10',
            'otp' => 'required|string|size:6',
        ]);

        $storedPhone = session('otp_phone');
        $storedOtp = session('otp_code');

        if ($request->phone === $storedPhone && $request->otp === $storedOtp) {
            session(['user_phone' => $request->phone]);
            session()->forget(['otp_phone', 'otp_code', 'otp_sent']);
            
            Log::info("User logged in via OTP: " . $request->phone);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['otp' => 'The provided OTP is invalid.'])->withInput();
    }

    public function logout()
    {
        session()->forget('user_phone');
        return redirect()->route('login');
    }
}
