<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanRequest;

class AdminController extends Controller
{
    public function list()
    {
        $loanRequests = LoanRequest::all();
        return view('admin', compact('loanRequests'));
    }

    public function edit($id)
    {
        $loanRequest = LoanRequest::findOrFail($id);
        return view('edit', compact('loanRequest'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'reason' => 'required|string|max:1000',
        ]);

        $loanRequest = LoanRequest::findOrFail($id);
        $loanRequest->update($request->all());

        return redirect()->route('loanRequests')->with('success', 'Loan request updated successfully!');
    }

    public function destroy($id)
    {
        $loanRequest = LoanRequest::findOrFail($id);
        $loanRequest->delete();

        return redirect()->route('loanRequests')->with('success', 'Loan request deleted successfully!');
    }
}
