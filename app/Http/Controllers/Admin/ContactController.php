<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('subject', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('filter')) {
            if ($request->filter == 'unread') {
                $query->where('is_read', 0);
            } elseif ($request->filter == 'read') {
                $query->where('is_read', 1);
            }
        }

        $contacts = $query->latest()->paginate(10);
        $totalContacts = Contact::count();
        $unreadContacts = Contact::where('is_read', 0)->count();

        return view('admin.contacts.index', compact('contacts', 'totalContacts', 'unreadContacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'msg'     => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        $ownerEmail = env('MAIL_OWNER', 'default@example.com');

        Mail::to($ownerEmail)->send(new ContactMail($contact));

        return redirect()->back()->with('status', 'تم إرسال رسالتك بنجاح!');
    }

    public function markAsRead(Contact $contact)
    {
        $contact->update(['is_read' => 1]);
        return redirect()->route('admin.contacts.index')->with('status', 'تم تعليم الرسالة كمقروءة');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('status', 'تم حذف الرسالة بنجاح');
    }
}
