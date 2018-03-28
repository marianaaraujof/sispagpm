<?php
session_name('sispag');
session_start();

if(!isset ($_SESSION['logado']))
{
	header('Location: ../view/login.php');
}
?>