<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class landinPageController extends Controller
{
    //Landing Page
    public function homePage(){
        return view("index");
    }
    public function aboutPage(){
        return view("about");
    }
    public function companyProfilePage(){
        return view("company-profile");
    }
    public function portfolioPage(){
        return view("portfolio");
    }
    public function supportPage(){
        return view("portfolio");
    }
    public function teamPage(){
        return view("team");
    }
    public function contactPage(){
        return view("contact");
    }




}
