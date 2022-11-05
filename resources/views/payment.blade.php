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
           Payment
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href =  
"https://www.flaticon.com/svg/static/icons/svg/1870/1870051.svg" 
        type = "image/x-icon"> 
  </head>
  <body>
<?php
$flag=0;
$total=0;
$type=0;
$total1=0;
$total2=0;
$total3=0;
$tcheck="";
?>

<?php
$flag1=0;
?>
  @include("navvar")

  <div class="row  header-container justify-content-center">
    <div class="header">
       <h2>Student Management System</h2>
       </div>
       </div>

       @if($layout=="newpayment")
    <div class="container-fluid">
    <div class="row">

    <section class="col-md-6 offset-md-3">
    <div class="card mb-3">
  <img src="https://image.freepik.com/free-vector/haapy-cute-kids-boy-girl-study_97632-1586.jpg" width="500" height="345" class="card-img-top" alt="None">
  <div class="card-body">
    <h5 class="card-title">Create a new <strong> Payment </strong></h5>
    <hr>
    <form action="{{url('/paymentstore')}}" method="post">
     @csrf


  <div class="form-group">
    <label for="exampleFormControlSelect1">Payment Type<span style="color:red">*</span></label>
    <select class="form-control" name="Type" id="batchname" readonly required>
    @foreach($payments as $payment)

      <?php
      $type=$payment->Type;
   $flag=1;
      ?>
      @endforeach

      @if($flag==1)
      <option value="{{$type}}" selected>
    
      {{$type}}
      <?php
      $tcheck=$type;
      ?>
      </option>
      @if($tcheck=="Monthly")
      <option value="Contruct" >Contruct</option>
      @else
      <option value="Monthly" >Monthly</option>

      @endif
      @endif

      @if($flag==0)
      <option value="Contruct" selected>Contruct</option>
      <option value="Monthly" >Monthly</option>

      @endif
    </select>


  </div>

  <div class="form-group">
    <label>Total Payment<span style="color:red">*</span></label>
    
    @foreach($payments as $payment)
    <?php
          $total= $payment->Total;
          ?>
    @endforeach

    @if ($total>0)
    <input type="number" name="Total" class="form-control" placeholder="Enter Total amount" value= "{{$total}}"    required>
    @else
    <input type="number" name="Total" class="form-control" placeholder="Enter Total amount" value= "" min=0  required>
    @endif
     

  </div>

  <div class="form-group" hidden>
    <label>Total Payment<span style="color:red">*</span></label>
    <input type="text" name="Sid" id="total" class="form-control" placeholder="Enter Total amount" value="{{$sid}}" required>
  </div>



  <div class="form-group">

    <label>Paid Amount<span style="color:red">*</span></label>
    <input type="number" name="Paid" id="paid" class="form-control" placeholder="Enter paid amount" value="" min=200 required>
  </div>

  @if ($tcheck=="Contruct")
  <div class="form-group">

    <label>Due Amount<span style="color:red">*</span></label>
    @foreach($payments as $payment)
    <?php
          $total1= $total1 + $payment->Paid;
          ?>
    @endforeach
<?php
    $total2= $total-$total1;
    ?>
    <input type="number" name="due" id="due" class="form-control" placeholder="Enter paid amount" value="{{$total2}}" min=0 required readonly>
  </div>
  @endif


<div style="text-align:center">
<input style="width:100px" id="save" type="submit" class="btn btn-info" value="Save"> <br>
</div>


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
    <script>

$(document).ready(function(){
	 if($("#due").val()==0 && $("#total").val()!=0)
   {
    alert("Your payment is Clear!");
    $("#save").hide();
    location.href = "{{url('/payment/'.$sid)}}";
   }
  else{
    $("#save").show();
  }
  $("#paid").change(function()
{
	 if($("#due").val()< $("#paid").val())
	{	
		alert("Amount is more than Due!");
    $("#save").hide();
	}	
  else
  {
    $("#save").show();
  }
});


});
  </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>