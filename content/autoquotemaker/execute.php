<?php
if (isset($_POST['create'])) {

	echo "<label>Result :</label><br>";

	$folder = "files/autoquotemaker/";
	$overlay = $folder . "overlay.png";
	$template = $folder . "pricecharttemplate.png";
	$font_price = "files/_font/" . "OpenSans_Condensed-ExtraBold.ttf";
	$font_date = "files/_font/" . "OpenSans-Bold.ttf";
	$font_copyright = "files/_font/" . "KrinkesRegularPERSONAL.ttf";
	$quote = @$_POST['price'] ? $_POST['price'] : 'PRICE';
	// $copyright = @$_POST['copyright'] ? $_POST['copyright'] : 'bacotangw9';
	// $backgrond = @$_POST['background'];
	$footer_date	= date("d M");
	$date	= date("m/d/Y");
	$filename = $date. "_".md5(rand(000, 999)) . ".png";


	
		$bg = $template;


	$image = new PHPImage();
	// $image->setQuality(10);
	$image->setDimensionsFromImage($bg);
	$image->draw($bg);
	// $image->draw($overlay, '0%', '0%');
	$image->setFont($font_price);
	$image->setTextColor(array(255, 255, 255));
	$image->setAlignVertical('center');
	$image->setAlignHorizontal('center');
	$image->textBox($quote, array(
		'fontSize' => 30,
		'x' => 112,
		'y' => 237,
		'width' => 520,
		'height' => 110,
		'debug' => false
	));
	// $image->setFont($font_copyright);
	// $image->setTextColor(array(255, 255, 255));
	// $image->text('' .$copyright, array(
	// 	'fontSize' => 30, 
	// 	'x' => 0,
	// 	'y' => 400,
	// 	'width' => 640,
	// 	'height' => 20,
	// 	'debug' => false
	// 	));
	// $image->setFont($font_copyright);
	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox($date, array(
		'fontSize' => 28,
		'x' => 216,
		'y' => 163,
		'width' => 520,
		'height' => 108,
		'debug' => false
	));
	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox($footer_date, array(
		'fontSize' => 15,
		'x' => 361, //309
		'y' => 583, //533
		'width' => 520,
		'height' => 108,
		'debug' => false
	));

	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox(date('d M', strtotime('-1 day', strtotime($date))), array(
		'fontSize' => 15,
		'x' => 267,
		'y' => 583,
		'width' => 520,
		'height' => 108,
		'debug' => false
	));

	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox(date('d M', strtotime('-2 day', strtotime($date))), array(
		'fontSize' => 15,
		'x' => 175,
		'y' => 583,
		'width' => 520,
		'height' => 108,
		'debug' => false
	));

	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox(date('d M', strtotime('-3 day', strtotime($date))), array(
		'fontSize' => 15,
		'x' => 83,
		'y' => 583,
		'width' => 520,
		'height' => 108,
		'debug' => false
	));

	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox(date('d M', strtotime('-4 day', strtotime($date))), array(
		'fontSize' => 15,
		'x' => -7,
		'y' => 583,
		'width' => 520,
		'height' => 108,
		'debug' => false
	));

	$image->setFont($font_date);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox(date('d M', strtotime('-5 day', strtotime($date))), array(
		'fontSize' => 15,
		'x' => -98,
		'y' => 583,
		'width' => 520,
		'height' => 108,
		'debug' => false
	));

	$image->save($filename);


	$imagebase64 = "data:image/png;base64," . base64_encode(file_get_contents($filename));
	echo "<img src='" . $imagebase64 . "' class='img-fluid'/>
	<div><br><center>
	<div class='buttons'>
                      <a href='" . $imagebase64 . "' class='btn btn-lg btn-primary' target='_blank' download='$filename'>Download</a>
</center>
                    </div>";
	unlink($filename);
}
