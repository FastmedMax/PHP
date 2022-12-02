<?php

namespace College\Workers;

use \DateTime;

class DismissController {
    private ?DateTime $dismissDateTime = null;
    private ?DateTime $reinstateDateTime = null;

    private ?string $dismissReason = null;

    public function isDismissed() {
        return $this->dismissDateTime != null && $this->reinstateDateTime == null;
    }

    public function getDismissReason() : ?string {
        return $this->dismissReason;
    }

    public function getDismissDateTime() : ?DateTime {
        return $this->dismissDateTime;
    }

    public function getReinstateDateTime() : ?DateTime {
        return $this->reinstateDateTime;
    }

    public function dismiss(string $reason) {
        if ($this->isDismissed())
            return;

        $this->dismissDateTime = new DateTime();
        $this->reinstateDateTime = null;
        $this->dismissReason = $reason;
    }

    public function reinstate() {
        $this->reinstateDateTime = new DateTime();
    }
}
