<?php
	function showError($title, $msg) {
		echo '<div class="alert alert-danger" role="alert">';
			echo "<strong>$title</strong> $msg";
		echo '</div>';
	}
	
	function showErrorAll($title, $msg) {
		echo '<div class="container"><br /><div class="alert alert-danger" role="alert">';
			echo "<strong>$title</strong> $msg";
		echo '</div></div>';
	}
	
	function showSuccess($title, $msg) {
	    echo '<div class="alert alert-success" role="alert">';
	    echo "<strong>$title</strong> $msg";
	    echo '</div>';
	}
	
	function showSuccessAll($title, $msg) {
	    echo '<div class="container"><br /><div class="alert alert-success" role="alert">';
	    echo "<strong>$title</strong> $msg";
	    echo '</div></div>';
	}
	
	function error($title, $msg) {
	    $_SESSION['alert_title'] = $title;
	    $_SESSION['alert_msg'] = $msg;
	    $_SESSION['alert_type'] = "error";
	}
	
	function success($title, $msg) {
	    $_SESSION['alert_title'] = $title;
	    $_SESSION['alert_msg'] = $msg;
	    $_SESSION['alert_type'] = "success";
	}
	
	function handleAlert() {
	    if(!isset($_SESSION['alert_title']) || !isset($_SESSION['alert_msg']) || !isset($_SESSION['alert_type'])) {
	        return;
	    }
	    
	    $alertTitle = $_SESSION['alert_title'];
	    $alertMsg = $_SESSION['alert_msg'];
	    $alertType = $_SESSION['alert_type']; 
	    
	    if(strcmp("error", $alertType) == 0) {
	        echo '<div class="alert alert-danger" role="alert">';
	        echo "<strong>$alertTitle</strong> $alertMsg";
	        echo '</div>';
	    } else if(strcmp("success", $alertType) == 0) {
	        echo '<div class="alert alert-success" role="alert">';
	        echo "<strong>$alertTitle</strong> $alertMsg";
	        echo '</div>';
	    }
	    
	    $_SESSION['alert_title'] = "";
	    $_SESSION['alert_msg'] = "";
	    $_SESSION['alert_type'] = "";
	}
?>