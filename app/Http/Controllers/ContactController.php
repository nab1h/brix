<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewContactNotification;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Notification::route('mail', env('ADMIN_EMAIL'))
            ->notify(new NewContactNotification((object)$data));

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال رسالتك بنجاح'
        ]);
    }
}
