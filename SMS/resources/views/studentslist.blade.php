<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Management System</title>
  </head>
  <body>

<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">List of <strong>Students</strong></h5>
    <form class=" form-inline md-form mr-auto mb-4" action="{{url('/search')}}" method="post">
    @csrf
    <p class="card-text">All the Information About students in this system. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


     <input class="form-control mr-sm-2" style="width:120px;height:30px;" type="text" name="search" placeholder="Search" aria-label="Search">
     <button class="btn"><i class="fa fa-search"></i></button></p>

</form>

    <div class="table-responsive-sm">
<table class="table table-striped ">
  <thead >
    <tr style="background-color:rgb(153, 153, 102)">

      <th scope="col">Student Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Batch Name</th>
      <th scope="col">Age</th>
      <th scope="col">Status</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->secondName}}</td>
      <td>{{$student->batchid}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
           <a href= "{{url('/show/'.$student->id)}}" class="btn btn-sm btn-info"> Show </a>
           <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning"> Edit </a>
           <a href="{{url('/destroy/'.$student->id)}}" class="btn btn-sm btn-danger"> Delete </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
