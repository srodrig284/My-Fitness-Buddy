<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'My Fitness Buddy';
        /*return view('pages.index', compact('title'));*/
        return view('pages.index')->with('title', $title);
    }

    public function home(){
        $title = 'Home Page';
        /*return view('pages.index', compact('title'));*/
        return view('home.index')->with('title', $title);
    }

    public function meals(){
        $title = 'Todays Meals';
        return view('pages.meals')->with('title', $title);
    }

    public function allmeals(){
        $title = 'All My Meals';
        return view('pages.allmeals')->with('title', $title);
    }
}
