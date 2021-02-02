<?php


namespace Starryseer\Junit\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return view('junit::test');
    }
}