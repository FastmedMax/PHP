<?php

namespace College\Workers;

use \DateTime;

class TitleChange {
    public function __construct(
        private string $oldTitle,
        private string $newTitle,
        private DateTime $dateTime
    ) { }

    public function getOldTitle() : string {
        return $this->oldTitle;
    }

    public function getNewTitle() : string {
        return $this->newTitle;
    }

    public function getDateTime() : DateTime {
        return $this->dateTime;
    }
}
