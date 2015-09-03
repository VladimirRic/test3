<?php

namespace App\Http\Controllers\Tests;

use Illuminate\Http\Request;

use App\Tests\Test;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getTest() {
        $test = Test::find(1);
        return $test->controller;
    }
}
