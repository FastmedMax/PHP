<?php

namespace College\Workers;

use \DateTime;

class Teacher extends \College\Entities\Human {
    private ?string $dismissReason = null;
    private ?string $dismissDateTime = null;
    private TransferHistory $transferHistory;

    public function __construct(
        private string $firstName,
        private string $lastName,
        private DateTime $birthDate,
        private string $gender,
        private string $academicDegree, 
        private int $yearsExperience,
        private array $subjects,
        private string $jobTitle,
        private string $department
    ) {
        $this->transferHistory = new TransferHistory();
        parent::__construct($firstName, $lastName, $birthDate, $gender);
    }

    public function transfer($newDepartment, $reason) : void {
        $this->transferHistory->addTransfer(
            new Transfer(
                $this->department,
                $newDepartment,
                $reason,
                new DateTime()
            )
        );
        $this->department = $newDepartment;
    }

    public function getDismissReason() : ?string {
        return $this->dismissReason;
    }
    
    public function getDismissDateTime() : ?string {
        return $this->dismissDateTime;
    }

    public function dismiss(string $reason) : void {
        $this->dismissReason = $reason;
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

    public function getTransferHistory() : TransferHistory {
        return $this->transferHistory;
    }
}
