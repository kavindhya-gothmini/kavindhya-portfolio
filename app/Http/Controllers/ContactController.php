<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:5000',
        ]);

        // Rename the form message to avoid conflict with Laravel's Mail $message object
        $emailData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'body' => $validated['message'],
        ];

        Mail::send('emails.contact', $emailData, function ($mail) use ($validated) {

            $mail->to('kavindhyagothmini13650@gmail.com')
                ->subject('Portfolio Contact: ' . $validated['subject']);

            $mail->replyTo(
                $validated['email'],
                $validated['name']
            );
        });

        return redirect()
            ->route('contact')
            ->with(
                'success',
                'Thank you for contacting me. Your message has been sent successfully.'
            );
    }
}
