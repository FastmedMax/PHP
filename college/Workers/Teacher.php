<?php

class Teacher extends \College\Entities\Human {
    private bool $isDismissed = false;
    private ?string $dismissReason = null;
    private ?string $dismissDateTime = null;

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

    public function getDismissReason() : ?string {
        return $this->dismissReason;
    }
    public function getDismissDateTime() : ?string {
        return $this->dismissDateTime;
    }

    public function dismiss(string $reason) : void {
        $this->dismissReason = $reason;
        $this->isDismissed = true;
        $this->dismissDateTime = date('Y-m-d H:i:s');
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
