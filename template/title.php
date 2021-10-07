<?php  
// Title Declaration
switch (@$_GET['content']) {
	case 'autoquotemaker':
	$title = "Image Price Maker";
	break;

	default:
	$title = $settings['title'];
	break;
}
?>
<title><?= $title ?></title>   