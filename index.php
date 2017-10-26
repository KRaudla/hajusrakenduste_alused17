<?php
$input_str = file_get_contents('./inputText.txt', true);//read data from file
//match two or three words, while first word starts with the capital letter
$pattern = '/[A-Z][a-z]+\s[A-Z][a-z]+\s[A-Z][a-z]+|[A-Z][a-z]+\s[A-Z][a-z]+/';
preg_match_all($pattern, utf8_encode($input_str),$output, PREG_PATTERN_ORDER);
$names_array = $output[0];
$unique_names = array_unique($names_array);
foreach ($unique_names as $key => $value) {
  echo $value."<br/>";
}
?>
