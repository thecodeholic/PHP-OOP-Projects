<?php

require_once "Student.php";
require_once "Subject.php";
require_once "University.php";

$university = new University();
$subject = $university->addSubject('112', 'Web II');
$subject->addStudent('George', '123');
$subject->addStudent("Mary", '234');
$university->addStudentOnSubject('112', new Student('David', '345'));

$subject2 = $university->addSubject('113', 'Web III');
$subject2->addStudent('Bob', '456');
$subject2->addStudent('Brad', '567');

echo $university->getNumberOfStudents(); // This must print 5, because we totally added 5 students in different subjects

/**
 * This method must print all subjects and for each subject all students registered on the subject int the following format
 *
 * SubjectCode - SubjectName
 * -------------------------
 * StudentName - StudentNumber
 * Student2Name - Student2Number
 * ... // and so on...
 *
 * Subject2Code - Subject2Name
 * --------------------
 * StudentName - StudentNumber
 * Student2Name - Student2Number
 * ... // and so on...
 */
$university->print();
// Example
/*
112 - Web II
--------------------
George - 123
Mary - 234
David - 345

113 - Web III
--------------------
Bob - 456
Brad - 567
*/