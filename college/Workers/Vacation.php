<?php

namespace College\Workers;

use \DateTime;

class Vacation {
    private ?DateTime $startDateTime = null;
    private ?DateTime $finishDateTime = null;

    public function isOnVacation() {
        return $this->startDateTime != null && $this->finishDateTime == null;
    }

    public function getVacationStart() : ?DateTime {
        return $this->startDateTime;
    }

    public function getVacationFinish() : ?DateTime {
        return $this->finishDateTime;
    }

    public function startVacation() {
        $this->startDateTime = new DateTime();
        $this->finishDateTime = null;
    }

    public function finishVacation() {
        $this->finishDateTime = new DateTime();
    }
}
