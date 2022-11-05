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
           Home
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

    <div class="container-fluid">
    <div class="row">
    <section class="col-md-6 offset-md-3" >



    <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Information of <strong>Students</strong></h5>

    <div class="table-responsive-sm">
<table class="table table-striped " border=2>
  <thead >
    <tr style="background-color:rgb(153, 153, 102)">
      <th scope="col">Running Students</th>
      <th scope="col">Ex-Students</th>
      <th scope="col">Total Students</th>
      <th scope="col">Total Earned</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
       <?php
       echo $student1
       ?>     
      </td>
      <td>
       <?php
       echo $student2
       ?>     
      </td>
      <td>
       <?php
       echo $students
       ?>     
      </td>
      <td>
       <?php
       echo $student3
       ?>     
      </td>
    </tr>
</table>


<div class="row  header-container justify-content-center">
    <div class="header">
       <h2>Monthly Income</h2>
       </div>
       </div>

    <div class="container-fluid">
    <div class="row">
    <section class="col">
    <div class="card mb-3">
  <div class="card-body">
    <form action="{{url('/MI')}}" method="post">
     @csrf



  <div class="form-group">
    <label>Start Date<span style="color:red">*</span></label>
    <input type="date" name="startDate" class="form-control" required>
  </div>


  <div class="form-group">
    <label>End Date <span style="color:red">*</span></label>
    <input type="date" name="endDate" class="form-control"  value="" required>
  </div>

<div style="text-align:center">
<input type="submit" class="btn btn-info" value="Enter">
</div>



</form>
<div class="table-responsive-sm">
<table class="table table-striped ">
  <thead >
  <div style="text-align:">
    </div>
<br>
    <tr style="background-color:rgb(153, 153, 102)">
      <th colspan="2" style="text-align:center;" >Earned In This Month</th>
    </tr>
  </thead>
  <tbody>

    <tr>
    
       <td colspan="2" style="text-align:center;">
       <?php
       echo $income." BDT"
       ?>  
       </td>
  </tbody>
</table>
</div>
    </div>
    </div>
   
 </section>
 
    </div>
    </div>

</div>
</div>
</div>
 




     </section>
     
    <section class="col"> </section>
    </div>
    </div>

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