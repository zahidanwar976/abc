<h2><?php echo $title;?></h2>
<?php echo validation_errors();?>
<form method="POST" action="<?php echo base_url('posts/add')?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" id="" placeholder="Enter Title" name="title">
  </div>
  <div class="form-group">
    <label>Slug</label>
    <input type="text" class="form-control" id="" placeholder="Enter Slug" name="slug">
  </div>
  <div class="form-group">
    <label for="">Body</label>
    <textarea class="form-control" name="body" placeholder="body"></textarea>
    <!-- <input type="" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>