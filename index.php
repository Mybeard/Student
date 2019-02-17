<?php
//Now define 5 student objects and store the objects in an array called studentList.
// The five students are: Mike Barnes, Jim Nickerson, Jack Indabox, Jane Miller and Mary Scott.
// Mike is a freshman, Jim a sophomore, Jack a junior, Jane and Mary are seniors.
// Their respective GPAs are: 4, 3, 2.5, 3.6 and 2.7. Make sure you assign the gender when you instantiate the objects.
//Then call the showMyself method on all of them.
// I suggest you use a loop for making the objects and a separate loop for showing the objects.

require_once 'Student.php';

$createList = [ ['firstName' => 'Mike', 'lastName' => 'Barnes', 'gender' => 'male', 'status' => 'freshman', 'gpa' => 4],
                ['firstName' => 'Jim', 'lastName' => 'Nickerson', 'gender' => 'male', 'status' => 'sophomore', 'gpa' => 3],
                ['firstName' => 'Jack', 'lastName' => 'Indabox', 'gender' => 'male', 'status' => 'junior', 'gpa' => 2.5],
                ['firstName' => 'Jane', 'lastName' => 'Miller', 'gender' => 'female', 'status' => 'senior', 'gpa' => 3.6],
                ['firstName' => 'Mary', 'lastName' => 'Scot', 'gender' => 'female', 'status' => 'senior', 'gpa' => 2.7],
              ];

$studentList = [];

foreach ($createList as $student) {
    $studentList[] = new Student($student['firstName'], $student['lastName'], $student['gender'], $student['status'], $student['gpa']);
}



foreach ($studentList as $student) {
    $student->showMySelf();
}


//Use your objects from above and let each one of the 5 students study for 60, 100, 40, 300, 1000 minutes, respectively.
// So the first student studies 60 minutes, the second studies 100 minutes, etc.
// After that call the showMyself methods on all 5 again and check whether their new gpa reflects how much they studied.

echo PHP_EOL."====STUDY TIME====".PHP_EOL;

$studyTime = [60, 100, 40, 300, 1000];

foreach ($studentList as $index => $student) {
    $student->studyTime($studyTime[$index]);
}

foreach ($studentList as $student) {
    $student->showMySelf();
}
