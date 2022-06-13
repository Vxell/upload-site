<?php 
    if(isset($_GET['pdf'])){
        $pdf = $_GET['pdf'];
        header("Content-type: application/pdf");
  
        header("Content-Length: " . filesize($pdf));
        readfile($pdf);
    }
?>