@extends('layouts.brix')

@section('title', $category->name)
@section('hero_image', $category->img ? Storage::url($category->img) : asset('images-layout/default-hero.png'))

@section('content')
<section class="py-20 md:py-28 bg-white">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="max-w-3xl mb-14">
            <span class="text-terracotta text-sm font-semibold tracking-[0.12em]">خدمات القسم</span>
            <h2 class="text-3xl md:text-5xl font-semibold text-warm-900 mt-4">{{ $category->name }}</h2>
            @if($category->description)
            <p class="text-warm-500 text-base md:text-lg leading-8 mt-5">{{ $category->description }}</p>
            @endif
        </div>

        @if($category->portfolios->isNotEmpty())
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($category->portfolios as $portfolio)
            <div class="group bg-white border border-sand rounded-2xl overflow-hidden transition-all duration-300 hover:border-olive-400/60 hover:shadow-xl">
                <div class="aspect-[4/3] overflow-hidden bg-cream">
                    <img src="{{ $portfolio->image ? Storage::url($portfolio->image) : ($category->img ? Storage::url($category->img) : asset('images-layout/default-card.png')) }}"
                        alt="{{ $portfolio->name }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-warm-900 group-hover:text-terracotta transition-colors">{{ $portfolio->name }}</h3>
                    @if($portfolio->description)
                    <p class="text-sm text-warm-500 leading-7 mt-2 line-clamp-3">{{ $portfolio->description }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="rounded-2xl border border-sand bg-cream/60 px-6 py-16 text-center">
            <div class="w-14 h-14 rounded-2xl bg-olive-100 text-terracotta flex items-center justify-center mx-auto mb-5">
                <i class="fas fa-layer-group"></i>
            </div>
            <h3 class="text-lg font-semibold text-warm-900">لا توجد خدمات مضافة لهذا القسم حاليًا</h3>
            <p class="text-sm text-warm-500 mt-2">سيتم إضافة الخدمات المرتبطة بالقسم قريبًا.</p>
        </div>
        @endif
    </div>
</section>

@include('includes.cta')
@endsection
