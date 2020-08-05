<?php

namespace App\Http\Controllers;

use App\Tag;    
use App\Post;
use App\Setting;
use App\Category;
use App\Profile;
use App\User;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function index()
    {
        return view('index');
        
    }
}
