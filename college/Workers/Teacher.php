<?php

namespace College\Workers;

use \DateTime;

class Teacher extends \College\Entities\Human {
    private ?string $dismissReason = null;
    private ?string $dismissDateTime = null;
    private TransferHistory $transferHistory;
    private TitleChangeHistory $titleChangeHistory;
    private ProfileSubjectChangeHistory $profileSubjectChangeHistory;

    public function __construct(
        private string $firstName,
        private string $lastName,
        private DateTime $birthDate,
        private string $gender,
        private string $academicDegree, 
        private int $yearsExperience,
        private string $profileSubject,
        private array $subjects,
        private string $jobTitle,
        private string $department
    ) {
        $this->transferHistory = new TransferHistory();
        $this->titleChangeHistory = new TitleChangeHistory();
        $this->profileSubjectChangeHistory = new ProfileSubjectChangeHistory();
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

    public function getProfileSubject() {
        return $this->profileSubject;
    }

    public function setProfileSubject($value) {
        $this->profileSubjectChangeHistory->addSubjectChange(
            new ProfileSubjectChange(
                $this->profileSubject,
                $value,
                new DateTime()
            )
        );

        $this->profileSubject = $value;
    }

    public function getProfileSubjectChangeHistory(){
        return $this->profileSubjectChangeHistory;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle($title) {
        $this->titleChangeHistory->addTitleChange(
            new TitleChange(
                $this->jobTitle,
                $title,
                new DateTime()
            )
        );
        $this->jobTitle = $title;
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

    public function getTitleChangeHistory() : TitleChangeHistory {
        return $this->titleChangeHistory;
    }
}
