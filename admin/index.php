<?php

include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>/admin</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../demo.css" media="screen" />

</head>
<body>

<div id="main">
  <div class="container">
    <h1>/admin</h1>
    </div>
    
    <div class="container">
    
 <a href="add-content.php">add content</a> | <a href="manage-content.php">manage content</a>


<p>You are running Minima 1.0.1, and updates <iframe src="http://d.plsr.tk/mcheck/1.0.1.html" frameborder=0 height=23 width=60 scrolling=no></iframe> ready. 
    </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>



<?php
	if($_POST['add']):
		$obj->add_content($_POST);
	elseif($_POST['update']):
		$obj->update_content($_POST);
	endif;
?>



</body>
<html>
