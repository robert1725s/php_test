<?php
$a = 7;

function scoreJudge($score1, $score2, $score3)
{
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210) {
        echo "合計点は" . $sum . "なので合格です";
    } else {
        echo "合計点は" . $sum . "なので不合格です";
    }
}

scoreJudge(10, 20, 30);

function triangle($width, $height)
{
    return $width * $height / 2;
}


function square($width, $height)
{
    return $width * $height;
}


function trapezoid($widthUP, $widthDown, $height)
{
    return ($widthUP + $widthDown) * $height / 2;
}
