<?php

namespace App\Http\Controllers;

use App\Models\studentData;
use Illuminate\Http\Request;
use DB;

class StudentDataController extends Controller
{
     function store(Request $req)
    {
       $inputData = $req->input();
       $modata = new studentData;
       $modata->fname=$inputData['fname'];
       $modata->lname=$inputData['lname'];
       $modata->roll=$inputData['roll'];
       $modata->course=$inputData['course'];
       $modata->address=$inputData['address'];
       $modata->phone=$inputData['phone'];
       $modata->save();
       return redirect('student_data_details');

    }

    function ShowData()
    {
      $studentData=DB::select('select * from student_data');
      return view('Frontend/home',['studentData'=>$studentData]);
    }
}
