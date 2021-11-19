<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "LOGIN";
} else {
    echo "LOGOUT";
}
?>