<?php
$file1 ='zayavleniya.pdf';
header('Content-type:application/pdf');
header('Content-Description:inline;filename="'.$file1.'"');
header('Accept-Ranges:bytes');
@readfile($file1)
?>