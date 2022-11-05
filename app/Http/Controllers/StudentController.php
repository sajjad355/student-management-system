<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Student;
use Auth;
use App\Batch;
use App\Notice;
use App\Payment;
use App\Tpayment;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class StudentController extends Controller
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

        $students =Student::with('batch')->where('firstName','!=',"None")->get();

        //$students= DB::table('students')->get();
        return view('student',['students'=>$students,'layout'=>'index']);
    }
    public function notice()
    {
        $notices = DB::table('notices')
        ->orderBy('updated_at','DESC')->get();
        return view('student',['notices'=>$notices,'layout'=>'notice']);
    }
    public function index2()
    {
        
        return view('Login1');
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
                $students= Student::with('batch')->where('firstName', $search)
                ->orWhere('speciality', $search)
                ->orWhere('secondName', $search)
    
                ->get();
       
            return view('student',['students'=>$students, 'layout'=>'index']);
        }
        $students= Student::with('batch')->where('firstName','!=',"None")->get();
        return view('student',['students'=>$students,'layout'=>'index']);

    }
    public function income(Request $request)
    {
        $students = DB::table('students')
        ->where('firstName','!=',"None")->count();
        $student1=DB::table('students')
        ->where('firstName','!=',"None")
        ->where('speciality','Running')
        ->count();
        $student2=DB::table('students')
        ->where('firstName','!=',"None")
        ->where('speciality','Old')
        ->count();

        $student3 = DB::table('tpayments')->sum('Paid');
        $sDate = $request->input('startDate');
        $eDate = $request->input('endDate');
        $income= DB::table('tpayments')
        ->whereBetween('updated_at', [ $sDate,  $eDate])
        ->sum('Paid');

        return view('Report',['students'=>$students,'student1'=>$student1,'student2'=>$student2,'student3'=>$student3,'income'=>$income]);

    }

    public function home()
    {
        $students = DB::table('students')->where('firstName','!=',"None")->count();
        $student1=DB::table('students')
        ->where('speciality','Running')
        ->where('firstName','!=',"None")
        ->count();
        $student2=DB::table('students')
        ->where('speciality','Old')
        ->where('firstName','!=',"None")
        ->count();

        $student3 = DB::table('tpayments')->sum('Paid');
        $income="0";
        return view('Report',['students'=>$students,'student1'=>$student1,'student2'=>$student2,'student3'=>$student3,'income'=>$income]);
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
       // $students= Student::all();
       $students =Student::with('batch')->where('firstName','!=',"None")->get();
       $batches= Batch::all();
        return view('student',['students'=>$students,'batches'=>$batches,'layout'=>'create']);
    }
    public function createnotice()
    {
       // $students= Student::all();
       $notices= Notice::all();
        return view('student',['notices'=>$notices,'layout'=>'Ncreate']);
    }

    public function newpayment($id)
    {

        $payments = DB::table('payments')->where('studentid', $id)->get();
        return view('payment',['payments'=>$payments,'sid'=>$id,'layout'=>'newpayment']);
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
        $batch=new Batch();

        $student->cne=$request->input('cne');
        $student->firstName=$request->input('firstName');
        $student->secondName=$request->input('secondName');
        $student->age=$request->input('age');
        $cid=$request->input('batchName');
        $old=DB::table('students')
        ->where('batchid',$cid)
        ->where('firstName','!=',"None")
        ->count();
        $new=$old+1;

        $uBatch=  DB::table('batches')->where('id', '=', $cid)->update(['current' =>$new]);    

  


        if($request->input('batchName')==null)
        {
            $student->batchid=19;  
        }
        else{
            $student->batchid=$request->input('batchName');

        }
        $student->speciality=$request->input('speciality');
        $student->save();
        return redirect('/');

    }
    public function storenotice(Request $request)
    {
        $notice=new Notice();
        $notice->Subject=$request->input('Subject');
        $notice->Details=$request->input('Details');
        $notice->save();
        return redirect('/notice');

    }




    public function paymentstore(Request $request)
    {
        $payment=new Payment();
        $payment1=new Tpayment();
        $payment->Type=$request->input('Type');
        $payment->Total=$request->input('Total');
        $payment->Paid=$request->input('Paid');
        $payment1->Paid=$request->input('Paid');

        $payment->Due=$request->input('due')-$request->input('Paid');
        if($payment->Due<0)
        {
            $payment->Due=$request->input('Total')-$request->input('Paid');
            
        }
  
        $payment->studentid=$request->input('Sid');
        $payment->updated_at= Carbon::now()->timestamp;;
        $id=$request->input('Sid');
        $payment->save();
        $payment1->save();
        return redirect('/payment/'.$id);

    }

    /**

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $student= Student::with('batch')->get()->find($id);
       $students= Student::with('batch')->get();
       return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);

    }

    public function payment($id)
    {

        $students = DB::table('payments')
        ->where('studentid', $id)
        ->where('Total','!=',0)
        ->orderBy('updated_at','DESC')->get();
        return view('student',['students'=>$students,'sid'=>$id,'layout'=>'payment']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student= Student::with('batch')->get()->find($id);
        $students =Student::with('batch')->where('firstName','!=',"None")->get();
        $batches = DB::table('batches')->where('flag', 1)->get();
        return view('student',['students'=>$students,'student'=>$student,'batches'=>$batches,'layout'=>'edit']);
    }
    public function editPayment($id)
    {
            $payment=Payment::find($id);
            return view('student',['payment'=>$payment,'layout'=>'editPayment']);
    }
    public function editnotice($id)
    {
        $notice=Notice::find($id);
        return view('student',['notice'=>$notice,'layout'=>'editnotice']);
    }
    public function Profile()
    {
        $id=2;
        $profile=User::find($id);
        return view('student',['profile'=>$profile,'layout'=>'profile']);

    }
    public function changePassword()
    {

        return view('student',['layout'=>'changepassword']);

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
        $student->batchid=$request->input('batchName');
        $student->speciality=$request->input('speciality');
        $student->save();
        return redirect('/');
    }

    public function updatePayment(Request $request, $id)
    {
        $payment=Payment::find($id);
        $payment->Type=$request->input('Type');
        $payment->Total=$request->input('TotalPayment');
        $payment->Paid=$request->input('PaidAmount');
        $payment->Due=$request->input('DueAmount');
        $payment->studentid=$request->input('sID');
        $payment->save();
        //return redirect('/');
        //('/editPayment/'.$student->id)
        return redirect('/editPayment/'.$id);
    }

    public function updatenotice(Request $request, $id)
    {
        $notice=Notice::find($id);
        $notice->Subject=$request->input('Subject');
        $notice->Details=$request->input('Details');
        $notice->save();
        return redirect('/notice');
    }

    public function updateprofile(Request $request)
    {
        $id=2;
        $profile=User::find($id);
        $profile->name=$request->input('name');
        $profile->email=$request->input('email');
        $profile->save();
        return redirect('/');
    }

    public function updatepassword(Request $request)
    {
        $id=2;
        $profile=User::find($id);

        $oldform= $request->input('old');


        $user = DB::table('users')->where('id', $id)->first();
        $olddb=$user->password;

        if(Hash::check($oldform, $olddb))
        {
            if($request->input('new')==$request->input('confirm'))
            {
               $profile->password=Hash::make($request->input('new'));
                $profile->save();
               return redirect('/')->with('alert', 'Successfully Changed Password !!!');

            }
            else{
                return redirect()->back() ->with('alert', 'The password confirmation does not match!!!');
            }

        }
        else{
            return redirect()->back() ->with('alert', 'Invalid Password!!!');
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
        $student=Student::find($id);
        $student->cne="None";
        $student->firstName="None";
        $student->secondName="None";
        $student->age="None";
        $student->batchid="19";
        $student->speciality="None";
        
     

        $user = DB::table('students')->where('id', $id)->first();
        $bid=$user->batchid;
        $old=DB::table('students')
        ->where('batchid',$bid)
        ->where('firstName','!=',"None")
        ->count();
        $new=$old-1;
        
        if($new<0)
        {
            $new=0;
        }

        $uBatch=  DB::table('batches')->where('id', '=', $bid)->update(['current' =>$new]); 
        $student->save();  
        return redirect('/');

    }
    public function destroy1($bid,$cid)
    {

        $uBatch=  DB::table('students')->where('id', '=', $cid)->update(['batchid' =>19]);    

  
        $old=DB::table('students')
        ->where('batchid',$bid)
        ->where('firstName','!=',"None")
        ->count();
        $new=$old-1;
        $new=$new+1;
        if($new<0)
        {
            $new=0;
        }

        $uBatch=  DB::table('batches')->where('id', '=', $bid)->update(['current' =>$new]);    


       return redirect('/batch');

    }
    public function destroynotice($id)
    {
        $notice=Notice::find($id)->delete();
        return redirect('/notice');

    }
    public function deletehistory($id)
    {


        $students=  DB::table('payments')->where('studentid', '=', $id)->update(['Total' => 0]);  
        $student1=  DB::table('payments')->where('studentid', '=', $id)->update(['Paid' => 0]);       
        $student2=  DB::table('payments')->where('studentid', '=', $id)->update(['Due' => 0]);       



        return redirect('/payment/'.$id);

        
    }
        public function logoutt()
    {
        Auth::logout();
         return redirect('/login');

    }
    
}
