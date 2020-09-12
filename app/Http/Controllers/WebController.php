<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Service;
use App\Category;
use App\Tag;
use App\Company;
use App\Contact;
use App\Slider;
use App\Social;

class WebController extends Controller
{
    public function index()
    {
        
        $categories = Category::orderBy('name','ASC')->get();
        $portfolios = Portfolio::orderBy('id','DESC')->with('images','category','tags')->paginate(8);
        $services = Service::orderBy('id','DESC')->with('images')->paginate();
        $id1=1;
        $id2=2;
        $id3=3;
        $slider1 = Slider::with('image')->where('id',$id1)->firstOrFail();
        $slider2 = Slider::with('image')->where('id',$id2)->firstOrFail();
        $slider3 = Slider::with('image')->where('id',$id3)->firstOrFail();

        $contact = Contact::where('id',$id1)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();

        $company = Company::where('id',$id1)->firstOrFail();
        return view('web.index', compact('slider1','slider2','slider3','services','portfolios','company','categories','contact','socials'));
    }
    public function about()
    {
        $id=1;
        $company = Company::where('id',$id)->firstOrFail();

        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();

        return view('web.about', compact('company','contact','socials'));
    }
    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('id','DESC')->with('images','category','tags')->paginate(8);
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();

        return view('web.portfolio', compact('portfolios','contact','socials'));
    }
    public function service()
    {
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();
        $services = Service::orderBy('id','DESC')->with('images')->paginate(8);
        return view('web.service', compact('services','contact','socials'));
    }
    public function contact()
    {
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();
        return view('web.contact', compact('contact','socials'));
    }

    public function portfolioSingles($slug)
    {
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();
        $portfolio = Portfolio::with('images','category','tags')->where('slug',$slug)->firstOrFail();
        return view('web.portfolio-item', compact('portfolio','contact','socials'));
    }

    public function serviceSingles($slug)
    {
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();

        $categories = Category::orderBy('name','ASC')->get();
        $tags = Tag::orderBy('name','ASC')->get();
        $service = Service::with('images')->where('slug',$slug)->firstOrFail();
        return view('web.service-single', compact('service','categories','tags','contact','socials'));
    }
    public function category($slug)
    {
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();

        $category = Category::where('slug',$slug)->pluck('id')->first();
        $portfolios = Portfolio::where('category_id',$category)->orderBy('id','DESC')->paginate(8);
        return view('web.portfolio', compact('portfolios','contact','socials'));
    }
    public function tag($slug)
    {
        $id=1;
        $contact = Contact::where('id',$id)->firstOrFail();
        $socials = Social::orderBy('name','ASC')->get();

        $portfolios = Portfolio::whereHas('tags',function($query)use($slug){
            $query->where('slug',$slug);
        })->orderBy('id','DESC')->paginate(8);
        return view('web.portfolio', compact('portfolios','contact','socials'));
    }
}
