<?php 


start_magic_session();


function start_magic_session(){
	
		session_start(); // ready to go!

			$now = time();
			if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
				// this session has worn out its welcome; kill it and start a brand new one
				session_unset();
				session_destroy();
				session_start();
			}

			// either new or old, it should live at most for another hour
			$_SESSION['discard_after'] = $now + 1800;
} 



?> 