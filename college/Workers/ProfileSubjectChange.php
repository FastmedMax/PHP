<?php

namespace College\Workers;

use \DateTime;

class ProfileSubjectChange {
    public function __construct(
        private string $oldSubject,
        private string $newSubject,
        private DateTime $dateTime
    ) { }

    public function getOldSubject() : string {
        return $this->oldSubject;
    }

    public function getNewSubject() : string {
        return $this->newSubject;
    }

    public function getDateTime() : DateTime {
        return $this->dateTime;
    }
}
