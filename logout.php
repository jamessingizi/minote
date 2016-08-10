<?php
require_once '_inc/config.php';
session_destroy();
echo "<script>window.location='index.php'</script>";