<?php

namespace College\Education;
use \DateTime;

class Student extends \College\Entities\Human {
    private ?string $middleName = null;
    private bool $deduction = false;
    private ?DateTime $date_of_deduction = null;
    private ?string $reason_of_deduction = null;

    public function __construct(
        private string $firstName,
        private string $lastName,
        private DateTime $birthDate,
        private string $gender,
        // private Group $group,
        private DateTime $year_of_admission
    ) {}

}
