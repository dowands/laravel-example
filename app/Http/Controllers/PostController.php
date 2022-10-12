<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function get(\App\Command\UpdatePostCommand $command, $id)
    {
        return $command->exec($id);
    }
}