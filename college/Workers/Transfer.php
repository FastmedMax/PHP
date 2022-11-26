<?php

namespace College\Workers;

use \DateTime;

class Transfer {
    public function __construct(
        private string $oldDepartment,
        private string $newDepartment,
        private string $reason,
        private DateTime $dateTime
    ) {

    }

    public function getOldDepartment() : string {
        return $this->getOldDepartment;
    }

    public function getNewDepartment() : string {
        return $this->getNewDepartment;
    }

    public function getReason() : string {
        return $this->reason;
    }

    public function getDateTime() : DateTime {
        return $this->dateTime;
    }
}
