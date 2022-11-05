<?php
          $total= 0;
          ?>
<!doctype html>
<script>
function myFunction() {
  alert("Do you want to remove this student?");
}
</script>
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
  <div class="card-body">
    <h5 class="card-title">List of <strong>Students</strong></h5>
    <form class=" form-inline md-form mr-auto mb-4" action="{{url('/search')}}" method="post">
    @csrf
    <p class="card-text">All students in this section.</p>

</form>

<div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xs table-responsive-xl ">
<table class="table table-striped ">
  <thead >
    <tr style="background-color:rgb(153, 153, 102)">

    <th scope="col">First Name</th>
      <th scope="col">College Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Status</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php $count=0; ?>   
    @foreach($students as $student)
    <tr>
    <td>{{$student->firstName}}</td>
      <td>{{$student->cne}}</td>
      <td>{{$student->secondName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
           <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning"> Edit </a>
           <a href="{{url('/destroy1/'.$bid.'/'.$student->id)}}" class="btn btn-sm btn-danger"  onclick="myFunction()"> Remove </a>
           <a href= "{{url('/payment/'.$student->id)}}" class="btn btn-sm btn-info"> payment </a>

     
    </tr>
    <?php $count=1; ?>      
    @endforeach
    @if($count==0)
    
    <td colspan="8" style="text-align:center"> <h5>Oops!!! There is no student!</h5></td>


@endif
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
