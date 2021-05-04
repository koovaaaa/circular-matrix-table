<?php
//funkcija za popunjavanje matrice a[m][n]
function spiralFill($m, $n, &$a)
{
    $val = 1;
    /* k - indeks prvog reda
       m - indeks poslednjeg reda
       l - indeks prve kolone
       n - indeks poslednje kolone */
    $k = 0;
    $l = 0;

    while ($k < $m && $l < $n)
    {
        // Ispis prvog reda od preostalih redova
        for ($i = $l; $i < $n; ++$i)
            $a[$k][$i] = $val++;
        $k++;
 
        // Ispis poslednje kolone od preostalih kolona
        for ($i = $k; $i < $m; ++$i)
            $a[$i][$n - 1] = $val++;
        $n--;
 
        //Ispis poslednjeg reda od preostalih redova
        if ($k < $m)
        {
            for ($i = $n - 1; $i >= $l; --$i)
                $a[$m - 1][$i] = $val++;
            $m--;
        }
 
        //Ispis prvog prve kolone od preostalih kolona
        if ($l < $n)
        {
            for ($i = $m - 1; $i >= $k; --$i)
                $a[$i][$l] = $val++;
            $l++;
        }
    }
}
 

$brRedova = $_GET['brRedova'];
$brKolona = $_GET['brKolona'];
$response = "";

if($brRedova <= 0 || $brKolona <= 0){
    echo "<p><em>Pogrešan unos! Vrijednost koju unosite mora biti broj veći 0! Molimo Vas da to ispravite!</em></p>";
}

spiralFill($brRedova, $brKolona, $a);
for ($i = 0; $i < $brRedova; $i++)
{
    $response .= "<tr id='tr2'>";
    for ($j = 0; $j < $brKolona; $j++)
    {
        $response .= "<td  class='td2'> {$a[$i][$j]} </td>";
    }
    $response .= "</tr>";
}

echo $response;
 
?>