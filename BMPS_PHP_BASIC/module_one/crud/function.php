<?php
	function result_query($result){
		if (!$result) {
			die('query failed'. mysqli_error());
		}else {
			echo 'string';
		}
	}