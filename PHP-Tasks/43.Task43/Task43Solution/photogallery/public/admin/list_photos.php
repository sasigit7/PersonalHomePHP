<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos, write code here, to Get Photos you can check photograph class in includes/initialize.php
?>
<?php include_layout_template('admin_header.php'); ?>
 <?php $photos=Photograph::find_all();?>
 <?php foreach($photos as $photo){
	 $comments=Photograph::comments($photo->id);
	 //echo "<pre>";print_r($comments[0]);
 }?>
<h2>Photographs</h2>

<?php echo output_message($message); ?>
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
		<th>Comments Count</th>
		<th>Delete Action</th>
		 
  </tr>
<?php if(isset($photos) && !empty($photos)) :  ?>
<?php foreach($photos as $photo): 
//print_r($photos);?>
  <tr>
    <td><img height="50px" width="50px" src="../images/<?php echo $photo->filename;?>"></img></td>
    <td><?php echo $photo->filename;?></td>
    <td><?php echo $photo->caption;?></td>
    <td><?php echo $photo->size;?></td>
    <td><?php echo $photo->type;?></td>
    <?php $comments=Photograph::comments($photo->id);?>
    <td><?php echo $comments[0]?></td>
		
		<td><a href="delete_photo.php?id=">Delete</a></td>
  </tr>
<?php endforeach; ?>
<?php endif; ?>
</table>
<br />
<a href="photo_upload.php">Upload a new photograph</a>

<?php include_layout_template('admin_footer.php'); ?>
