<h2><?php echo $my_post['title'] ?></h2>
<div class="post_body">
	<small class="post_date">Post on : <?php echo $my_post['create_at']?></small><br>
	<?php echo $my_post['body'] ?>
</div>
<br>
<a class="btn btn-info pull-left" href="<?php echo base_url('/posts/edit/'.$my_post['ID'])?>">Edit</a>
<form action="<?php echo base_url('/posts/delete/'.$my_post['ID'])?>">
	<input type="submit" class="btn btn-danger pull-right" name="" value="Delete">
</form>