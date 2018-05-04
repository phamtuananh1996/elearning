<?php

namespace GFL\Elearning\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function response($data,$status=200)
    {
        return response()->json($data,$status);
    }
}
