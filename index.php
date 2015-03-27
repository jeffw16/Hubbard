<?php
/**
 * Hubbard
 * An English Latin alphabet to Russian Cyrillic alphabet converter.
 * © 2012 MyWikis - All rights reserved.
*/
$hbc1 = $_REQUEST['hbcontent'];
$hbpn1 = '/sh/';
$hbpn2 = '/oo/';
$hbpn3 = '/yo/';
$hbpn4 = '/ts/';
$hbpn5 = '/ch/';
$hbpn6 = '/ya/';
$hbpn7 = '/Sh/';
$hbpn8 = '/Oh/';
$hbpn9 = '/Yo/';
$hbpn10 = '/Ts/';
$hbpn11 = '/Ch/';
$hbpn12 = '/Ya/';
$hbpSM1 = '/\[p\]/';
$hbpSM2 = '/\[n\]/';
$hbpSM3 = '/\[P\]/';
$hbpSM4 = '/\[N\]/';
$hbp1 = '/a/';
$hbp2 = '/b/';
$hbp3 = '/c/';
$hbp4 = '/d/';
$hbp5 = '/e/';
$hbp6 = '/f/';
$hbp7 = '/g/';
$hbp8 = '/h/';
$hbp9 = '/i/';
$hbp10 = '/j/';
$hbp11 = '/k/';
$hbp12 = '/l/';
$hbp13 = '/m/';
$hbp14 = '/n/';
$hbp15 = '/o/';
$hbp16 = '/p/';
$hbp17 = '/q/';
$hbp18 = '/r/';
$hbp19 = '/s/';
$hbp20 = '/t/';
$hbp21 = '/u/';
$hbp22 = '/v/';
$hbp23 = '/w/';
$hbp24 = '/x/';
$hbp25 = '/y/';
$hbp26 = '/z/';
$hbp27 = '/A/';
$hbp28 = '/B/';
$hbp29 = '/C/';
$hbp30 = '/D/';
$hbp31 = '/E/';
$hbp32 = '/F/';
$hbp33 = '/G/';
$hbp34 = '/H/';
$hbp35 = '/I/';
$hbp36 = '/J/';
$hbp37 = '/K/';
$hbp38 = '/L/';
$hbp39 = '/M/';
$hbp40 = '/N/';
$hbp41 = '/O/';
$hbp42 = '/P/';
$hbp43 = '/Q/';
$hbp44 = '/R/';
$hbp45 = '/S/';
$hbp46 = '/T/';
$hbp47 = '/U/';
$hbp48 = '/V/';
$hbp49 = '/W/';
$hbp50 = '/X/';
$hbp51 = '/Y/';
$hbp52 = '/Z/';
$hbcn1 = preg_replace ( $hbpn1 , 'Ñ‰' , $hbc1 );
$hbcn2 = preg_replace ( $hbpn2 , 'Ñƒ' , $hbcn1 );
$hbcn3 = preg_replace ( $hbpn3 , 'Ñ‘' , $hbcn2 );
$hbcn4 = preg_replace ( $hbpn4 , 'Ñ†' , $hbcn3 );
$hbcn5 = preg_replace ( $hbpn5 , 'Ñ‡' , $hbcn4 );
$hbcn6 = preg_replace ( $hbpn6 , 'Ñ' , $hbcn5 );
$hbcn7 = preg_replace ( $hbpn7 , 'Ð©' , $hbcn6 );
$hbcn8 = preg_replace ( $hbpn8 , 'Ð£' , $hbcn7 );
$hbcn9 = preg_replace ( $hbpn9 , 'Ð' , $hbcn8 );
$hbcn10 = preg_replace ( $hbpn10 , 'Ð¦' , $hbcn9 );
$hbcn11 = preg_replace ( $hbpn11 , 'Ð§' , $hbcn10 );
$hbcn12 = preg_replace ( $hbpn12 , 'Ð¯' , $hbcn11 );
$hbcSM1 = preg_replace ( $hbpSM1 , 'ÑŒ' , $hbcn12 );
$hbcSM2 = preg_replace ( $hbpSM2 , 'ÑŠ' , $hbcSM1 );
$hbcSM3 = preg_replace ( $hbpSM3 , 'Ð¬' , $hbcSM2 );
$hbcSM4 = preg_replace ( $hbpSM4 , 'Ðª' , $hbcSM3 );
$hbc2 = preg_replace ( $hbp1 , 'a', $hbcSM4 );
$hbc3 = preg_replace ( $hbp2 , 'Ð±', $hbc2 );
$hbc4 = preg_replace ( $hbp3 , 'c', $hbc3 );
$hbc5 = preg_replace ( $hbp4 , 'Ð´', $hbc4 );
$hbc6 = preg_replace ( $hbp5 , 'Ð¹', $hbc5 );
$hbc7 = preg_replace ( $hbp6 , 'Ñ„', $hbc6 );
$hbc8 = preg_replace ( $hbp7 , 'Ð³', $hbc7 );
$hbc9 = preg_replace ( $hbp8 , 'Ñ…', $hbc8 );
$hbc10 = preg_replace ( $hbp9 , 'Ð¸', $hbc9 );
$hbc11 = preg_replace ( $hbp10 , 'Ð³', $hbc10 );
$hbc12 = preg_replace ( $hbp11 , 'Ðº', $hbc11 );
$hbc13 = preg_replace ( $hbp12 , 'Ð»', $hbc12 );
$hbc14 = preg_replace ( $hbp13 , 'Ð¼', $hbc13 );
$hbc15 = preg_replace ( $hbp14 , 'Ð½', $hbc14 );
$hbc16 = preg_replace ( $hbp15 , 'Ð¾', $hbc15 );
$hbc17 = preg_replace ( $hbp16 , 'Ð¿', $hbc16 );
$hbc18 = preg_replace ( $hbp17 , 'ÐºÑƒÑ€', $hbc17 );
$hbc18p5 = preg_replace ( $hbp18 , 'Ñ€' , $hbc18 );
$hbc19 = preg_replace ( $hbp19 , 'Ñ', $hbc18p5 );
$hbc20 = preg_replace ( $hbp20 , 'Ñ‚', $hbc19 );
$hbc21 = preg_replace ( $hbp21 , 'ÑŽ', $hbc20 );
$hbc22 = preg_replace ( $hbp22 , 'Ð²', $hbc21 );
$hbc23 = preg_replace ( $hbp23 , 'Ð²Ð°', $hbc22 );
$hbc24 = preg_replace ( $hbp24 , 'Ñ†', $hbc23 );
$hbc25 = preg_replace ( $hbp25 , 'Ð¹', $hbc24 );
$hbc26 = preg_replace ( $hbp26 , 'Ñ†', $hbc25 );
$hbc27 = preg_replace ( $hbp27 , 'A', $hbc26 );
$hbc28 = preg_replace ( $hbp28 , 'Ð‘', $hbc27 );
$hbc29 = preg_replace ( $hbp29 , 'C', $hbc28 );
$hbc30 = preg_replace ( $hbp30 , 'Ð”', $hbc29 );
$hbc31 = preg_replace ( $hbp31 , 'Ð™', $hbc30 );
$hbc32 = preg_replace ( $hbp32 , 'Ð¤', $hbc31 );
$hbc33 = preg_replace ( $hbp33 , 'Ð“', $hbc32 );
$hbc34 = preg_replace ( $hbp34 , 'Ð¥', $hbc33 );
$hbc35 = preg_replace ( $hbp35 , 'Ð˜', $hbc34 );
$hbc36 = preg_replace ( $hbp36 , 'Ð“', $hbc35 );
$hbc37 = preg_replace ( $hbp37 , 'Ðš', $hbc36 );
$hbc38 = preg_replace ( $hbp38 , 'Ð›', $hbc37 );
$hbc39 = preg_replace ( $hbp39 , 'Ðœ', $hbc38 );
$hbc40 = preg_replace ( $hbp40 , 'Ð', $hbc39 );
$hbc41 = preg_replace ( $hbp41 , 'Ðž', $hbc40 );
$hbc42 = preg_replace ( $hbp42 , 'ÐŸ', $hbc41 );
$hbc43 = preg_replace ( $hbp43 , 'ÐšÑƒ', $hbc42 );
$hbc44 = preg_replace ( $hbp44 , 'Ð ', $hbc43 );
$hbc45 = preg_replace ( $hbp45 , 'Ð¡', $hbc44 );
$hbc46 = preg_replace ( $hbp46 , 'Ð¢', $hbc45 );
$hbc47 = preg_replace ( $hbp47 , 'Ð®', $hbc46 );
$hbc48 = preg_replace ( $hbp48 , 'Ð’', $hbc47 );
$hbc49 = preg_replace ( $hbp49 , 'Ð’Ð', $hbc48 );
$hbc50 = preg_replace ( $hbp50 , 'Ð¦', $hbc49 );
$hbc51 = preg_replace ( $hbp51 , 'Ð™', $hbc50 );
$hbc52 = preg_replace ( $hbp52 , 'Ð¦', $hbc51 );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
       "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<title>Hubbard | Latin to Cyrillic alphabet converter | developed by MyWikis</title>
		<link rel="stylesheet" href="//www.mywikis.com/assets/nokinz.css" />
		<link rel="icon" href="//www.mywikis.com/favicon.ico" />
		<link rel="shortcut icon" href="//www.mywikis.com/favicon.ico" />
		<meta name="google-site-verification" content="uRI5fzXagZ5weHzpgOJTjTlrGa6oTvU4z2sC1g1qJ0w" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<div id="box">
			<div id="header">
				<h1>Hubbard</h1>
			</div>
<?php
if ( $_POST['submit'] == 'yes' ) {
	echo "<h1>Result</h1><textarea rows=\"15\" cols=\"50\">" . $hbc52 . "</textarea>";
}
?>
			<h1>Latin to Cyrillic</h1>
			<form action="index.php" method="post">
				<textarea name="hbcontent" rows="15" cols="50"></textarea><input type="hidden" name="submit" value="yes" /><br />
				<input type="submit" value="Get Cyrillic transliteration" />
				<input type="reset" value="Clear form" />
			</form>
			<div id="footer">
				© 2012 MyWikis &mdash; All rights reserved.
			</div>
		</div>
