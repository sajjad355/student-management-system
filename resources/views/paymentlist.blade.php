<?php
          $total= 0;
          ?>

<script>
function myFunction() {
  alert("Do you want to clear this history?");
}
</script>
  <div style="text-align:right;right:100px">
  
  <label style="font-size:28px;font-family:Harlow Solid Italic;color:rgb(230, 92, 0)">Total Paid</label>

  @foreach($students as $student)
    <?php
          $total= $total+$student->Paid;
          ?>
    @endforeach
    &nbsp;
 <input type="text" style="width:80px;font-size:20px;font-family:Arial Black;color:red" value="&nbsp;{{$total}}" readonly>
 <label style="font-size:17px;font-family:Arial Black;color:rgb(230, 92, 0)">BDT</label>

  </div>
<div style="text-align:">
<a href="{{url('/createpayment/'.$sid)}}" class="btn btn-sm btn-success"> Create new Payment  </a>
  </div>



  <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xs table-responsive-xl ">


<table class="table table-striped ">
  <thead >
  <div style="text-align:">
  <!-- <label><a href="{{url('/deletehistory/'.$sid)}}" class="btn btn-sm btn-danger" onclick="myFunction()">Clear History </a></label> -->
  </div>
  <div style="text-align:">
  <label class="btn btn-sm btn-info">Payment History</label>
  </div>





    <tr style="background-color:rgb(153, 153, 102)">
      <th scope="col">Type</th>
      <th scope="col">Total (BDT)</th>
      <th scope="col">Paid (BDT)</th>
      <th scope="col">Due (BDT)</th>
      <th scope="col">Pay Date</th>

    </tr>
  </thead>
  <tbody>
    <?php $count=0; ?>
    @foreach($students as $student)


    <tr>
    
       <td>{{$student->Type}}</td>
      <td>{{$student->Total}}</td>
      <td>{{$student->Paid}}</td>
      <td>{{$student->Due}}</td>
      <td>{{$student->updated_at}}</td>
   


      
      
      <?php $count=1; ?>                                                                 
    @endforeach
    @if($count==0)
    
        <td colspan="8" style="text-align:center"> <h5>There is no payment histoty for this student!</h5></td>

    
    @endif
  </tbody>
</table>
</div>



 
