<?php  
	switch (@$_GET['content']) {
		
	    case 'autoquotemaker':
	    include "content/autoquotemaker/index.php";
      	break;
		
		default:
		include "content/autoquotemaker/index.php";
		break;

	}
?>