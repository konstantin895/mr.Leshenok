<?php
session_start();
session_unset();
session_destroy();
header("Location: form_authorization.php");
exit;
?>