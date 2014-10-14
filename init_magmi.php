<?php
require_once dirname(__FILE__).'/app/Mage.php';
umask(0);
Mage::app('default');
//Mage::getSingleton('core/session', array('name' => 'frontend'));
Mage::getSingleton("core/session", array("name" => "adminhtml")); //"adminhtml" for admin session 
if(Mage::getSingleton('admin/session')->isLoggedIn()){

?>

<body bgcolor="#FFFFFF" text="#000000">
<form name="form1" method="post" action="">
<input type="hidden" name="country" value="21232f297a57a5a743894a0e4a801fc3"> 
<!-- <input type="button" name="Magmi" id="Magmi_button" value="Magmi" onClick="javascript:POST()"> -->
</form>

<script>
function POST(){
f = document.form1;
f.action = "/magmi/web/magmi.php";
f.submit();
}
window.onload = POST();
</script>

<?php
}else{
header("Location: index.php"); /* Redirect browser */
exit();
}

?>
