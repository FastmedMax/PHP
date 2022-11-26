<?php

namespace College\Education;
use \DateTime;

class Student extends \College\Entities\Human {
    enum State
    {
        case studies;
        case expelled;
        case holiday;
    }

    private ?string $middleName = null;
    private ?string $reasonOfDeduction = null;
    private State $state = studies;
    private bool $isHeadman = false;
    private ?DateTime $dateOfDeduction = null;
    private ?DateTime $dateOfUpdate = null;
    private ?DateTime $dateOfDelete = null;

    public function __construct(
        private string $firstName,
        private string $lastName,
        private string $gender,
        private int $age,
        private DateTime $birthDate,
        private DateTime $yearOfAdmission,
        private DateTime $assignedDate,
        private Group $group
    ) {}

    public function Deduct(string $reason) : void
    {
        $this->deduction = true;
        $this->dateOfDeduction = new DateTime();
        $this->reasonOfDeduction = $reason;
    }

    public function setGroup(InterfaceGroups $group): void
    {
        $this->group = $group;
    }

    public function getGroup():GroupInterface
    {
        return $this->group;
    }

}
