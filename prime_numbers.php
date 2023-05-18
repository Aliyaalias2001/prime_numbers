<?php
$numbers = [];
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        $numbers[] = "BIGBANG";
    } elseif ($i % 3 === 0) {
        $numbers[] = "BIG";
    } elseif ($i % 5 === 0) {
        $numbers[] = "BANG";
    } else {
        $numbers[] = (string) $i;
    }
}

$json = json_encode($numbers);

file_put_contents('output.json', $json);
echo "Output saved to 'output.json' file.";
?>
