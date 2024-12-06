<?php
    //Author: Marcel Roger Dorr
    $runs = array();

    $z = 0;

    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;

    for ($i = 0; $i < 100; $i++) {
        $a = rand(0, 1);
        $b = rand(0, 1);
        $c = rand(0, 1);
        $d = rand(0, 1);
        
        if ((not($a) and $b and not($c)) or ($a or not($b) and ($c or not($d)))) {
            $z = 1;
        }

        if (in_array("Z($z)=(¬A($a) ∧ B($b) ∧ ¬C($c)) ∨ (( A($a) ∨ ¬B($b)) ∧ (C($c) ∨ ¬D($d)))", $runs)) {
            break;
        }

        $runs[] = "Z($z)=(¬A($a) ∧ B($b) ∧ ¬C($c)) ∨ (( A($a) ∨ ¬B($b)) ∧ (C($c) ∨ ¬D($d)))";
        echo "Z($z)=(¬A($a) ∧ B($b) ∧ ¬C($c)) ∨ (( A($a) ∨ ¬B($b)) ∧ (C($c) ∨ ¬D($d)))<br>";
    }

    function not($var) {
        if ($var) {
            return 0;
        }
        return 1;
    }
?>