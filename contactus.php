<?php include("header2.php");?>

<div class="bg container-fluid">

</div>
<br>

  <div class="container">
        <div class="container-box rotated">
<button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Contact Us</button>
</div>

<!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Contact Us</h4>
</div>
<div class="modal-body">
    
        <form role="form" method="post" id="reused_form" >
        <p>
            Send your message in the form below and we will get back to you as early as possible.
        </p>
    
        <div class="form-group">
            <label for="name">
                Name:</label>
            <input type="text" class="form-control" 
            id="name" name="name"   required maxlength="50">

        </div>
        <div class="form-group">
            <label for="email">
                Email:</label>
            <input type="email" class="form-control" 
            id="email" name="email" required maxlength="50">
        </div>
        <div class="form-group">
            <label for="name">
                Message:</label>
            <textarea class="form-control" type="textarea" name="message"
            id="message" placeholder="Your Message Here" 
            maxlength="6000" rows="7"></textarea>
        </div>
                 
          
        
                       
        
        <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It! &rarr;</button>

    </form>
    <div id="success_message" style="width:100%; height:100%; display:none; ">
        <h3>Sent your message successfully!</h3>
    </div>
    <div id="error_message" 
    style="width:100%; height:100%; display:none; ">
        <h3>Error</h3>
        Sorry there was an error sending your form.

    </div> 
</div>
  
</div>

 </div>
</div>
      </div>
    

<?php include("footer.php");?>