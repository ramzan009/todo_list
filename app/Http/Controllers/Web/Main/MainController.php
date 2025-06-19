<?php

namespace App\Http\Controllers\Web\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
      return view('main.main');
    }

}
