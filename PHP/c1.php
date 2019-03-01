<?php

// echo "Zdravo svetu!";

$ime = "Pero";
$Godini = 23;
$_polnoleten = true;
$pi = 3.14;

echo $ime;
echo "<br/>";
echo $Godini;
echo $_polnoleten;
echo $pi;
echo "<h1>".$ime."</h1>";
?>

<h2>PEROOOOOOOOOOOOOO!</h2>

<div><?php echo $Godini; ?></div>
<b><?=$Godini?></b><br>

<?php

$br = 6; // dali brojot e paren

if($br % 2 == 0) {
    echo "par";
}  else {
    echo "nepar";
}

echo "</br>";

switch($ime) {
    case 'Pero':
    echo "Zdravo Pero";
    break;
    case 'Janko':
    echo "Zdravo Janko";
    break;
    case "Stanko":
    echo 'Stanko Janko';
    break;
    default:
    echo 'Nema zdravo';
}

function sobiranje($a, $b) {
    echo $a + $b;
}
echo "</br>";
sobiranje(5, 6);

function odzemanje($a, $b) {
    return $a - $b;
}
echo "</br>";
echo odzemanje(3,1); // prv nacin

echo "</br>";
$res = odzemanje(6, 19); // vtor nacin
echo $res;

// *******************

function ubavMesec($mesec) {
    switch(strlen($mesec) % 2) {
        case 0:
        echo "Ubav mesec";
        break;
        case 1:
        echo "Neubav mesec";
        break;
    } 
    
}

echo "<br/>";
ubavMesec("Januari");
echo "<br/>";
ubavMesec("Dekemvri");
echo "<br/>";

// ********************























?>
