<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function getIndex(){
        return response(get_class($this), 200);
    }
}
