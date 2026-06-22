@extends('layouts.brix')
@section('title',$article->title )
@section('hero_image', $article->image ? Storage::url($article->image) : asset('images-layout/default-hero.png'))
@section('content')

<section class="py-16 md:py-20">
    <!-- وسعنا الكونتينر عاسي يستوعب الـ Sidebar -->
    <div class="max-w-7xl mx-auto px-6 md:px-12">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- العمود الأساسي: تفاصيل المقال (بياخد 2/3 الشاشة) -->
            <div class="lg:col-span-2">

                @if($article->image)
                <div class="mb-12 -mt-20 rounded-2xl overflow-hidden shadow-2xl border-4 border-ivory">
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full aspect-video object-cover">
                </div>
                @endif

                <div class="article-content text-warm-800 text-lg">
                    {!! $article->content !!}
                </div>

                <div class="mt-16 pt-8 border-t border-sand">
                    <a href="{{ route('articles.index') }}" class="inline-block bg-terracotta text-ivory px-6 py-3 rounded-full font-bold hover:bg-terracotta/80 transition-colors">
                        <i class="fas fa-arrow-right ml-2"></i> العودة لكل المقالات
                    </a>
                </div>
            </div>

            <!-- العمود الجانبي (Sidebar): باقي المقالات (بياخد 1/3 الشاشة) -->
            <div class="lg:col-span-1">
                <!-- الـ sticky بتخلي الـ Sidebar يفضل ظاهر مع السكرول -->
                <div class="sticky top-24">

                    <div class="bg-white border border-sand/50 rounded-2xl p-6 shadow-sm">
                        <h3 class="font-serif text-xl font-bold text-warm-900 mb-6 flex items-center gap-2">
                            <i class="fas fa-newspaper text-terracotta text-sm"></i> مقالات أخرى
                        </h3>

                        <div class="space-y-5">
                            @foreach($latestArticles as $latestArticle)
                            <a href="{{ route('articles.show', $latestArticle) }}" class="flex items-center gap-4 group">

                                <!-- صورة مصغرة للمقال -->
                                <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 border border-sand/30">
                                    <img src="{{ $latestArticle->image ? Storage::url($latestArticle->image) : asset('images-layout/default-article.png') }}"
                                        alt="{{ $latestArticle->title }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                </div>

                                <!-- عنوان وتاريخ المقال -->
                                <div class="min-w-0 flex-1">
                                    <h4 class="text-sm font-bold text-warm-800 group-hover:text-terracotta transition-colors line-clamp-2 leading-snug">
                                        {{ $latestArticle->title }}
                                    </h4>
                                    <span class="text-[11px] text-warm-400 mt-1 block">
                                        <i class="far fa-calendar-alt ml-1"></i> {{ $latestArticle->created_at->format('d M Y') }}
                                    </span>
                                </div>

                            </a>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
