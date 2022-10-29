<?php

class Teacher extends \College\Entities\Human {
    public function __construct(
        private string $firstName,
        private string $lastName,
        private DateTime $birthDate,
        private string $gender,
        private string $academicDegree, 
        private int $yearsExperience,
        private array $subjects
    ) {
        parent::__construct($firstName, $lastName, $birthDate, $gender);
    }

    public function getAcademicDegree() : string {
        return $this->academicDegree;
    }
    public function getYearsExperience() : int {
        return $this->yearsExperience;
    }
    public function getSubjects() : array {
        return $this->subjects;
    }
}