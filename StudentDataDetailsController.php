<?php

namespace App\Http\Controllers;

use App\Models\student_Data_Details;
use Illuminate\Http\Request;
use DB;


class StudentDataDetailsController extends Controller
{
    function StoreStudentDetails(Request $req)
    {    
        $maxid=DB::table('student_data')->max('id');
        //return dd($maxid);
        $modata = new student_Data_Details;
        $student_Data_Details=$req->input();
        $modata->Student_id = $maxid;
        $modata->fname = $student_Data_Details['fname'];
        $modata->lname = $student_Data_Details['lname'];
        $modata->roll = $student_Data_Details['roll'];
        $modata->course = $student_Data_Details['course'];
        $modata->address = $student_Data_Details['address'];
        $modata->phone = $student_Data_Details['phone'];
        $modata->fatherName = $student_Data_Details['fathersname'];
        $modata->motherName = $student_Data_Details['mothername'];
        $modata->save();
        return redirect()->back();
    }  
  function ShowData()
 {}
}
