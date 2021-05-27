<?php

namespace App\Http\Controllers;

use App\About;
use App\ContactUsPage;
use App\Home;
use App\Package;
use App\Photo;
use App\PhotoCategory;
use App\Showcase;
use App\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function landing()
    {
        $landing_photos = Photo::whereHas('photo_categories', function ($query) {
            $query->where('slug', 'landing-page');
        })->limit(10)->get();

        return view('landing')->with([
            'landing_photos' => $landing_photos
        ]);
    }

    public function home()
    {
        $home = Home::find(1);

        $home_subbanner_photos = Photo::whereHas('photo_categories', function ($query) {
            $query->where('slug', 'home-sub-banner');
        })->limit(10)->get();

        $portfolio_photos = Photo::whereHas('photo_categories', function ($query) {
            $query->where('slug', 'portfolio');
        })->limit(10)->get();

        $videos = Video::limit(10)->get();

        // $portfolio_photos = Photo::all()->filter(function ($item) {
        //     $item = $item->photo_categories()->pluck('slug')->toArray();
        //     if (!in_array('home-sub-banner', $item)) {
        //         return $item;
        //     }
        // })->values();

        return view('home')->with([
            'home' => $home,
            'home_subbanner_photos' => $home_subbanner_photos,
            'portfolio_photos' => $portfolio_photos,
            'videos' => $videos,
        ]);
    }

    public function about()
    {
        $about = About::find(1);

        return view('about')->with([
            'about' => $about,
        ]);
    }

    public function showcase()
    {
        $showcase = Showcase::find(1);
        $photo_categories = PhotoCategory::whereNotIn('slug', ['home-sub-banner', 'portfolio'])->get();

        // dd($photo_categories);

        return view('showcase')->with([
            'showcase' => $showcase,
            'photo_categories' => $photo_categories
        ]);
    }

    public function showcaseDetails($id)
    {
        $photo_category = PhotoCategory::find($id);
        $photos = $photo_category->photos()->simplePaginate(4);

        // dd($photos);

        return view('showcase_details')->with([
            'photos' => $photos,
            'photo_category' => $photo_category,
        ]);
    }

    public function packages()
    {
        $package = Package::find(1);

        return view('packages')->with([
            'package' => $package
        ]);
    }

    public function contactUs()
    {
        $contact = ContactUsPage::find(1);

        return view('contact_us')->with([
            'contact' => $contact
        ]);
    }
}