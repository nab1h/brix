<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Setting;
use App\Models\HomeContent;
use App\Models\Faq;
use App\Models\Media;
use App\Models\Article;
use App\Models\Career;
use App\Models\Category;
use App\Models\Statistic;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $content = HomeContent::firstOrCreate(['id' => 1]);
        $faqs = Faq::where('is_active', true)->get();
        $heroVideo = Media::where('type', 'hero_video')->where('is_active', true)->first();
        $heroImage = Media::where('type', 'hero_image')->where('is_active', true)->first();
        $galleryImages = Media::where('type', 'gallery_image')->where('is_active', true)->ordered()->get();
        $stats = Statistic::orderBy('sort_order')->get();
        $testimonials = Testimonial::where('is_active', true)
            ->latest()
            ->get();
        $careers = Career::all();

        $query = Portfolio::with(['brand', 'category']);

        if ($request->filled('cat_id')) {
            $query->where('cat_id', $request->cat_id);
        }

        $portfolios = $query->latest()->get();
        $categories = Category::all();

        $brands = Brand::all();

        return view('welcome',compact('portfolios', 'brands' ,'categories','careers','stats', 'content', 'faqs',  'heroVideo', 'heroImage', 'galleryImages', 'testimonials'));
    }


    public function about()
    {
        $stats = Statistic::orderBy('sort_order')->get();
        $content = HomeContent::firstOrCreate(['id' => 1]);
        $galleryImages = Media::where('type', 'gallery_image')->where('is_active', true)->ordered()->get();
        return view('pages.about', compact('galleryImages', 'content', 'stats'));
    }
    public function portfolio(Request $request){
        $query = Portfolio::with(['brand', 'category']);

        if ($request->filled('cat_id')) {
            $query->where('cat_id', $request->cat_id);
        }
        $portfolios = $query->latest()->get();
        return view('pages.portfolio',compact('portfolios'));
    }

    // careers
    public function careers()
    {
        $careers = Career::all();
        return view('pages.careers', compact('careers'));
    }

    public function showBrand(Brand $brand)
    {
        $allBrands = Brand::whereHas('portfolios')->get();

        $brand->load(['portfolios', 'portfolios.category']);

        return view('pages.brand-show', compact('brand', 'allBrands'));
    }


    public function articlesIndex()
    {
        $articles = Article::latest()->paginate(6);
        return view('pages.articles.index', compact('articles'));
    }

    public function articlesShow(Article $article)
    {
        $latestArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(5)
            ->get();
        return view('pages.articles.show', compact('article', 'latestArticles'));
    }
}
