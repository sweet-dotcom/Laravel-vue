<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        // Log the contact form submission
        Log::info('Contact form submitted', $validated);

        // In a real application, you would send an email here
        // Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
