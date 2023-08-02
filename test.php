<?php
// $aa = 1;
// echo $aa.PHP_EOL;
// for ($x = 0; $x <= 10; $x++) {
//   echo "x: $x".PHP_EOL;
// }
// $years = 2022;
// echo 'This years $years' . PHP_EOL;
// echo "This years {$years}" . PHP_EOL;
// echo "This years $years" . PHP_EOL;
// echo `pwd`;
// //字串串接 .
// echo "2023" . "-" . "01" . "-" . "01" . PHP_EOL;
// $a = "10";
// $b = 10;
// echo ($a + $b) . PHP_EOL;
// echo gettype($a). PHP_EOL;
// const THIS_IS_CONST = "const";
// echo THIS_IS_CONST . PHP_EOL;
// $array = [1, 2, 3, 4, 5];
// //Add element to array
// $array[] = 6;
// //[1, 2, 3, 4, 5, 6]

// echo "[Array]" . PHP_EOL;
// echo $array[0] . PHP_EOL;
// echo $array[1] . PHP_EOL;
// echo $array[5] . PHP_EOL;
// echo $array . PHP_EOL;

// //Map Array array
// $map = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

// echo "[Map]" . PHP_EOL;
// echo $map['a'] . PHP_EOL;
// echo $map['b'] . PHP_EOL;

echo "[Foreach 1]" . PHP_EOL;  
$array = [1, 2, 3, 4, 5];
foreach ($array as $value) {
    echo $value . PHP_EOL;
}
echo "[Foreach 2]" . PHP_EOL;
$map = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
foreach ($map as $key => $value) {
    echo "Key: $key, Value: $value" . PHP_EOL;
}

function firstFunction()
{
    echo "Hello Word" . PHP_EOL;
}

firstFunction();

//It is Working, But can be better
function getSushiPrice($sushiName)
{
    return match ($sushiName) {
        "salmon" => 100,
        "tuna" => 150,
        "wagyu" => 300,
    };
}

// php <= 7.4
$price = getSushiPrice("salmon");
echo $price . PHP_EOL;

//Get better
function getSushiPrice2(string $sushiName): int
{
    return match ($sushiName) {
        "salmon" => 100,
        "tuna" => 150,
        "wagyu" => 300,
    };
}

$price = getSushiPrice2("tuna");
echo $price . PHP_EOL;

//PHP >= 8.2
$price = getSushiPrice2(sushiName: "wagyu");
echo $price . PHP_EOL;
?>
