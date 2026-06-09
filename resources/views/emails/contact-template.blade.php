<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: Arial, sans-serif;">

    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 40px 0;">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e5e7eb;">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #E60914; padding: 20px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 22px;">رسالة تواصل جديدة</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px;">
                            <p style="margin: 0 0 20px; color: #374151; font-size: 16px;">لقد تلقيت رسالة جديدة من خلال نموذج التواصل:</p>

                            <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f9fafb; border-radius: 8px; border: 1px solid #e5e7eb; margin-bottom: 20px;">
                                <tr>
                                    <td style="padding: 12px 15px; color: #6b7280; font-size: 14px; width: 25%;">الاسم:</td>
                                    <td style="padding: 12px 15px; color: #111827; font-size: 16px; font-weight: bold;">{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 15px; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb;">البريد:</td>
                                    <td style="padding: 12px 15px; color: #111827; font-size: 16px; font-weight: bold; border-top: 1px solid #e5e7eb;">{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 15px; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb;">الهاتف:</td>
                                    <td style="padding: 12px 15px; color: #111827; font-size: 16px; font-weight: bold; border-top: 1px solid #e5e7eb;">{{ $contact->phone ?? 'لم يحدد' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 15px; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb;">الموضوع:</td>
                                    <td style="padding: 12px 15px; color: #111827; font-size: 16px; font-weight: bold; border-top: 1px solid #e5e7eb;">{{ $contact->subject }}</td>
                                </tr>
                            </table>

                            <div style="background-color: #fdf2f8; border-right: 4px solid #E60914; padding: 15px; border-radius: 8px;">
                                <p style="margin: 0 0 5px; color: #6b7280; font-size: 12px;">نص الرسالة:</p>
                                <p style="margin: 0; color: #374151; font-size: 15px; line-height: 1.6;">{{ $contact->msg }}</p>
                            </div>

                            <!-- CTA Button -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding-top: 30px;">
                                        <a href="{{ route('admin.contacts.index') }}" target="_blank" style="display: inline-block; background-color: #E60914; color: #ffffff; text-decoration: none; padding: 12px 25px; border-radius: 8px; font-size: 16px; font-weight: bold;">
                                            الذهاب إلى لوحة التحكم
                                        </a>
                                    </td>
                                </tr>
                                </div>

                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>
