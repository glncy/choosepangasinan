	</div>
	<div class="row">
			<div class="col-md-12 footer">
				<span><a href="#" data-toggle="modal" data-target="#contact">Contact Us</a> | </span>
				<span><a href="#" data-toggle="modal" data-target="#candf">Comments and Feedbacks</a> | </span>
				<span><a href="#" data-toggle="modal" data-target="#cc">Content Credits</a> | </span>
				<span>Copryright &copy 2016 Choose Pangasinan!</span>
			</div>
	</div>
	
</div>

<div class="modal fade" id="contact" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: skyblue;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contact Us</h4>
      </div>
      <div class="modal-body">




      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
  if (isset($_POST['name']))
  {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $comments=$_POST['comments'];
  $place="General";
  include("localhost.php");
  $query="INSERT INTO comments(name,email,com_rev,place) VALUES ('$name','$email','$comments','$place');";
  mysql_query($query);
  mysql_close();
  }
?>
<div class="modal fade" id="candf" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: skyblue;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Comments and Feedbacks</h4>
      </div>
      <div class="modal-body">
        <p>
        <!--forms-->
        <form method="POST" action="">
          <label>Name:</label>
                    <input type="text" class="form-control" name="name" required="required" placeholder="Name">
                    <br/>
          <label>Email:</label>
                  <input type="email" class="form-control" name="email" required="required" placeholder="Email">
                  <br/>
           <label for="textarea">Comment:</label>
                  <textarea class="form-control" rows="3" name="comments" required="required" placeholder="Tell Us about our Website! "></textarea>
                  <br/>
          <input type="submit" value="Submit" class="btn btn-default">
        </form>
        </p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="cc" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: skyblue;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Content Credits</h4>
      </div>
      <div class="modal-body">
        







      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



</body>
</html>