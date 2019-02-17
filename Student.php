<?php

// firstname`, `lastname`, `gender` which can be "male" or "female", `status` which can be equal to "freshman", "sophomore", "junior", and "senior" and "gpa".
// The `studyTime` method will increment the gpa of the student according to the following formula: ` gpa = gpa + log(study_time)`.
// The only input argument of this method is the variable study_time.
// In addition make sure that the gpa variable never exceeds 4.0 even if the student studies for a very long time.


class Student
{
    private $firstName;
    private $lastName;
    private $gender;
    private $status;
    private $gpa;

    public function showMySelf()
    {
        $prop = ['firstName' => $this->getFirstName(),
                'lastName'   => $this->getLastName(),
                'gender'     => $this->getGender(),
                'status'     => $this->getStatus(),
                'gpa'        => $this->getGpa(),
        ];

        foreach ($prop as $key => $value) {
            echo "$key: $value".PHP_EOL;
        }
    }

    public function studyTime(int $studyTime) {
        $gpa = $this->getGpa();
        $newGpa = $gpa + log($studyTime);
        if($newGpa > 4) {
            $newGpa = 4.0;
        }
        $this->setGpa($newGpa);
    }

    public function __construct($firstName, $lastName, $gender, $status, $gpa)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->status = $status;
        $this->gpa = $gpa;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getGpa()
    {
        return $this->gpa;
    }

    public function setGpa($gpa)
    {
        $this->gpa = $gpa;
    }

}