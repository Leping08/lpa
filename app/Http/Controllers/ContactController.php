<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Rules\Recaptcha;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Check if all honeypot fields are empty
        $emptyHoneypot = collect([
            $request->first_name,
            $request->last_name,
            $request->address,
            $request->city,
            $request->state,
            $request->zip,
            $request->country,
        ])->filter()->isEmpty();

        if (!$emptyHoneypot) {
            Log::info('Honeypot fields were not empty.');
            return back();
        }

        // Get the timestamp field and check if it is not within the last 3 seconds
        if ((int)$request->time > (Carbon::now()->timestamp - 3)) {
            Log::info('Timestamp was not within the last 3 seconds.');
            return back();
        }

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => App::runningUnitTests() ? [] : ['required', new Recaptcha()],
        ]);

        try {
            $this->emailAdmins($validated);
            session()->flash('success', 'Thank you for reaching out. We will be in contact with you shortly.');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            Log::info($e->getTraceAsString());
            session()->flash('warning', 'Looks like something went wrong.');
        }

        return back();
    }

    /**
     * @param  array  $contact
     */
    private function emailAdmins(array $validated)
    {
        Log::info("Sending contact us email.");
        Mail::send(new ContactUs($validated));
    }
}
