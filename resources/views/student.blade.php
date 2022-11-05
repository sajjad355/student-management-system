<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>

  @include("navvar")

  <div class="row  header-container justify-content-center">
    <div class="header">
       <h1>Student Management System</h1>
       </div>
       </div>
       

    @if($layout=="index")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-8 offset-md-2" >
       @include("studentslist")
     </section>
    <section class="col"> </section>
    </div>
    </div>


    @elseif($layout=="create")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-8">
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
    <label>Student ID</label>
    <input type="text" name="cne" class="form-control" placeholder="Enter ID" required>
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="firstName" class="form-control" placeholder="Enter First Name" required>
  </div>

  <div class="form-group">
    <label>Second Name</label>
    <input type="text" name="secondName" class="form-control" placeholder="Enter Second Name" required>
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter Age" required min=0>
  </div>

  <div class="form-group">
    <label>Status</label>
    <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality" required>
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
    <form action="{{url('/update/'.$student->id)}}" method="post">
     @csrf

  <div class="form-group">
    <label>CNE</label>
    <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter CNE" readonly>
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter First Name" readonly>
  </div>

  <div class="form-group">
    <label>Second Name</label>
    <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter Second Name" readonly>
  </div>



  <div class="form-group">
    <label>Age</label>
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


    @elseif($layout=="edit")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-8">
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
    <label>Student Id</label>
    <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter ID" required>
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter First Name" required>
  </div>

  <div class="form-group">
    <label>Second Name</label>
    <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter Second Name" required>
  </div>


  <div class="form-group">
    <label>Age</label>
    <input type="number" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter Age" min=0 required>
  </div>

  <div class="form-group">
    <label>Status</label>
    <input type="text" value="{{$student->speciality}}" name="speciality" class="form-control" placeholder="Enter Speciality" required>
  </div>
  <input type="submit" class="btn btn-info" value="Edit">
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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>