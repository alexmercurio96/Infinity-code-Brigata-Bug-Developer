<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    function welcome () {
        $announcements=Announcement::take(6)->orderby('created_at','desc')->get();
        
    return view('welcome',compact('announcements'));

    
}

public function categoryShow(Category $category)
    {
        return view('category.show',compact('category'));
    }

}
