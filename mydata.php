<?php
if(!mysql_connect('localhost','root',''))
	echo 'Error falied to connect DB';
if(!mysql_select_db('test'))
	echo 'Error falied to select DB';
?>