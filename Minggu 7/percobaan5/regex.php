<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan";
} else {
    echo "Tidak ada huruf kecil";
}

echo "<hr>";

$pattern = '/[0-9]+/';
$text = 'There are 123 apples';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok";
}

echo "<hr>";
$pattern = '/aplle/';
$replacement = 'banana';
$text = 'I like an aplle pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo "<hr>";

$pattern = '/go?d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}