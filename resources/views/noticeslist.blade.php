<?php
          $total= 0;
          ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
body {
  font-family: Arial;
}
h6 {

  right: 0px;
  border: 1px solid grey;
  border-bottom: 2px solid grey;
}
.design {
  text-align: justify;
  text-justify: inter-word;
}
p.space {
  padding-right: 40px;
  padding-left: 14px;
}
.design1{

  padding-left: 10px;
}
</style>
</head>
<body>
    


<div style="text-align:">
<a href="{{url('/createnotice')}}" class="btn btn-sm btn-success"> Create a new Notice  </a>
  </div>   

<div class="card mb-3" style="background-color:rgb(26, 0, 13)">
  <div class="card-body">
    <h5 class="card-title" style="color:white">All<strong> Notices</strong></h5><br>



  <?php $count=0; ?>   
    @foreach($notices as $notice)

    <div class="container center col-md-10 offset-md-1 " style="background-color:white; border-radius: 10px" data-aos="flip-left" >
    
    <pre></pre>
 
    <p style="color:black"><br> <strong>&nbsp;Date: </strong> {{$notice->updated_at}}</p>
     <p style="color:black"><strong>&nbsp;Subject:</strong> {{$notice->Subject}}</p>
     <div class="design"> <strong>&nbsp;&nbsp;Details:<br></strong> <p style="color:black" class="space">{{$notice->Details}}<pre></pre></p></div>

<div class="design1">
     <a href="{{url('/editnotice/'.$notice->id)}}" class="btn btn-sm btn-info">Edit</a>

     <a href="{{url('/destroynotice/'.$notice->id)}}" class="btn btn-sm btn-danger">Delete </a>
     </div>
      <br><br>
      <pre> </pre>
    </div>
    <br><br>
    <?php $count=1; ?>   
    @endforeach

    @if($count==0)
    <p style="color:white">Oops!!! There is no notice! </p>
@endif

</div>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(
      {
        offset:200,
        duration:800,
      }
    );
  </script>
</body>
</html> 

 

