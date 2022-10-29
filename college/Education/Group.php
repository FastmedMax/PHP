<?php

namespace College\Education;

class Group {
    public function __construct(
        private string $Curator,
        private DateTime $year_of_formation,
        private string $speciality
    ) {}

}
