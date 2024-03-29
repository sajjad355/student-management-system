<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
     <title> 
           Batch
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
    <section class="col-md-8 offset-md-2" >
       @include("batchslist")
     </section>
    <section class="col"> </section>
    </div>
    </div>
    

    @elseif($layout=="index1")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-8 offset-md-2" >
       @include("studentlist1")
     </section>
    <section class="col"> </section>
    </div>
    </div>

    @elseif($layout=="create")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-7">
       @include("batchslist")
     </section>
    <section class="col">
    <div class="card mb-3">
  <img src="https://image.freepik.com/free-vector/haapy-cute-kids-boy-girl-study_97632-1586.jpg" width="500" height="345" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">Create a new <strong> Batch </strong></h5>
    <hr>
    <form action="{{url('/batchstore')}}" method="post">
     @csrf


  <div class="form-group">
    <label for="exampleFormControlSelect1">Batch Name<span style="color:red">*</span></label>
    <select class="form-control" name="name" id="batchname" required>
      <option value="Rose" selected disabled>Please select Batch Name</option>
      <option value="Rose">Rose</option>
      <option value="Tulip">Tulip</option>
      <option value="Crocus">Crocus</option>
      <option value="Dahlia">Dahlia</option>
      <option value="Iris">Iris</option>
      <option value="Lily">Lily</option>
    </select>
  </div>

  <div class="form-group">
    <label>Course Name<span style="color:red">*</span></label>
    <input type="text" name="course_name" class="form-control" placeholder="Enter Course Name" value="Physics" required>
  </div>



  <div class="form-group">
    <label for="exampleFormControlSelect1">Course Year<span style="color:red">*</span></label>
    <select class="form-control" name="course_desc" id="batchname" required>
      <option value="1st year">1st Year</option>
      <option value="2nd  year">2nd Year</option>
    </select>
  </div>



  <div class="form-group">
    <label for="exampleFormControlSelect1">Batch Time<span style="color:red">*</span></label>
    <select class="form-control" name="time" id="batchname" required>
    <option value="Rose" selected disabled>Please select Batch Name</option>
      <option value="8-9 am">8-9 am</option>
      <option value="9-10 am">9-10 am</option>
      <option value="10-11 am">10-11 am</option>
      <option value="11-12 pm">11-12 pm</option>
      <option value="12-1 pm">12-1 pm</option>
      <option value="1-2 pm">1-2 pm</option>
      <option value="3-4 pm">3-4 pm</option>
      <option value="4-5 pm">4-5 pm</option>
      <option value="5-6 pm">5-6 pm</option>
      <option value="6-7 pm">6-7 pm</option>
      <option value="7-8 pm">7-8 pm</option>
    </select>
  </div>


  <div class="form-group">
    <label>Capacity<span style="color:red">*</span></label>
    <input type="number" name="capacity" class="form-control" value="10" placeholder="Enter Capacity" required min=0>
  </div>


<input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">

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
    <form action="{{url('/updatebatch/'.$batch->id)}}" method="post">
     @csrf

  <div class="form-group">
    <label>Batch Name</label>
    <input type="text" value="{{$batch->name}}" name="name" class="form-control" placeholder="Enter name" readonly>
  </div>

  <div class="form-group">
    <label>Course Name</label>
    <input type="text" value="{{$batch->course_name}}" name="course_name" class="form-control" placeholder="Enter course_name" readonly>
  </div>

  <div class="form-group">
    <label>Batch Description</label>
    <input type="text" value="{{$batch->course_desc}}" name="course_desc" class="form-control" placeholder="Enter course_desc" readonly>
  </div>

  <div class="form-group">
    <label>Batch Time</label>
    <input type="text" value="{{$batch->time}}" name="time" class="form-control" placeholder="Enter time" readonly>
  </div>

  <div class="form-group">
    <label>Capacity</label>
    <input type="text" value="{{$batch->capacity}}" name="capacity" class="form-control" placeholder="Enter capacity" readonly>
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
       @include("batchslist")
     </section>
    <section class="col"> 
    <div class="card mb-3">
  <img src="https://www.pngkit.com/png/detail/956-9564990_junior-icon-editor-free-download-for-windows-edit.png" width="500" height="345" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">Change <strong>Information</stron></h5>
    
    <form action="{{url('/updatebatch/'.$batch->id)}}" method="post">
     @csrf

     <div class="form-group">
    <label>Batch Name</label>
    <input type="text" value="{{$batch->name}}" name="name" class="form-control" placeholder="Enter Batch Name" readonly >
  </div>

  <div class="form-group">
    <label>Course Name</label>
    <input type="text" value="{{$batch->course_name}}" name="course_name" class="form-control" placeholder="Enter Course Name" >
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Course Year<span style="color:red">*</span></label>
    <select class="form-control" name="course_desc" id="batchname" required>
    <option value="{{$batch->course_desc}}">{{$batch->course_desc}}</option>

    @if($batch->course_desc=="1st year")
      <option value="2nd Year">2nd Year</option>
      @else
      <option value="1st Year">1st Year</option>
      @endif
    </select>
  </div>

  <div class="form-group">
    <label>Batch Time</label>
    <select class="form-control" name="time"  required>
    <option value="{{$batch->time}}">{{$batch->time}}</option>
    <option value="8-9 am">8-9 am</option>
      <option value="9-10 am">9-10 am</option>
      <option value="10-11 am">10-11 am</option>
      <option value="11-12 pm">11-12 pm</option>
      <option value="12-1 pm">12-1 pm</option>
      <option value="1-2 pm">1-2 pm</option>
      <option value="3-4 pm">3-4 pm</option>
      <option value="4-5 pm">4-5 pm</option>
      <option value="5-6 pm">5-6 pm</option>
      <option value="6-7 pm">6-7 pm</option>
      <option value="7-8 pm">7-8 pm</option>

    </select>

  </div>

  <div class="form-group">
    <label>Capacity</label>
    <input type="number" value="{{$batch->capacity}}" name="capacity" class="form-control" placeholder="Enter capacity" min=0>
  </div>
  <input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">

</form>
</div>
</div>
    </section>
    </div>
    </div>


    
    @endif
    <footer> </footer>
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