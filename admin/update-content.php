<?php
include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Modern - CMS for modern stuff</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
tinyMCE.init({
        theme : "advanced",
        plugins : "fullpage",
        mode : "textareas"
});
</script>
</head>

<body>

<div id="page-wrap">
<?php include 'nav.php' ; ?>

<h2> Update content </h2>

<?=$obj->update_content_form($_GET['id'])?>

</body>
<html>
