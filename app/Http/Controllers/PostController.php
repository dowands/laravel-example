<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function get($id)
    {
        return \Illuminate\Support\Facades\App::make(\App\Command\UpdatePost::class)->exec($id);
    }
}