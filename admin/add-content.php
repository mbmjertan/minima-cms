<?php

include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>/user</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
tinyMCE.init({
        theme : "advanced",
        plugins : "fullpage",
        mode : "textareas"
});
</script>
<link rel="stylesheet" type="text/css" href="../demo.css" media="screen" />

</head>
<body>

<div id="main">
  <div class="container">
   <h1>/admin</h1>

    </div>
    
    <div class="container">
    

come on!


<p><i>write</i> <b>anything</b></p>
		</div>

 


<div class="container">




<center><h1><a href="add-content.php">add content</a> <- or -> <a href="manage-content.php">manage it</a></h1></center>
</div>
<div>
<form method="post" action="index.php">
<input type="hidden" name="add" value="true" />
	<div id="page-wrap">
<label for="title">Title:</label>
<input type="text" name="title" id="title" />
	</div>
	
	<div id="page-wrap">
	
<label for="body">Body:</label>
<textarea name="body" id="body" rows="15" cols="48"> </textarea>
	</div>

<div id="page-wrap">
<label for="email">Email [not required, won't be shown]</label>
<input type="text" name="email" id="email" />
</div>

<div id="page-wrap">
<label for="delcode">Custom ID no. [not required, won't be shown]</label>
<input type="text" name="delcode" id="delcode" />
</div>

<div id="page-wrap">
<label for="author">Author:</label>
<input type="text" name="author" id="author" />
</div>
<div id="page-wrap">
<input type="submit" name="sumbit" value="Objavi" />

</form>
</div>
    </div>
</div>
    
  




	
   <div id="footer">
<div id="footer-content">
<p>This is Pulsir.</p>
</div>
</div>
</body>
<html>
