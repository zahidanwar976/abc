<h2><?php echo $title;?></h2>
<?php 
foreach ($posts as  $value) { ?>
<h3><?php echo $value->title;?></h3>
<small class="post_date">Post on : <?php echo $value->create_at;?></small><br>
<?php echo $value->body;?>
<br><br>
<p><a class="btn btn-info" href="<?php echo base_url('/posts/'.$value->slug)?>">Read More</a></p>
<!-- <p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$value->slug)?>">Read More</p> -->
<?php }?>