<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Handle incoming procurement & sourcing enquiries
     */
    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'fullName'       => 'required|string|max:150',
            'companyName'    => 'required|string|max:150',
            'country'        => 'nullable|string|max:100',
            'phoneNumber'    => 'nullable|string|max:50',
            'emailAddress'   => 'required|email|max:150',
            'subject'        => 'nullable|string|max:200',
            'message'        => 'required|string|max:5000',
            'referralSource' => 'nullable|string|max:100',
        ]);

        // In a live environment, dispatch mail notification to sales@pearlcon.com:
        // Mail::to('sales@pearlcon.com')->send(new SourcingEnquiryReceived($validated));

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for contacting Pearlcon Rail. Your enquiry has been received by our procurement desk. We aim to respond within 1 business day.');
    }
}
