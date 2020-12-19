<?php
session_start();
if (isset($_SESSION['errors'])) {
	$errors = $_SESSION['errors'];
	if (count($errors) > 0) {
	    echo '<div class="alert alert-danger"> <ul>';
	    foreach($errors as $error)
	        echo '<li>'.$error.'</li>';
	    echo '</ul> </div>';
	}
	unset($_SESSION['errors']);
}

?>