<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos, write code here, to Get Photos you can check photograph class in includes/initialize.php
?>
<?php include_layout_template('admin_header.php'); ?>

<h2>Photographs</h2>

<?php echo output_message($message); ?>
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
		<th>Comments</th>
		<th>&nbsp;</th>
  </tr>
<?php if(isset($photos) && !empty($photos)) :  ?>
<?php foreach($photos as $photo):?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
		<td>
			<a href="comments.php?id=">
				
			</a>
		</td>
		<td><a href="delete_photo.php?id=">Delete</a></td>
  </tr>
<?php endforeach; ?>
<?php endif; ?>
</table>
<br />
<a href="photo_upload.php">Upload a new photograph</a>

<?php include_layout_template('admin_footer.php'); ?>
