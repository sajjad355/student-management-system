<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link     rel="stylesheet" href="{{asset('CSS/style.css')}}">
     <title> 
           Student
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href =  
"https://www.flaticon.com/svg/static/icons/svg/1870/1870051.svg" 
        type = "image/x-icon"> 
  </head>
  <body>

  @include("navvar")

  <div class="row  header-container justify-content-center">
    <div class="header">
       <h2>Student Management System</h2>
       </div>
       </div>
       

    @if($layout=="index")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-9 offset-md-2" >
       @include("studentslist")
     </section>
    <section class="col"> </section>
    </div>
    </div>

    @elseif($layout=="notice")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-9 offset-md-2" >
       @include("noticeslist")
     </section>
    <section class="col"> </section>
    </div>
    </div>


    @elseif($layout=="payment")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-9 offset-md-2" >
       @include("paymentlist")
     </section>
    <section class="col"> </section>
    </div>
    </div>


    @elseif($layout=="create")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-7">
       @include("studentslist")
     </section>
    <section class="col">
    <div class="card mb-3">
  <img src="https://image.freepik.com/free-photo/cute-little-student-girl-study-photo-portrait_122104-7.jpg" width="500" height="345" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">Create a new <strong> Student </strong></h5>
    <hr>
    <form action="{{url('/store')}}" method="post">
     @csrf



  <div class="form-group">
    <label>Student Name<span style="color:red">*</span></label>
    <input type="text" name="firstName" class="form-control" placeholder="Enter Name" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">College Name<span style="color:red">*</span></label>
    <select class="form-control" name="cne" id="batchname" required>
    <option disabled selected>Please select college</option>
      <option value="Phulbari Govt College">Phulbari Govt College</option>
      <option value="Adarsha Degree College">Adarsha Degree College</option>
      <option value="Bongobondhu College">Bongobondhu College</option>
      <option value="Fulbari Mohila College">Fulbari Mohila College</option>
      <option value="Fulbari Pukuri College">Fulbari Pukuri College</option>
      <option value="Others">Others</option>
    </select>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" name="secondName" class="form-control" placeholder="Enter Address" value="Fulbari" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Batch Name</label>
    <select class="form-control"  name="batchName" id="batchname" >
    <option disabled selected>Please Select Batch Name</option>
      @foreach($batches as $batch)
     @if($batch->flag!=0)
      <option value="{{$batch->id}}">{{$batch->name}}</option>
      @endif
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Phone<span style="color:red">*</span></label>
    <input type="text" name="age" class="form-control" placeholder="Enter Phone Number" value="01XXX-XXXXXX" required >
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Status<span style="color:red">*</span></label>
    <select class="form-control" name="speciality" id="batchname" required>
    <option value="Running">Runnning</option>
      <option value="Old">Old</option>
    </select>
  </div>

<input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">

</form>
    </div>
    </div>
   
 </section>
    </div>
    </div>


    @elseif($layout=="Ncreate")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-7 offset-md-3">
    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Create a new <strong> Notice </strong></h5>
    <hr>
    <form action="{{url('/storenotice')}}" method="post">
     @csrf



  <div class="form-group">
    <label>Subject<span style="color:red">*</span></label>
    <input type="text" name="Subject" class="form-control" placeholder="Enter subject" value="Important." required>
  </div>



  <div class="form-group">
    <label>Details</label>
    <textarea id="w3review" name="Details" rows="9" cols="76" placeholder="Write Details here." required></textarea>  </div>



<input type="submit" class="btn btn-success" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">
<a href= "{{url('/notice')}}" style="height:32px;width:50px;" class="btn btn-sm btn-info"> Back </a><br>


</form>

    </div>
    </div>
   
 </section>
    </div>
    </div>



    @elseif($layout=="show")
    <div class="container-fluid">
    <div class="row ">
    <section class="col-md-6 offset-md-3">
    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"> <strong> Information </strong></h5>
    <hr>
    <form action="{{url('/update/'.$student->id)}}" method="post">
     @csrf



  <div class="form-group">
    <label>Student Name</label>
    <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter Name" readonly>
  </div>

  <div class="form-group">
    <label>College Name</label>
    <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter CNE" readonly>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter Address" readonly>
  </div>

  <div class="form-group">
    <label>Batch Name</label>
    <input type="text" value="{{$student->batch->name}}" name="secondName" class="form-control" placeholder="Enter Second Name" readonly>
  </div>



  <div class="form-group">
    <label>phone</label>
    <input type="text" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter Age" readonly>
  </div>

  <div class="form-group">
    <label>Status</label>
    <input type="text" value="{{$student->speciality}}" name="speaciality" class="form-control" placeholder="Enter Speciality" readonly>
  </div>


</form>
</div>
</div>
     </section>
    </div>
    </div>


    @elseif($layout=="profile")
    <div class="container-fluid">
    <div class="row ">
    <section class="col-md-6 offset-md-3">
    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"> <strong> My Profile </strong></h5>
    <hr>
    <form action="{{url('/updateprofile')}}" method="post">
     @csrf

  <div class="form-group">
    <label>Name</label>
    <input type="text" value="{{$profile->name}}" name="name" class="form-control" required >
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" value="{{$profile->email}}" name="email" class="form-control" readonly  required>
  </div>

  <div class="form-group">
    <label>Position</label>
    <input type="text" value="{{$profile->Position}}" name="position" class="form-control" required >
  </div>

  <br>
  <div style="text-align:center">
  <input type="submit" style="height:36px;width:126px" class="btn btn-success" value="Update"><br>
  <a href= "{{url('/')}}" style="height:34px;width:126px" class="btn btn-sm btn-danger"> Cancel </a><br>
  <a href= "{{url('/changePassword')}}" style="height:32px" class="btn btn-sm btn-info"> Change Password </a>

</div>
</form>
</div>
</div>
     </section>
    </div>
    </div>


    @elseif($layout=="changepassword")
    <div class="container-fluid">
    <div class="row ">
    <section class="col-md-6 offset-md-3">
    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"> <strong> Change Password </strong></h5>
    <hr>
    <form action="{{url('/updatepassword')}}" method="post">
     @csrf

  <div class="form-group">
    <label>Old Password</label>
    <input type="password" value="" name="old" class="form-control" placeholder="Enter old password" required >
  </div>

  <div class="form-group">
    <label>New Password</label>
    <input type="password" value="" name="new" class="form-control" placeholder="Enter new password"  required>
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" value="" name="confirm" class="form-control" placeholder="Enter re-type password" required >
  </div>

  <br>
  <div style="text-align:center">
  <input type="submit" style="width:100px;height:40px" class="btn btn-success" value="Update">
  <a href= "{{url('/Profile')}}" style="height:34px;width:50px;" class="btn btn-sm btn-info"> Back </a><br>



</div>
</form>
</div>
</div>
     </section>
    </div>
    </div>




    @elseif($layout=="edit")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-7">
       @include("studentslist")
     </section>
    <section class="col"> 
    <div class="card mb-3">
  <img src="https://www.pngkit.com/png/detail/956-9564990_junior-icon-editor-free-download-for-windows-edit.png" width="500" height="345" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">Change <strong>Information</stron></h5>
    
    <form action="{{url('/update/'.$student->id)}}" method="post">
     @csrf


  <div class="form-group">
    <label>First Name</label>
    <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter First Name" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">College Name<span style="color:red">*</span></label>
    <select class="form-control" name="cne" id="batchname" required>
    <option value="{{$student->cne}}">{{$student->cne}}</option>


    @if($student->cne=="Bongobondhu College")
    <option value="Phulbari Govt College">Phulbari Govt College</option>
      <option value="Adarsha Degree College">Adarsha Degree College</option>
      <option value="Bongobondhu College">Bongobondhu College</option>
      <option value="Phulbari Pukuri College">Phulbari Pukuri College</option>
      <option value="Phulbari Mohila College">Phulbari Mohila College</option>
      <option value="others">Others</option>

      @elseif($student->cne=="Phulbari Govt College")
    <option value="Bongobondhu College">Bongobondhu College</option>
      <option value="Adarsha Degree College">Adarsha Degree College</option>
      <option value="Phulbari Pukuri College">Phulbari Pukuri College</option>
      <option value="Phulbari Mohila College">Phulbari Mohila College</option>
      <option value="others">Others</option>

      @elseif($student->cne=="Phulbari Mohila College")
    <option value="Bongobondhu College">Bongobondhu College</option>
      <option value="Adarsha Degree College">Adarsha Degree College</option>
      <option value="Phulbari Pukuri College">Phulbari Pukuri College</option>
      <option value="Phulbari Govt College">Phulbari Govt College</option>
      <option value="others">Others</option>

      @elseif($student->cne=="Adarsha Degree College")
    <option value="Bongobondhu College">Bongobondhu College</option>
    <option value="Phulbari Mohila College">Phulbari Mohila College</option>
      <option value="Phulbari Pukuri College">Phulbari Pukuri College</option>
      <option value="Phulbari Govt College">Phulbari Govt College</option>
      <option value="others">Others</option>

      @elseif($student->cne=="Phulbari Pukuri College")
    <option value="Bongobondhu College">Bongobondhu College</option>
    <option value="Phulbari Mohila College">Phulbari Mohila College</option>
      <option value="Adarsha Degree College">Adarsha Degree College</option>
      <option value="Phulbari Govt College">Phulbari Govt College</option>
      <option value="others">Others</option>

      @elseif($student->cne=="others")
    <option value="Bongobondhu College">Bongobondhu College</option>
    <option value="Phulbari Mohila College">Phulbari Mohila College</option>
      <option value="Adarsha Degree College">Adarsha Degree College</option>
      <option value="Phulbari Govt College">Phulbari Govt College</option>
      <option value="Phulbari Pukuri College">Phulbari Pukuri College</option>
 
      
      @endif
    </select>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter Address" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Batch Name</label>
    <select class="form-control"  name="batchName" id="batchname" required>
    <option value="{{$student->batch->id}}" selected>{{$student->batch->name}}</option>
    @foreach($batches as $batch)
     @if($batch->id!=$student->batch->id && $batch->flag!=0)
      <option value="{{$batch->id}}">{{$batch->name}}</option>
      @endif
       @endforeach
    </select>
  </div>


  <div class="form-group">
    <label>Phone</label>
    <input type="text" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter Age" required>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Status<span style="color:red">*</span></label>
    <select class="form-control" name="speciality" id="batchname" required>
    <option value="{{$student->speciality}}">{{$student->speciality}}</option>
    @if($student->speciality=="Running")
      <option value="Old">Old</option>
      @else
      <option value="Running">Running</option>
      @endif
    </select>
  </div>

  <input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">

</form>
</div>
</div>
    </section>
    </div>
    </div>




    @elseif($layout=="editPayment")
    <div class="container-fluid">
    <div class="row">
     <section class="col-md-8 offset-md-2">
    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Change <strong>Information</stron></h5>
    
    <form action="{{url('/updatePayment/'.$payment->id)}}" method="post">
     @csrf


  <div class="form-group">
    <label>Payment Type</label>
    <select class="form-control" name="Type" id="batchname" required>
    <option value="{{$payment->Type}}">{{$payment->Type}}</option>
    @if($payment->Type=="Monthly")
      <option value="Contruct">Contruct</option>
      @else
      <option value="Monthly">Monthly</option>
      @endif
    </select>  </div>
  <div class="form-group">
    <label>Total Payment</label>
    <input type="text" value="{{$payment->Total}}" name="TotalPayment" class="form-control" placeholder="Enter Total Payment" required>
  </div>
  <div class="form-group">
    <label>Paid Amount</label>
    <input type="text" value="{{$payment->Paid}}" name="PaidAmount" class="form-control" placeholder="Enter Paid Amount" required>
  </div>
  <div class="form-group">
    <label>Due Amount</label>
    <input type="text" value="{{$payment->Due}}" name="DueAmount" class="form-control" placeholder="Enter Due Amount" required>
  </div>
  <div class="form-group" hidden>
    <label>Student Id</label>
    <input type="text" value="{{$payment->studentid}}" name="sID" class="form-control" placeholder="Enter Stduent ID" required>
  </div>






  <input type="submit" class="btn btn-success" value="Save">
  <a href= "{{url('/payment/'.$payment->studentid)}}" style="height:34px;width:50px;" class="btn btn-sm btn-info"> Back </a><br>


</form>
</div>
</div>
    </section>
    </div>
    </div>


    @elseif($layout=="editnotice")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-7 offset-md-3">
    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Change <strong>Information</stron></h5>
    
    <form action="{{url('/updatenotice/'.$notice->id)}}" method="post">
     @csrf


  <div class="form-group">
    <label>Subject</label>
    <input type="text" value="{{$notice->Subject}}" name="Subject" class="form-control" placeholder="Enter subject" required>
  </div>

  <div class="form-group">
    <label>Details</label>
    <textarea id="w3review" name="Details" rows="9" cols="76" required>{{$notice->Details}} </textarea>  </div>
  </div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-success" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">
<a href= "{{url('/notice')}}" style="height:32px;width:50px;" class="btn btn-sm btn-info"> Back </a><br>

<pre></pre>

</form>
</div>
</div>
    </section>
    </div>
    </div>

    @endif

    <footer> </footer>
        <!-- Right click disabled code -->
    <script type="text/javascript">
    document.addEventListener("contextmenu",function(sajjad)
    {
      sajjad.preventDefault();
    });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>