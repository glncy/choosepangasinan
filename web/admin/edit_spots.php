<form method="POST" action="edit_process_spots.php?id=<?php echo $id?>&name=<?php echo $name;?>">
<div class="form-group">
	<label>Name of Place:</label>
	<input type="text" class="form-control" value="<?php echo $name;?>" name="name">
</div>
<div class="form-group">
	<label>Description:</label>
	<textarea class="form-control" rows="10" style="resize: none;" name="des"><?php echo htmlspecialchars($des);?></textarea>
</div>
<div class="form-group" align="right">
	<a href="delete_process_spots.php?id=<?php echo $id?>&name=<?php echo $name;?>"><input type="button" class="btn btn-sucess" value="Delete"></a>
  	<input type="submit" class="btn btn-warning" value="Submit">
 </div>
</form>