<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function user()
    {
        $fname = "Soumya";
        $lname = "Tripathy";
        return ($fname. " " . $lname);
    }
}
