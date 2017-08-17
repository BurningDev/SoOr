<?php
	function error($title, $msg) {
		echo '<div class="alert alert-danger" role="alert">';
			echo "<strong>$title</strong> $msg";
		echo '</div>';
	}
	
	function errorAll($title, $msg) {
		echo '<div class="container"><br /><div class="alert alert-danger" role="alert">';
			echo "<strong>$title</strong> $msg";
		echo '</div></div>';
	}
	
	function success($title, $msg) {
	    echo '<div class="alert alert-success" role="alert">';
	    echo "<strong>$title</strong> $msg";
	    echo '</div>';
	}
	
	function successAll($title, $msg) {
	    echo '<div class="container"><br /><div class="alert alert-success" role="alert">';
	    echo "<strong>$title</strong> $msg";
	    echo '</div></div>';
	}
?>