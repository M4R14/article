<?php

namespace M4R14\Article\Tests;

use Orchestra\Testbench\TestCase;
use M4R14\Article\ArticleServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ArticleServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
