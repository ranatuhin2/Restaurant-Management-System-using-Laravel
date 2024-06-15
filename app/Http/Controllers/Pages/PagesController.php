<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Aboutimage;
use App\Models\Mchef;
use App\Models\Review;
use App\Models\Service;
use App\Models\Menu;

use App\Models\Others;




class PagesController extends Controller
{
    public function index_page(){
        $about=About::get()->first();
        $first=Aboutimage::where('key','first')->first();
        $seccond=Aboutimage::where('key','seccond')->first();
        $third=Aboutimage::where('key','third')->first();
        $fourth=Aboutimage::where('key','fourth')->first();

        $team=Mchef::orderBy('created_at','asc')->take(4)->get();
        $testimonial=Review::orderBy('created_at','asc')->take(4)->get();
        $service=Service::orderBy('created_at','asc')->take(4)->get();

        

        
 return view('frontend.pages.index',['about'=>$about,'first'=>$first,
        'seccond'=>$seccond,'third'=>$third,'fourth'=>$fourth,'team'=>$team,'testimonial'=>$testimonial,'service'=>$service]);

    }
   public function about_page(){
        $about=About::get()->first();
        //dd($about);
        $first=Aboutimage::where('key','first')->first();
        //dd($first);
        $seccond=Aboutimage::where('key','seccond')->first();
        $third=Aboutimage::where('key','third')->first();
        $fourth=Aboutimage::where('key','fourth')->first();
        $team=Mchef::orderBy('created_at','desc')->take(4)->get();

        return view('frontend.pages.about',['about'=>$about,'first'=>$first,
        'seccond'=>$seccond,'third'=>$third,'fourth'=>$fourth,'team'=>$team]);

    }
    public function service_page(){
        $service=Service::orderBy('created_at','asc')->take(4)->get();
        return view('frontend.pages.service',['service'=>$service]);
    }
    public function contact_page(){
        $contact= new Others();
        $contact=Others::get();
        $link=$contact[0]->maplink;
        
        return view('frontend.pages.contact')->with(['others'=>$link]);
    
    }
    public function menu_page(){
        $data = new Menu();
        $breakfast = Menu::where('category','breakfast')->take(8)->get();
        $lunch = Menu::where('category','lunch')->take(8)->get();
        $dinner = Menu::where('category','dinner')->take(8)->get();
        return view('frontend.pages.menu')->with(['breakfast'=>$breakfast,'lunch'=>$lunch,'dinner'=>$dinner]);
        
    }   

    public function testimonial_page(){
        $testimonial=Review::orderBy('created_at','asc')->take(4)->get();
        return view('frontend.pages.page.testimonial',['testimonial'=>$testimonial]);
    }
    public function team_page(){
        $team=Mchef::orderBy('created_at','asc')->take(4)->get();
        return view('frontend.pages.page.team',['team'=>$team]);
    }
    public function booking_page(){
        $book= new Others();
        $book=Others::get();
        $link=$book[0]->ytlink;
        
        return view('frontend.pages.page.booking')->with(['others'=>$link]);
    }

}
