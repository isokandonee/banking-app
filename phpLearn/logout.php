<?php
require 'connect.php';
session_start();
session_unset();
header('location:indexer.php');
?>