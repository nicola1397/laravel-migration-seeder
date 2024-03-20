<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class PageController extends Controller
{
    public function index()
    {
        $trains = Trains::orderBy("time_of_departure", "desc")->paginate(10);
        return view("home", compact("trains"));
    }
}
