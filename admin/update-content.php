<?php
include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Modern - CMS for modern stuff</title>
<link rel="stylesheet" href="../style.css" type="text/css">

</head>

<body>

<div id="page-wrap">
<?php include 'nav.php' ; ?>

<h2>Azuriranje sadrzanja</h2>

<?=$obj->update_content_form($_GET['id'])?>

</body>
<html>
