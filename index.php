<?php

include '_class/cms_class.php';

include '_class/db-conf.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>minima 1.0</title>
<link href="style.css" rel="stylesheet" type="text/css" />

    
   </head>
   <body>

				
			              

<div class="pageContent">
    <div id="main">
      <div class="container">
      <?php include 'header.php' ?>
        
        </div>
        				
                    
                    
						

	</div>
            
        
        <div class="container">
        
         <?php
	if(isset($_GET['id'])):
		$obj->read_content($_GET['id']);
	else:
		$obj->get_content();
	endif;
?>
      <div class="container tutorial-info">
     <?php include 'footer.php' ?>
    </div>
</div>

</body>
</html>
