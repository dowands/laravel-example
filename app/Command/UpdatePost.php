<?php

namespace App\Command;

class UpdatePost
{
    private \App\Domain\Post\PostService $service;
    function __construct(\App\Domain\Post\PostService $service)
    {
        $this->service = $service;
    }

    public function exec($id)
    {
        return $this->service->update($id);
    }
}