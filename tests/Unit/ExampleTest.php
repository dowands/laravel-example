<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        \Illuminate\Support\Facades\App::register(AppServiceProvider::class, true);
        $result = \Illuminate\Support\Facades\App::make(\App\Domain\Post\PostService::class)->update(1);

        $this->assertTrue(999 == $result);
    }
}
