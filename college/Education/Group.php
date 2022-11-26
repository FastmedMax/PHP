<?php

namespace College\Education;

class Group implements Group {
    private ?string $speciality = null;
    private ?DateTime $dateOfUpdate = null;
    private ?DateTime $dateOfDelete = null;

    public function __construct(
        private int $curator,
        private DateTime $dateOfFormation,
        // private string $speciality
    ) {}

    public function setSpeciality(string $title) : void
    {
        $this->speciality = $title;
    }

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    public function getStudents() : array
    {}

    public function getStudentsByDate(DateTime $date) : array
    {}

    public function getStudentsByGender(string $gender) : array
    {}

    public function getStudentsByAge() : array
    {}



    function getStudentsByAge() {
        if (func_num_args() == 1) {
            echo 'Передан 1 аргумент'. func_get_arg(0);
        } else if (func_num_args() == 2) {
            list($firstArg, $SecondArg) = func_get_args();
            echo 'Передано 2 аргумента'. $firstArg. ' и ' .$SecondArg;
        }
    }
}
