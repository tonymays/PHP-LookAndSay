<?php
if ($argc == 1) {
	$ceil = 10;
} else {
	$ceil = $argv[1];
}

function countIt($seq)
{
    $newSeq = '';
    $char = $seq[0];
    $count = 1;
    for ($i = 1; $i < strlen($seq); $i++) {
        if ($seq[$i] == $char) {
            $count++;
        } else {
            $newSeq .= $count . $char;
            $char = $seq[$i];
            $count = 1;
        }
    }

    return $newSeq . $count . $char;
}

$seq = 1;
for ($i = 0; $i < $ceil; $i++) {
    $seq = countIt($seq);
    print "$seq\n";
}
