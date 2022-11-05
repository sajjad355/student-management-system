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
  <nav class="navbar navbar-expand-lg navbar-light" style="height:55px;background-color:rgb(0, 153, 153)">
  <a class="navbar-brand" href="{{url('/')}}"><span style="color:white">Student Management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span></a>
  <a class="navbar-brand" href="{{url('/login')}}"><span style="color:white;font-size:15px">Login</span></a>
  <a class="navbar-brand" href="{{url('/notice1')}}"><span style="color:white;font-size:15px">Notice</span></a>

  </nav>
  <div class="row  header-container justify-content-center">
    <div class="header">
       <h2>Student Management System</h2>
       </div>
       </div>
       

    @if($layout=="notice")
    <div class="container-fluid">
    <div class="row">
    <section class="col-md-9 offset-md-2" >
       @include("noticeslist1")
     </section>
    <section class="col"> </section>
    </div>
    </div>

@endif

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