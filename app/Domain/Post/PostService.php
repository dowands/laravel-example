<?php

namespace App\Domain\Post;

class PostService
{
    private RepoInterface $repo;
    function __construct(RepoInterface $repo)
    {
        $this->repo = $repo;
    }

    public function update($id)
    {
        return $this->repo->update($id);
    }
}