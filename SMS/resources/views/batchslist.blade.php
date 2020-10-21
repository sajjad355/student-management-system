
<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">All<strong> Batches</strong></h5>
    <p class="card-text"><strong>Information</strong> of my Batches</p>

    <div class="table-responsive-sm">
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
    @foreach($batchs as $batch)
    <tr>
      <td>{{$batch->name}}</td>
      <td>{{$batch->course_name}}</td>
      <td>{{$batch->course_desc}}</td>
      <td>{{$batch->time}}</td>
      <td>{{$batch->capacity}}</td>
      <td>
           <a href= "{{url('/showbatch/'.$batch->id)}}" class="btn btn-sm btn-info">All students</a>
           <a href="{{url('/editbatch/'.$batch->id)}}" class="btn btn-sm btn-warning"> Edit </a>
           <a href="{{url('/destroybatch/'.$batch->id)}}" class="btn btn-sm btn-danger"> Delete </a>


      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
 
