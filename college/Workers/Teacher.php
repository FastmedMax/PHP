<?php

namespace College\Workers;

use \DateTime;

class Teacher extends \College\Entities\Human {
    private DismissController $dismissController;
    private VacationController $vacationController;

    private TransferHistory $transferHistory;
    private TitleChangeHistory $titleChangeHistory;
    private ProfileSubjectChangeHistory $profileSubjectChangeHistory;

    private ?Department $department = null;

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
        private DateTime $hireDate
    ) {
        $this->vacationController = new VacationController();
        $this->dismissController = new DismissController();

        $this->transferHistory = new TransferHistory();
        $this->titleChangeHistory = new TitleChangeHistory();
        $this->profileSubjectChangeHistory = new ProfileSubjectChangeHistory();

        parent::__construct($firstName, $lastName, $birthDate, $gender);
    }

    // Transfers
    public function transfer(Department $newDepartment, string $reason) : void {
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

    public function getTransferHistory() : TransferHistory {
        return $this->transferHistory;
    }

    // Vacations
    public function getVacationController() : VacationController{
        return $this->vacationController;
    }

    public function getDismissController() : DismissController {
        return $this->dismissController;
    }

    // Subjects
    public function getProfileSubject() : string {
        return $this->profileSubject;
    }

    public function setProfileSubject(string $value) : void {
        $this->profileSubjectChangeHistory->addSubjectChange(
            new ProfileSubjectChange(
                $this->profileSubject,
                $value,
                new DateTime()
            )
        );

        $this->profileSubject = $value;
    }

    public function getProfileSubjectChangeHistory() : ProfileSubjectChangeHistory {
        return $this->profileSubjectChangeHistory;
    }

    // Job Titles
    public function getJobTitle() : string {
        return $this->jobTitle;
    }

    public function setJobTitle(string $title) : void {
        $this->titleChangeHistory->addTitleChange(
            new TitleChange(
                $this->jobTitle,
                $title,
                new DateTime()
            )
        );
        $this->jobTitle = $title;
    }

    public function getTitleChangeHistory() : TitleChangeHistory {
        return $this->titleChangeHistory;
    }
    
    // Other getters

    public function getAcademicDegree() : string {
        return $this->academicDegree;
    }

    public function getYearsExperience() : int {
        return $this->yearsExperience;
    }

    public function getSubjects() : array {
        return $this->subjects;
    }

    public function getHireDate() : DateTime {
        return $this->hireDate;
    }
}
