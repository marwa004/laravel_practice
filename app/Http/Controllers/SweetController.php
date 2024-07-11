<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweet;
class SweetController extends Controller
{
    //
    public function index(){
        $sweets=Sweet::all();
        return $sweets;
    }
}
