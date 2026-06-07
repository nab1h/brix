<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewTestimonialNotification extends Notification
{
    use Queueable;

    public $testimonial;

    public function __construct($testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('تقييم عميل جديد')
            ->greeting('مرحباً ' . env('NAME_OWNER') . ' 👋')
            ->line('تم إرسال تقييم جديد من أحد العملاء.')
            ->line('الاسم: ' . $this->testimonial->name)
            ->line('الوظيفة: ' . $this->testimonial->job)
            ->action('عرض التقييمات', url('/admin/testimonials'))
            ->line('يرجى مراجعة التقييم من لوحة التحكم.');
    }
}
