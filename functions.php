<?php
//Quick Functions
//Version 0.1.0
//Author: Mike Dion
//Author URL: https://becomeindelible.com
//Description: A quick library of generic PHP functions that are useful across a number of projects.
function phoneNumber($phone) {
	$length = strlen($phone);
	if(!strpos($phone, '-')){
		switch ($length) {
			case 7:
				$number = substr($phone, 0, 3) . '-' . substr($phone, 2);
				break;
			case 10:
				$number = substr($phone, 0, 3) . '-' . substr($phone, 2, 3) . '-' . substr($phone, 5);
				break;
			default:
				$number = substr($phone, 0, 1) . '-' . substr($phone, 1, 3) . '-' . substr($phone, 3, 3) . '-' . substr($phone, 6);
				break;
		}
	}//endif
	else {
		$number = $phone;
	} ?>
	<a href="tel:<?php echo $phone; ?>"><?php echo $number; ?></a>
<?php }
function properCase($string) {
	$newString = strtoupper(substr($string, 0, 1)) . substr($string, 1);
	echo $newString;
}