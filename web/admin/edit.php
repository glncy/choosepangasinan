<form method="POST" action="edit_process.php?id=<?php echo $id?>&name=<?php echo $name;?>">
<div class="form-group">
	<label>Name of Place:</label>
	<input type="text" class="form-control" value="<?php echo $name;?>" name="name">
</div>
<div class="form-group">
	<label>Description:</label>
	<textarea class="form-control" rows="10" style="resize: none;" name="des"><?php echo htmlspecialchars($des);?></textarea>
</div>
<div class="form-group">
	<label>Google Map:</label>
	<input type="text" class="form-control" placeholder="E.g. 192.5,121" value="<?php echo $maps;?>" name="map">
</div>
<div class="form-group">
	<label>Accuweather Plugin Script</label>
	<textarea type="text" class="form-control" rows="5" style="resize: none;" name="aw"><?php echo $aw;?></textarea>
</div>
<div class="form-group" align="right">
	<a href="delete_process.php?id=<?php echo $id?>&name=<?php echo $name;?>"><input type="button" class="btn btn-sucess" value="Delete"></a>
  	<input type="submit" class="btn btn-warning" value="Submit">
 </div>
</form>