<?php 

namespace College\Workers;

class TransferHistory {
    private array $transfers = [];

    public function addTransfer(Transfer $transfer) {
        array_push($this->transfers, $transfer);
    }

    public function getTransfers() : array {
        return $this->transfers;
    }
}