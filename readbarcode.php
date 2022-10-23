<?php


$uploadfile = $_FILES["barcodefile"]["tmp_name"];


$cnt = count($resultAry);
if($cnt > 0){
    echo "Barcode Count: $cnt <br />";
    for ($i = 0; $i < $cnt; $i++) {
          $res = $resultAry[$i];
          echo "$i. $res->BarcodeFormatString , $res->BarcodeText<br />";
    }
}
?>