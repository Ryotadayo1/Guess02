<?php
function prompt($msg) {
    echo $msg;
    return trim(fgets(STDIN));
}

$n = (int)prompt("min: ");
$m = (int)prompt("max: ");

if ($n > $m) {
    echo "error: min must be less than or equal to max\n";
    exit;
}

$target = random_int($n, $m);
$max_attempts = 10;
$attempts = 0;

echo "Guess the number between $n and $m!\n";

while ($attempts < $max_attempts) {
    $guess = (int)prompt("Your guess: ");
    $attempts++;

    if ($guess === $target) {
        echo "🎉 正解！ {$attempts} 回目で当たりました！\n";
        break;
    } elseif ($guess < $target) {
        echo "もっと大きいです。\n";
    } else {
        echo "もっと小さいです。\n";
    }

    if ($attempts === $max_attempts) {
        echo "😢 残念！正解は {$target} でした。\n";
    }
}
?>
