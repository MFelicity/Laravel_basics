<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to LaravelProgramming!';
        return view('pages.index', compact('title')); 
    } 

    public function About(){
        $title = 'About us';
        return view('pages.about', compact('title')); 
        //return view('pages.about')->with('title',$title);
    } 
    public function services(){
        $data = array (
            'title' => 'services',
            'services' => ['Web Design','Programming', 'SEO']
        );
        return view('pages.services')->with($data); 
    } 


}