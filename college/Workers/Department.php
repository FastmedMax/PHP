<?php

namespace College\Workers;

use \DateTime;

class Department {
    private DateTime $creationDateTime;
    private array $teachers = [];

    public function __construct(
        private string $name,
        private Teacher $manager,
        private array $specialities,
    ) {
        $this->creationDateTime = new DateTime();
    }
    
    public function getName() : string {
        return $this->name;
    }

    public function getManager() : Teacher {
        return $this->manager;
    }

    public function setManager(Teacher $teacher) : void {
        $this->manager = $teacher;
    }

    public function getSpecialities() : array {
        return $this->specialities;
    }

    public function getCreationDateTime() : DateTime {
        return $this->creationDateTime;
    }
}