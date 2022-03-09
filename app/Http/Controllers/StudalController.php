<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudalData;
use Validator;
use Illuminate\Support\Facades\DB;



class StudalController extends Controller
{
    public function myForm(Request $request){

        // if($request->isMethod("post")){
        //     $request->validate([
        //         "name"=>"required|min:4|max:20",
        //         "email"=>"required",
        //         "phone"=>"required|digits_between:9,11"
        //     ],[

        //         "name.required"=> "Rendes nevet adj meg :) "

        //     ]);
        // }

        //         return view("my_form");
        
    }

    public function addStudal(){
        return view("my_form");
    }

    public function submitStudal(Request $request){

        // $request->validated();
        $validate=Validator::make($request->all(),[


            "name"=>"required",
            "email"=>"required",
            "phone"=>"required"
        ]);

        if($validate->fails()){

                return redirect("add-studal")->withErrors($validate)->withInput();
        }

         print_r($request->all());


        
    }
    public function listStudent(){

         $students = DB::table("students")->select("students.name as Név","students.email as Ímél","students.phone as Telcsi")
         ->join("courses","students.id","=","courses.students_id")
         ->where("courses.course","JAVA")
         ->get();

         $students = DB::table("students")
         ->select("name","email")
         ->where("phone","281-982-6389")
         ->orwhere("email","fortiz@example.org")
         ->get();
        
        
        
         // $students = DB::table("students")->select("students.name as Név","students.email as Ímél","courses.course as Tanfolyam","courses.price as Ár")
        // ->leftjoin("courses","students.id","=","courses.students_id")
        // ->get(); mindent kiír 
        //$students = DB::table("students")->select("students.name as Név","students.email as Ímél","courses.course as Tanfolyam","courses.price as Ár")
       // ->rightjoin("courses","students.id","=","courses.students_id")
        //->get(); //csak azt írja ki ami benne van a course táblába (mindent kiír)



        // $students = DB::table("students")->where("email","LIKE","%example.org")->get(); 


        
        
        
        
         // $students = DB::table("students")->where("id",4)->orWhere("email","daniela.blanda@example.net")->get();
        //  $students = DB::table("students")->where("id",4)->where(function($query){
        //      $query->where("name","Robbie Littel")->orWhere("email","voconner@example.net"); szűrés 2 dologra 
        //  })->get();


        //$students = DB::table("students")->whereBetween("id",[2, 6])->get(); köztes keresés
        // $students = DB::table("students")->whereIn("id",[2,5,6,7])->get(); konkrét keresés





        echo "<pre>";
        print_r($students);


    }
    // voconner@example.net



public function insertStudent(){

DB::table("courses")->insert([
[
    "course"=>"Dzsángó",
    "price"=>58956,
    "students_id"=>40
    ],
    [
    "course"=>"C++",
    "price"=>180000,
    "students_id"=>23

        ]
]
);

echo "Adatok elmenve";

}

public function updateCourse(){
    DB::table("courses")->where("id",4)->update([
        "course"=>"Angular",
        "price"=>"170000",
        "students_id"=>"40"
    ]);

    echo "Módosítás sikeres";
}
public function updateOrCourse(){
    DB::table("courses")->updateOrInsert(
        ["course"=>"Java"],
        ["course"=>"Java","price"=>150000,"students_id"=>45]
    );

    echo "GERÁPPÁÁÁÁÁÁÁ";
    
}
public function deleteCourse(){
    //DB::table("courses")->delete();
    DB::table("courses")->truncate();//összes id-t kitörli és előről kezdi számolni 

    echo "na csumiiii";
}
}