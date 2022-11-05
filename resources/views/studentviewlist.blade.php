<?php
          $total= 0;
          ?>
<script>
function myFunction() {
  alert("Do you want to hide this batch?");
}
</script>

<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Running<strong> Batches</strong> of<strong> Sajjad's</strong> sir.</h5>

    <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xs table-responsive-xl ">

<table class="table table-striped ">
  <thead >
    <tr style="background-color:rgb(153, 153, 102)">
      <th scope="col">Batch Name</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Description</th>
      <th scope="col">Time</th>
      <th scope="col">Capacity</th>
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
 
