<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeServiceController extends Controller
{
    public function index()
    {
        return view("manage.type_service");
    }
}
