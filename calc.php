<?php
    $datepicker1 = $_POST['datepicker1'];
    $summvk = $_POST['summvk'];
    $srokvklada = $_POST['srokvklada'];
    $popvk = $_POST['popvk'];
    $summpvk = $_POST['summpvk'];

    $summn1 = (float) $summvk;
    $summad = (float) $summpvk;

    if ($popvk = false)
        $summn = $summn1 + $summn1*3560;

    else
        $summn = $summn1 + ($summn1 +$summad)*3560;
{
    echo $summn;
}
?>
