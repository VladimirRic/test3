<?php

namespace App\Tests;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function getCurrentTest() {
        return 'Test1Controller';
    }
}
