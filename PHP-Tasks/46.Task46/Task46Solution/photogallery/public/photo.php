<?php require_once("../includes/initialize.php"); ?>
<?php
  if(empty($_GET['id'])) {
    $session->message("No photograph ID was provided.");
    redirect_to('index.php');
  }
  if(isset($_GET['id'])){
	$id=$_GET['id'];
	}
	else {
		$id='';
	}
  $photo = Photograph::find_by_id($id);
  if(!$photo) {
    $session->message("The photo could not be located.");
    redirect_to('index.php');
  }

	if(isset($_POST['submit'])) {
	  // Write Code here to add comments and save it into the database. Remember Use Comment Class and its database helper functions provided in the class.
	  // print_r($_POST);exit;
		$photo_id=$_GET['id'];
		$author=$_POST['author'];
		$body=$_POST['body'];
		comment::make($photo_id,$author,$body);
	} else {
		$author = "";
		$body = "";
	}
	$comments = $photo->comments($id);
	
?>
<?php include_layout_template('header.php'); ?>

<a href="index.php">&laquo; Back</a><br />
<br />

<div style="margin-left: 20px;">
  <img src="../public/images/<?php echo $photo->image_path(); ?>" />
  <p><?php echo $photo->caption; ?></p>
</div>

<div id="comments">
  <?php foreach($comments as $comment): ?>
    <div class="comment" style="margin-bottom: 2em;">
	    <div class="author">
	      <?php echo htmlentities($comment->author); ?> wrote:
	    </div>
      <div class="body">
				<?php echo strip_tags($comment->body, '<strong><em><p>'); ?>
			</div>
	    <div class="meta-info" style="font-size: 0.8em;">
	      <?php echo datetime_to_text($comment->created); ?>
	    </div>
    </div>
  <?php endforeach; ?>
  <?php if(empty($comments)) { echo "No Comments."; } ?>
</div>

<div id="comment-form">
  <h3>New Comment</h3>
  <?php echo output_message($message); ?>
  <form action="photo.php?id=<?php echo $photo->id; ?>" method="post">
    <table>
      <tr>
        <td>Your name:</td>
        <td><input type="text" name="author" value="<?php echo $author; ?>" /></td>
      </tr>
      <tr>
        <td>Your comment:</td>
        <td><textarea name="body" cols="40" rows="8"><?php echo $body; ?></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Submit Comment" /></td>
      </tr>
    </table>
  </form>
</div>

<?php include_layout_template('footer.php'); ?>
