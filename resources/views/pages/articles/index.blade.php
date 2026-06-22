@extends('layouts.brix')
@section('title', 'المقالات')
@section('hero_image', asset('images-layout/portfolio.png'))
@section('content')
<section class="py-20 md:py-28">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">

        @if($articles->count() > 0)
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)

            <a href="{{ route('articles.show', $article) }}" class="reveal group block bg-white border border-sand rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:border-olive-400/60">

                <div class="aspect-video overflow-hidden">
                    <img src="{{ $article->image ? Storage::url($article->image) : asset('images-layout/default-article.png') }}"
                        alt="{{ $article->title }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="p-6">
                    <span class="text-terracotta text-xs font-bold">{{ $article->created_at->format('d M Y') }}</span>

                    <h3 class="font-serif text-xl font-bold text-warm-900 mt-2 mb-3 group-hover:text-terracotta transition-colors line-clamp-2">
                        {{ $article->title }}
                    </h3>

                    <p class="text-warm-400 text-sm leading-relaxed line-clamp-3">
                        {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}
                    </p>

                    <div class="mt-5 text-terracotta font-semibold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>اقرأ المزيد</span>
                        <i class="fas fa-arrow-left text-xs"></i>
                    </div>
                </div>
            </a>

            @endforeach
        </div>

        <!-- الـ Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $articles->links() }}
        </div>

        @else
        <div class="text-center py-20">
            <i class="fas fa-newspaper text-sand text-5xl mb-4"></i>
            <p class="text-warm-400 text-xl">لا توجد مقالات حالياً.</p>
        </div>
        @endif

    </div>
</section>

<script>
    // Reveal Animation
    window.addEventListener('scroll', function() {
        let reveals = document.querySelectorAll('.reveal');
        for (let i = 0; i < reveals.length; i++) {
            let windowHeight = window.innerHeight;
            let elementTop = reveals[i].getBoundingClientRect().top;
            let elementVisible = 100;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('active');
            }
        }
    });
    window.dispatchEvent(new Event('scroll'));
</script>
@endsection
