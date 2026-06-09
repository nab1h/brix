<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\HomeContent;
use App\Models\Faq;
use App\Models\Media;
use App\Models\Career;
use App\Models\Statistic;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
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

        return view('welcome',compact('careers','stats', 'content', 'faqs',  'heroVideo', 'heroImage', 'galleryImages', 'testimonials'));
    }


    public function about()
    {
        $stats = Statistic::orderBy('sort_order')->get();
        $content = HomeContent::firstOrCreate(['id' => 1]);
        $galleryImages = Media::where('type', 'gallery_image')->where('is_active', true)->ordered()->get();
        return view('pages.about', compact('galleryImages', 'content', 'stats'));
    }
    public function portfolio(){
        return view('pages.portfolio');
    }

    // careers
    public function careers()
    {
        $careers = Career::all();
        return view('pages.careers', compact('careers'));
    }

}
