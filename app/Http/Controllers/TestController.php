<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TestController extends Controller
{
    public function show()
    {
        $date = Carbon::now();
        echo '<h1> Test server: </h1>';
        echo $date->toDayDateTimeString();
    }
}
