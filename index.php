<?php

    function readNumber() {
        $file = fopen("number.txt", "r") or die("Unable to open file!");
        $n = fread($file, filesize("number.txt"));
        fclose($file);
        return $n;
    }

    function increaseNumber($n) {
        $file = fopen("number.txt", "w") or die("Unable to open file!");
        fwrite($file, intval($n)+1);
        fclose($file);
    }

    function readDate() {
        $file = fopen("date.txt", "r") or die("Unable to open file!");
        $date = fread($file, filesize("date.txt"));
        fclose($file);
        return $date;
    }

    function setDate() {
        $file = fopen("date.txt", "w") or die("Unable to open file!");
        fwrite($file, date("Y")."-".date("m")."-".date("d"));
        fclose($file);
    }

    function resetNumber() {
        $file = fopen("number.txt", "w") or die("Unable to open file!");
        fwrite($file, 1);
        fclose($file);
    }

    $date = readDate();

    if ($date != date("Y")."-".date("m")."-".date("d")) {
        setDate();
        resetNumber();
    }

    $number = readNumber();

    echo "<h1>IT-EQ02-".date("Y").date("m").date("d").str_pad($number, 3, '0', STR_PAD_LEFT)."</h1>";
    
    increaseNumber($number)

?>
