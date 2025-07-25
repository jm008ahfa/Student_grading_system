<?php

use Alarcon\Gs\Models\StudentModel;
use Alarcon\Gs\Core\Database;
use Alarcon\Gs\Models\subjectModel;

require 'vendor/autoload.php';

$student = new StudentModel();
 $student->id=22345;
 $student->name = "Darwin Agraviador";
 $student->course = "BSIT";
 $student->year_level = 1;
 $student->section = "D";

//$student->create();
//$student->update(22345);
//$student->delete(223456);
$listOfStudents = $student ->read();
 print_r($listOfStudents);



