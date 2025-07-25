<?php
use Pabilona\Gs\model\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel();

$student->id=69;
$student->name="bebong";
$student->course="IT";
$student->year_level=1;
$student->section="D";

$student->create();
//$student->delete();
//$student->update();
//$student->read();




?>
