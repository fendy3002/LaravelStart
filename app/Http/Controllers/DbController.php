<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DbController extends Controller
{
    public function getSelect(){
        $select = \DB::select("select * from test;");
        return view("db.select", ["select" => $select]);
    }

    public function postInsert(){
        $inserting = [
            "col1" => \Request::input("col1"),
            "col2" => \Request::input("col2"),
            "col3" => \Request::input("col3")
        ];
        \DB::table("test")->insert($inserting);
        return redirect("/db/select");
    }

    public function postUpdate(){
        $id = \Request::input("id");
        $updating = [
            "col1" => \Request::input("col1"),
            "col2" => \Request::input("col2"),
            "col3" => \Request::input("col3")
        ];
        \DB::table("test")->where("id", $id)->update($updating);
        return redirect("/db/select");
    }

    public function postDelete(){
        $id = \Request::input("id");
        \DB::statement("delete from test where id = :id", ["id" => $id]);
        return redirect("/db/select");
    }
}
