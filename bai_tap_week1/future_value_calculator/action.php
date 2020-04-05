<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function calculate()
    {
        $funds = $_POST['funds'];
        $rate = $_POST['rate'];
        $years = $_POST['years'];
        $result = $funds + $funds * ($rate / 100);
        for ($i = 2; $i <= $years; $i++) {
            $result = $result + $result * ($rate / 100);
        }
        echo "<span>Investment Amount:</span>" . $funds . "$</br>";
        echo "<span>Yearly Interest Rate:</span>" . $rate . "% </br>";
        echo " <span>Number of Years:</span>" . $years . "</br>";
        echo " <span>Future Value:</span>" . $result . "$</br>";
    }

    calculate();

}
