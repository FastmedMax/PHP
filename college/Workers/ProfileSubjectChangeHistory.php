<?php 

namespace College\Workers;

class ProfileSubjectChangeHistory {
    private array $changes = [];

    public function addSubjectChange(ProfileSubjectChange $change) : void {
        array_push($this->changes, $change);
    }

    public function getChanges() : array {
        return $this->changes;
    }
}