<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function __invoke()
  {
      return Todo::all();
  }
}
