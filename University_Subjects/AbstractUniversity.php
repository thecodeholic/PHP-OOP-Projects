<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:17 PM
 */

/**
 * Class AbstractUniversity
 */
abstract class AbstractUniversity
{
    /**
     * @var Subject[]
     */
    public $subjects = [];

    /**
     * Method accepts the name and code of the Subject, creates instance of the class,
     * adds the instance in $subjects array and returns created instance
     *
     * @param string $code
     * @param string $name
     * @return Subject
     */
    abstract public function addSubject(string $code, string $name): Subject;

    /**
     * Method accepts subject code and Student. Finds subject in $subjects array based on code and adds student to its array.
     *
     * @param string   $subjectCode
     * @param \Student $student
     * @return mixed
     */
    abstract public function addStudentOnSubject(string $subjectCode, Student $student);

    /**
     * Method returns students for given subject
     *
     * @param string $subjectCode
     * @return mixed
     */
    abstract public function getStudentsForSubject(string $subjectCode);

    /**
     * This method returns number of total students registered on all subjects
     *
     * @return int
     */
    abstract public function getNumberOfStudents(): int;

    /**
     * Method must iterate over $subjects, print the subject name then "-" 25 times,
     * then iterate over students of the subject and print student name and student number in format
     * StudentName - StudentNumber
     * Student2Name - Student2Number
     *
     * @return mixed
     */
    abstract public function print();
}