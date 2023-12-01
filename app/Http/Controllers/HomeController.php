<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\HomePage;
use App\Models\OurService;

class HomeController extends Controller
{
    public function home()
    {
        $homePage = HomePage::firstOrFail();

        return view('welcome', compact('homePage'));
    }

    public function ourServices()
    {
        $homePage = HomePage::firstOrFail();
        $ourServices = OurService::firstOrFail();

        return view('our-services', compact('homePage', 'ourServices'));
    }

    public function resources()
    {
        $homePage = HomePage::firstOrFail();
        $articles = Article::query()->get();

        return view('resources', compact('homePage', 'articles'));
    }

    public function aboutUs()
    {
        $homePage = HomePage::firstOrFail();
        $aboutUs = HomePage::firstOrFail();

        return view('about-us', compact('homePage', 'aboutUs'));
    }

    public function contactUs()
    {
        $homePage = HomePage::firstOrFail();
        $contactUs = HomePage::firstOrFail();

        return view('contact-us', compact('homePage', 'contactUs'));
    }

    public function forProfessionals()
    {
        $homePage = HomePage::firstOrFail();
        $forProfessionals = HomePage::firstOrFail();

        return view('for-professionals', compact('homePage', 'forProfessionals'));
    }
}
