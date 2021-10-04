<?php
	$connect=mysql_connect('localhost','root','','loginapp');
	if (!$connect) {
		die('Connected Failed');
	}