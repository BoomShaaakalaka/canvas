<?php
session_start();
require_once('db_function.php');


$select3 =array('name'=>$_POST['name'],'email'=>$_POST['email'],'password'=>$_POST['password']);
$select4= array( 'TID' => $_POST['TID']);
update("teacher", $select3, $select4);


?>
<script language="JavaScript">alert("change success!")
location.href="teacherlist.php"</script>
