<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::with('batch')->get();
        //$students= DB::table('students')->get();
        return view('student',['students'=>$students,'layout'=>'index']);
    }


    public function login()
    {
        return view('Login');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if($search!="")
        {
            $students= DB::table('students')->where('speciality', $search)->get();
            return view('student',['students'=>$students,'layout'=>'index']);
        }

        $students= DB::table('students')->get();
        return view('student',['students'=>$students,'layout'=>'index']);

    }

    public function home()
    {
        $students = DB::table('students')->count();
        $student1=DB::table('students')
        ->where('speciality','Running')
        ->count();
        $student2=DB::table('students')
        ->where('speciality','Old')
        ->count();
        return view('Home',['students'=>$students,'student1'=>$student1,'student2'=>$student2]);
    }
    public function checklogin(Request $request)
    {

        $name = $request->input('username');
        $pass =$request->input('pass');
        if($name=="sajjad" && $pass=="sajjad")
        return redirect('/');
        else
        return redirect('/login');
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students= Student::all();
        return view('student',['students'=>$students,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new Student();
        $student->cne=$request->input('cne');
        $student->firstName=$request->input('firstName');
        $student->secondName=$request->input('secondName');
        $student->age=$request->input('age');
        $student->speciality=$request->input('speciality');
        $student->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        $students= Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        $students= Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student=Student::find($id);
        $student->cne=$request->input('cne');
        $student->firstName=$request->input('firstName');
        $student->secondName=$request->input('secondName');
        $student->age=$request->input('age');
        $student->speciality=$request->input('speciality');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
         return redirect('/');

    }
}
