<?php

namespace Tests\Unit;

class PostRepoImpl implements \App\Domain\Post\RepoInterface
{
    function update($id){
        return 999;
    }
}