<?php

namespace App\Http\Controllers;
use App\Batch;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $batchs = DB::table('batches')->where('flag', 1)->get();
        //$batchs= Batch::all();
        return view('batch',['batchs'=>$batchs,'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $batchs = DB::table('batches')->where('flag', 1)->get();
        return view('batch',['batchs'=>$batchs,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch=new Batch();
        $batch->name=$request->input('name');
        $batch->course_name=$request->input('course_name');
        $batch->course_desc=$request->input('course_desc');
        $batch->time=$request->input('time');
        $batch->capacity=$request->input('capacity');
        $batch->flag=1;

        $cB=DB::table('batches')
        ->where('name',$request->input('name'))
        ->orWhere('time', $request->input('time'))
        ->count();
        if($cB<=0)
        {
            $batch->save();
            return redirect('/batch');
        }
        else{
            return redirect()->back() ->with('alert', 'Time or Section name clash! Please check!!!');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showstudents($bid)
    {
        $students= Student::with('batch')->where('batchid', $bid)->get();
        //$students= DB::table('students')->get();
        return view('batch',['students'=>$students, 'bid'=>$bid,'layout'=>'index1']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch=Batch::find($id);
        $batchs = DB::table('batches')->where('flag', 1)->get();
        return view('batch',['batchs'=>$batchs,'batch'=>$batch,'layout'=>'edit']);
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
        $batch=Batch::find($id);
        $batch->name=$request->input('name');
        $batch->course_name=$request->input('course_name');
        $batch->course_desc=$request->input('course_desc');
        $batch->time=$request->input('time');
        $batch->capacity=$request->input('capacity');

        $cB=DB::table('batches')
        ->Where('time', $request->input('time'))
        ->Where('name', '<>', $request->input('name'))
        ->count();
        if($cB<=0)
        {
            $batch->save();
            return redirect('/batch');
        }
        else{
            return redirect()->back() ->with('alert', 'Time clash! Please check!!!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $batch=Batch::find($id);
        $batch->flag=0;
        $mytime = date('Y-m-d H:i:s');
        $batch->name=date('Y-m-d').' (Ex)';
        $batch->time="none";

        $students= Student::with('batch')->where('batchid', '=', $id)->update(['speciality' => 'Old']);       

        $batch->save();
        return redirect('/batch');


    }
    
}
