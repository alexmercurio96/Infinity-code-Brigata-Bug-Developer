<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class AnnouncementController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }  
    public function createAnnouncement() {
        return view('announcements.create');
    }
}

