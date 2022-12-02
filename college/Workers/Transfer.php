<?php

namespace College\Workers;

use \DateTime;

class Transfer {
    public function __construct(
        private ?Department $oldDepartment,
        private Department $newDepartment,
        private string $reason,
        private DateTime $dateTime
    ) { }

    public function getOldDepartment() : Department {
        return $this->oldDepartment;
    }

    public function getNewDepartment() : Department {
        return $this->newDepartment;
    }

    public function getReason() : string {
        return $this->reason;
    }

    public function getDateTime() : DateTime {
        return $this->dateTime;
    }
}
