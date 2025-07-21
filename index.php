<?php

use Alarcon\Gs\Models\StudentModel;
use Alarcon\Gs\Core\Database;
use Alarcon\Gs\Models\subjectModel;

require 'vendor/autoload.php';

$student = new StudentModel();
$listOfStudents = $student ->read();
print_r($listOfStudents);

