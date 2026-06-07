<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewContactNotification extends Notification
{
    use Queueable;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $email = $this->contact->email;
        $phone = $this->contact->phone;

        return (new MailMessage)
            ->subject('📩 رسالة جديدة من موقعك')
            ->greeting('مرحباً ' . env('NAME_OWNER') . ' 👋')
            ->line('وصلتك رسالة جديدة من نموذج الاتصال.')
            ->line('الاسم: ' . $this->contact->name)
            ->line('البريد: ' . $email)
            ->line('الهاتف: ' . $phone)
            ->line('الموضوع: ' . $this->contact->subject)
            ->line('الرسالة: ' . $this->contact->message)

            // 📧 زر الإيميل المباشر
            ->action('📧 رد على العميل', 'mailto:' . $email)

            // (اختياري) هتضيف واتساب كـ لينك إضافي
            ->line('💬 واتساب: https://wa.me/' . $phone)

            ->line('يرجى الرد في أقرب وقت.');
    }
}
