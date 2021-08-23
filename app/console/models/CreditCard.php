<?php

namespace App\console\models;

use App\console\models\AbstractCard;

class CreditCard extends AbstractCard
{
    public function setHolderName(string $holderName): self
    {
        $this->holderName = $holderName;
        return $this;
    }

    public function setBin(string $bin): self
    {
        $this->bin = $bin;
        return $this;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function setExpirationDate(string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
