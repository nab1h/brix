<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة جديدة</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 40px 0;">

                <!-- Card Container -->
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #E60914; padding: 30px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: bold;">رسالة تواصل جديدة 📩</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="margin: 0 0 20px; color: #374151; font-size: 16px;">لقد تلقيت رسالة جديدة من خلال نموذج التواصل في موقعك:</p>

                            <!-- Info Table -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #F9FAFB; border-radius: 12px; border: 1px solid #E5E7EB; margin-bottom: 20px;">
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #E5E7EB; color: #6B7280; font-size: 14px; width: 20%;">الاسم:</td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #E5E7EB; color: #111827; font-size: 16px; font-weight: 600;">{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #E5E7EB; color: #6B7280; font-size: 14px;">البريد:</td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #E5E7EB; color: #111827; font-size: 16px; font-weight: 600;"><a href="mailto:{{ $contact->email }}" style="color: #E60914; text-decoration: none;">{{ $contact->email }}</a></td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #E5E7EB; color: #6B7280; font-size: 14px;">الهاتف:</td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #E5E7EB; color: #111827; font-size: 16px; font-weight: 600;">{{ $contact->phone ?? 'لم يحدد' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; color: #6B7280; font-size: 14px;">الموضوع:</td>
                                    <td style="padding: 15px 20px; color: #111827; font-size: 16px; font-weight: 600;">{{ $contact->subject }}</td>
                                </tr>
                            </table>

                            <!-- Message Content -->
                            <div style="background-color: #FDF2F8; border-right: 4px solid #E60914; padding: 15px 20px; border-radius: 8px; margin-bottom: 30px;">
                                <p style="margin: 0; color: #6B7280; font-size: 12px; margin-bottom: 5px;">نص الرسالة:</p>
                                <p style="margin: 0; color: #374151; font-size: 15px; line-height: 1.6;">{{ $contact->msg }}</p>
                            </div>

                            <!-- CTA Button -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center">
                                        <a href="{{ route('admin.contacts.index') }}" target="_blank" style="display: inline-block; background-color: #E60914; color: #ffffff; text-decoration: none; padding: 14px 30px; border-radius: 8px; font-size: 16px; font-weight: bold; box-shadow: 0 4px 6px rgba(230, 9, 20, 0.3);">
                                            الذهاب إلى لوحة التحكم 🚀
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #F3F4F6; padding: 20px; text-align: center; color: #9CA3AF; font-size: 12px;">
                            تم إرسال هذه الرسالة تلقائياً من نظام إدارة الموقع
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
