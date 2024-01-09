<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;




class AnnouncementController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }  
    public function createAnnouncement() {
        return view('announcements.create');
    }

    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcements.show', compact ('announcement'));
    }

    public function indexAnnouncement()
    {
        $announcement = Announcement::paginate(10);
        return view('announcements.index', compact ('announcement'));
    }
}

