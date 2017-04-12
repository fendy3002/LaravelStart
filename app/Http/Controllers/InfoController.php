<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function getWelcome(){
        // method response digunakan untuk langsung mencetak string / text ke layar
        // berguna untuk debugging
        return response("Welcome");
    }
    public function getParameter($name, $message){
        return response("name: $name, message: $message");
    }
    public function getQuery(){
        $name = \Request::input("name");
        $message = \Request::input("message");
        return response("name: $name, message: $message");
    }
    public function getView(){
        $message = "myMessage";
        // parameter ke-2 dari function view, menerima array
        // masing-masing key dalam array (dalam hal ini message)
        // akan dapat diakses dari view
        return view("info.view", ["message" => $message]);
    }
    public function postView(){
        $name = \Request::input("name");
        $message = \Request::input("message");
        return response("name: $name, message: $message");
    }

    public function getViewTemplate(){
        return view("info.viewTemplate");
    }
}
