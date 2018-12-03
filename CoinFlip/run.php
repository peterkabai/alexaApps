<?php

header('Content-Type: application/json');

if (rand(1, 2) == 1) {
	$speakPhrase = 'I flipped a heads.';
} else {
	$speakPhrase = 'I flipped a tails.';
}

$returnArray = array(
	'version' => "1.0",
	'response' => array(
		'outputSpeech' => array(
			'type' => 'PlainText',
			'text' => $speakPhrase
		),
		'shouldEndSession' => true
	)
);

$output = json_encode($returnArray);
header('Content-Type: application/json');
header("Content-length: " + strlen($output));
echo $output;
exit;

?>