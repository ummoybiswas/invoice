<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body onload="myfunc()">

<div class="container">
  <!--<h2>Modal Example</h2>
   Trigger the modal with a button 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Error Information</h4>
        </div>
        <div class="modal-body" style="color:red;font-weight:bold">
          <p style="color:red"><?=$error;?></p>
        </div>
        <div class="modal-footer">
          <a href="<?php echo site_url('client/new_ticket');?>"><button type="button" class="btn btn-success" >Ok</button></a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>
function myfunc(){
  $("#myModal").modal({show: true});
}
$(document).ready(function(){
 $("#myModal").on('hidden.bs.modal', function () {
             window.location.href = "<?php echo site_url('client/new_ticket');?>";
    });
});
</script>
</body>
</html>
