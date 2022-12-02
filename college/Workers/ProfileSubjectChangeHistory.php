<?php 

namespace College\Workers;

class ProfileSubjectChangeHistory {
    private array $changes = [];

    public function addSubjectChange(ProfileSubjectChange $change) {
        array_push($this->changes, $change);
    }

    public function getChanges() : array {
        return $this->changes;
    }
}