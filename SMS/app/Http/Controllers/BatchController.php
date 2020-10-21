<?php

namespace App\Http\Controllers;
use App\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchs= Batch::all();
        return view('batch',['batchs'=>$batchs,'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batchs= Batch::all();
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
        $batch->save();
         return redirect('/batch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $batch=Batch::find($id);
        $batchs= Batch::all();
        return view('batch',['batchs'=>$batchs,'batch'=>$batch,'layout'=>'show']);
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
        $batchs= Batch::all();
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
        $batch->save();
        return redirect('/batch');
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
        $batch->delete();
         return redirect('/batch');
    }
}
