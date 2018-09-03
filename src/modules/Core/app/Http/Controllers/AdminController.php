<?php

namespace Devtemple\Fastit\Modules\Core\App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('fastit-master::admin.index');
    }
}
