<?php
          $total= 0;
          ?>
<script>
function myFunction() {
  alert("Do you want to delete this batch?");
}
</script>

<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">All<strong> Batches</strong></h5>
    <p class="card-text"><strong>Information</strong> of my Batches</p>

    <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xs table-responsive-xl ">

<table class="table table-striped ">
  <thead >
    <tr style="background-color:rgb(153, 153, 102)">
      <th scope="col">Batch Name</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Description</th>
      <th scope="col">Time</th>
      <th scope="col">Capacity</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php $count=0; ?>   
    @foreach($batchs as $batch)
    <tr>
      <td>{{$batch->name}}</td>
      <td>{{$batch->course_name}}</td>
      <td>{{$batch->course_desc}}</td>
      <td>{{$batch->time}}</td>
      <td>{{$batch->capacity}}</td>
<!--       <td>{{$batch->current}}/{{$batch->capacity}}</td> -->
      <td>
           <a href= "{{url('/showstudents/'.$batch->id)}}" class="btn btn-sm btn-info" >All students</a>
           <a href="{{url('/editbatch/'.$batch->id)}}" class="btn btn-sm btn-warning"> Edit </a>
           <a href="{{url('/destroybatch/'.$batch->id)}}" class="btn btn-sm btn-danger" onclick="myFunction()"> Delete </a>


      </td>
    </tr>
    <?php $count=1; ?>  
    @endforeach
    @if($count==0)
    
    <td colspan="8" style="text-align:center"> <h5>Oops!!! There is no Batch !</h5></td>


@endif
  </tbody>
</table>
</div>
</div>
</div>
 
