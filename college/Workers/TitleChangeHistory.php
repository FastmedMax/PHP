<?php 

namespace College\Workers;

class TitleChangeHistory {
    private array $changes = [];

    public function addTitleChange(TitleChange $change) {
        array_push($this->changes, $change);
    }

    public function getChanges() : array {
        return $this->changes;
    }
}