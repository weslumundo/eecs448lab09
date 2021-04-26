<?php
echo '<link rel="stylesheet" href="e3.css">';
$name = $_POST["name"];
$password = $_POST["pass"];
$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$s3 = $_POST["s3"];
$s4 = $_POST["s4"];
$ship = $_POST["ship"];
$c1 = $s1*30;
$c2 = $s2*40;
$c3 = $s3*50;
$c4 = $s4*60;

echo "<p>Hello, " . $name . "<br>";
echo "Password: " . $password . "<br><br><br>";
echo "TESV:S = Quantity: " . $s1 . " Sub Total: " . $c1 . "<br>";
echo "TESV:SS = Quantity: " . $s2 . " Total: " . $c2 . "<br>";
echo "TESV:SL = Quantity: " . $s3 . " Total: " . $c3 . "<br>";
echo "TESV:SVR = Quantity: " . $s4 . " Total: " . $c4 . "<br>";
if ($ship == "7"){
    echo "Shipping: Free - Seven Day" . "<br>";
    $sC = 0;
}
if ($ship == "o"){
    echo "Shipping: $50 - Overnight" . "<br>";
    $sC = 50;
}
if ($ship == "3"){
    echo "Shipping: $5 - Three Day" . "<br>";
    $sC = 5;
}
echo "Total: $" . (($c1)+($c2)+($c3)+($c4)+($sC)) . "</p>";
?>