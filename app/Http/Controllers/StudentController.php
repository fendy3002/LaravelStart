<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function getList(){
        $select = \DB::select("select * from student;");
        return view("student.list", ["select" => $select]);
    }
    public function getView($id){
        $select = \DB::select("select * from student where id = :id;", ["id" => $id]);
        $select = $select[0];
        return view("student.view", ["student" => $select]);
    }

    public function getAdd(){
        $student = (object)[
            "id" => null,
            "name" => null,
            "address" => null,
            "major" => null,
            "join" => null,
            "semester" => null,
            "gender" => null
        ];
        return view("student.edit", ["student" => $student, "mode" => "add"]);
    }
    public function getEdit($id){
        $select = \DB::select("select * from student where id = :id;", ["id" => $id]);
        $select = $select[0];
        return view("student.edit", ["student" => $select, "mode" => "edit"]);
    }

    public function postAdd(){
        $student = [
            "id" => \Request::input("id"),
            "name" => \Request::input("name"),
            "address" => \Request::input("address"),
            "major" => \Request::input("major"),
            "join" => \Request::input("join"),
            "semester" => \Request::input("semester"),
            "gender" => \Request::input("gender")
        ];

        \DB::table("student")->insert($student);
        return redirect("/student/list");
    }

    public function postEdit(){
        \DB::statement("update student set
                name = :name,
                address = :address,
                major = :major,
                `join` = :join,
                semester = :semester,
                gender = :gender
            where id = :id;", [
            "id" => \Request::input("id"),
            "name" => \Request::input("name"),
            "address" => \Request::input("address"),
            "major" => \Request::input("major"),
            "join" => \Request::input("join"),
            "semester" => \Request::input("semester"),
            "gender" => \Request::input("gender")
        ]);
        return redirect("/student/list");
    }
}
