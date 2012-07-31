<?php

class modernCMS {

	var $host;
	var $username;
	var $password;
	var $db;

	function connect() {
		$con = mysql_connect($this->host, $this->username, $this->password) or die(mysql_error());
		mysql_select_db($this->db, $con) or die(mysql_error());
	}

	function get_content($id = '') {
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM cms_content WHERE id = '$id'";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM cms_content ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<h1 class="title"> <a href="index.php?id=' . $row['id'] , '">'  . $row['title'] .  '</a></h1 >';
                        echo '<p class="meta"><span class="posted">Published by: ' .$row['author'] . '</span></p>';
echo '<p>' . $row['body'] , '</p> ';
                        echo '<div style="clear: both;">&nbsp;</div>';
                        echo '<p class="links"><a href="index.php?id=' . $row['id'] , '">Permalink // <a> <a href="index.php?id=' . $row['id'] , '#disqus_thread">Comments</a></p>';
                       
		}
		else:
			echo "<h1> Oops, this doesn't exist.</h1> Are you lost?</p>";
		endif;

	
}

	function read_content($id = '') {
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM cms_content WHERE id = '$id'";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM cms_content ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<h1 class="title"> <a href="index.php?id=' . $row['id'] , '">'  . $row['title'] .  '</a></h1>';
                        echo '<p class="meta"><span class="posted">Objavio/la: ' .$row['author'] . '</span></p>';
                        echo '<div style="clear: both;">&nbsp;</div>';
echo '<p>' . $row['body'] , '</p> ';
			                        echo '<p class="links"><a href="index.php?id=' . $row['id'] , '">Permalink <a></p>';
include 'comm.php';
                       
                       
		}
		else:
			echo "<h1> Oops, this doesn't exist. </h1> Are you lost?</p>";
		endif;
echo $return;
	
}

function add_content($p) {
	$title = mysql_real_escape_string($p['title']);
	$body = mysql_real_escape_string($p['body']);
        $email = mysql_real_escape_string($p['email']);
        $delcode = mysql_real_escape_string($p['delcode']);
        $author = mysql_real_escape_string($p['author']);

	if(!$title || !$body || !$author):
echo '<p>Something is missing. <a href="index.php"> Try again. </a> </p>' ;
		
	
	else:
	
	$sql = "INSERT INTO cms_content VALUES (null, '$title', '$body', '$email', '$delcode', '$author')";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Added.';

	endif;
	
}
	function manage_content($id = '') {
	echo '<div id="manage">';
	$sql = "SELECT * FROM cms_content ";
	$res = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($res)) :
	?>

	<div>
	<h2 class="title"><?=$row['title']?></h2>
	<span class="actions"><a href="update-content.php?id=<?=$row['id']; ?>">Edit</a> | <a href="?delete=<?=$row['id']; ?>">Delete</a></span>
	</div>
	<?php
		endwhile;
		echo '</div>'; // Zatvara div "manage"

	
	}

	function delete_content($id) {
		if(!$id) {
			return false;
		
		}else {
		$id = mysql_real_escape_string($id);
		$sql = "DELETE FROM cms_content WHERE id = '$id'";
		$res = mysql_query($sql) or die(mysql_error());
		echo 'Deleted.';
}
		
	}

function update_content_form($id) {	
	$id = mysql_real_escape_string($id);
	$sql = "SELECT * FROM cms_content WHERE id= '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
?>
<form method="post" action="index.php">
<input type="hidden" name="update" value="true" />
<input type="hidden" name="id" value="<?=$row['id']?>" />	
	<div>
<label for="title">Title:</label>
<input type="text" name="title" id="title" value="<?=$row['title']?>" />
	</div>
	
	<div>
<label for="body">Text:</label>
<textarea name="body" id="body" rows="8" cols="48" ><?=$row['body']?> </textarea>
	</div>
<input type="submit" name="sumbit" value="Update" />
</form>
<?php	

	}

	function update_content($p) {
	$title = mysql_real_escape_string($p['title']);
	$body = mysql_real_escape_string($p['body']);
	$id = mysql_real_escape_string($p['id']);

	if(!$title || !$body):
echo '<p>Something is missing, or you are trying to edit a post that does not exist. <a href="update-content.php?id='.    $id    .'"> Either way, try  again. </a> </p>' ;
		
	
	else:
	
	$sql = "UPDATE cms_content SET title = '$title', body= '$body'  WHERE id = '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Updated.';

	endif;
		
	}
		
} // Zavrsava class
?>
