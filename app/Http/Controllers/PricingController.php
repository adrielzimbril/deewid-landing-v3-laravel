<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PricingController extends Controller
{
  public function index()
  : View | \Illuminate\Foundation\Application | Factory | Application {
    return view('content.pricing');
  }
}
