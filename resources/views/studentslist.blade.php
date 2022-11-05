<?php
          $total= 0;
          ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function myFunction() {
  alert("Do you want to delete this student?");
}
</script>
<style>
body {
  font-family: Arial;
}
h6 {

  right: 0px;
  border: 1px solid grey;
  border-bottom: 2px solid grey;
}
</style>
</head>
<body>
    

   

<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">List of <strong>Students</strong></h5>
    <form class=" form-inline md-form mr-auto mb-4" action="{{url('/search')}}" method="post">
    @csrf
    <p class="card-text">All the Information About students in this system. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    <form class="example" style="margin:auto;max-width:300px">
    <br>
  <h6><input type="text" class="form-control" style="height:31px;" id="myInput" onkeyup="searchFun()" placeholder="Search" name="search"></h6>
  <h5><button type="submit" class="btn btn-success" style="border-radius: 0 !important; height:34px"><i class="fa fa-search"></i></button></h5>
</form>


</form>

<div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xs table-responsive-xl ">
<table class="table table-striped " id="myTable">
  <thead >
    <tr style="background-color:rgb(153, 153, 102)">

      <th scope="col">First Name</th>
      <th scope="col">College Name</th>
      <th scope="col">Address</th>
      <th scope="col">Batch Name</th>
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
      <td>{{$student->batch->name}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
      <a href= "{{url('/payment/'.$student->id)}}" class="btn btn-sm btn-info"> payment </a>
      <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning"> Edit </a>
      <a href="{{url('/destroy/'.$student->id)}}" class="btn btn-sm btn-danger" onclick="myFunction()"> Delete </a>
      </td>
    </tr>
    <?php $count=1; ?>   
    @endforeach
    @if($count==0)
    
    <td colspan="8" style="text-align:center"> <h5>Oops!!! There is no student !</h5></td>


@endif
  </tbody>
</table>
</div>
</div>
</div>
<script>
      const searchFun= () =>{
      let filter=document.getElementById('myInput').value.toUpperCase();
      let mtTable=document.getElementById('myTable');
      let tr=myTable.getElementsByTagName('tr');
       
       for(var i=0; i<tr.length;i++)
       {
         let td=tr[i].getElementsByTagName('td')[0];
         if(td)
         {
           let textvalue=td.textContent || td.innerHTML;

           if(textvalue.toUpperCase().indexOf(filter)>-1)
           {
             tr[i].style.display="";
           }
           else{
            tr[i].style.display="none";
           }
         }
         
       }

      }
</script>
</body>
</html> 

 

