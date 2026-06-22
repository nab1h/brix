<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    :root {
        --bg: #f8fafc;
        --card: #ffffff;
        --border: #e2e8f0;
        --muted: #64748b;
        --accent: #6F8F7A;
        --accent-light: #6F8F7A;
        --surface: #f1f5f9;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Alexandria', sans-serif;
        background: var(--bg);
        color: #17211D;
        overflow-x: hidden;
    }

    .page-bg {
        position: fixed;
        inset: 0;
        background:
            radial-gradient(ellipse 80% 50% at 50% -20%, rgba(23, 63, 53, 0.06), transparent),
            radial-gradient(ellipse 60% 40% at 80% 60%, rgba(102, 112, 108, 0.04), transparent);
        pointer-events: none;
        z-index: -1;
    }
</style>

<body>
    <!-- الخلفية أصبحت عنصراً منفصلاً -->
    <div class="page-bg"></div>

    <!-- المحتوى أصبح في عنصر منفصل وفي طبقة أعلى -->
    <div class="min-h-screen flex flex-col sm:justify-center px-6 items-center pt-6 sm:pt-0 relative z-10">
        <div>
            <a href="/">
                <img src="{{ asset('avora.png') }}" class="h-[220px] w-[220px]" />
            </a>
        </div>

        <div class="w-full sm:max-w-md bg-white border border-gray-200 rounded-2xl shadow-sm p-8">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
