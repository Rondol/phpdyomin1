<?php
function checkLogin($returnURL, $isAdminPage) {
session_start();
if (!($_SESSION['type']==1&&!$isAdminPage||$_SESSION['type']==2)) {
header("Location: /web/Lab4/login_form.php?returnURL=".urlencode($returnURL));
exit();
}
}
?>