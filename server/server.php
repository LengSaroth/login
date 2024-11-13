<?php

    $php = $_POST['php'];
    $csharp = $_POST['csharp'];
    $dsa = $_POST['dsa'];
    $dms = $_POST['dms'];
    $js = $_POST['js'];

    $total = $php + $csharp + $dsa + $dms + $js;
    $average = $total / 5;

    if ($average >= 91) {
        $grade = "A";
    } elseif ($average >= 81) {
        $grade = "B";
    } elseif ($average >= 71) {
        $grade = "C";
    } elseif ($average >= 61) {
        $grade = "D";
    } elseif ($average >= 50) {
        $grade = "E";
    } else {
        $grade = "F";
    }
    
    echo "<h2>Results</h2>";
    echo "Total: $total<br>";
    echo "Average: $average<br>";
    echo "Grade: $grade";

?>
