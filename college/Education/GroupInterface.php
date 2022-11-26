<?php

interface InterfaceGroup {
    public function renameCurator(string $name) : void;
    public function setSpeciality(string $title) : void;
    public function getStudents() : array;
    public function getStudentsOnDate(DateTime $date) : array;
    public function getStudentsOnGender(string $gender) : array;
    public function getStudentsOnAge() : array;
}