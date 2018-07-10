<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Package1 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test1';
    }
}