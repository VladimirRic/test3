<?php

namespace App\Http\Controllers\Tests;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tests\Test1;

class Test1Controller extends Controller
{
    //

    public function index() {
        return view('tests.test1.home');
    }

    public function postSave(Request $request) {
        return view('tests.test1.quest');
    }

    public function getQuest($id) {
        $data = Test1::find($id);
        return view('tests.test1.quest',['num' => $data->num, 'var1' => $data->var1, 'var2' => $data->var2, 'info' => $data->info]);
    }
}
