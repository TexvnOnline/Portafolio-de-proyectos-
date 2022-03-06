<?php

namespace App\Http\Controllers;

use App\Page;
use App\Slider;
use App\Company;
use App\Contact;
use App\Social;
use Illuminate\Http\Request;
use App\Http\Requests\PageUpdateRequest;
 
class PageController extends Controller
{

    public function index()
    {
        $id=1;

        $sliders = Slider::orderBy('id','DESC')->paginate();
        $socials = Social::orderBy('id','DESC')->paginate();
        $contact = Contact::where('id',$id)->firstOrFail();
        $company = Company::where('id',$id)->firstOrFail();
        return view('admin.page.index', compact ('sliders','socials','contact','company'));
    }
}
