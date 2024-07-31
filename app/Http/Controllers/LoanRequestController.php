<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanRequest;

class LoanRequestController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'reason' => 'required|string|max:1000',
        ]);

        LoanRequest::create($request->all());

        return redirect()->route('home')->with('success', 'Loan request submitted successfully!');
    }
}
