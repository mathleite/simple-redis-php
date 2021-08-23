<?php

namespace App\console\models;

use App\console\traits\Serializer;

abstract class AbstractCard implements AbstractCardInterface
{
    use Serializer;

    public string $bin;

    public string $number;

    public string $expirationDate;

    public string $brand;

    public string $holderName;

    public string $type;

    public function getType(): string
    {
        return $this->type;
    }

    public function getBin(): string
    {
        return $this->bin;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }
}
