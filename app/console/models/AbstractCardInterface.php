<?php

namespace App\console\models;

interface AbstractCardInterface
{
    public function setHolderName(string $holderName): self;
    public function setBin(string $bin): self;
    public function setNumber(string $number): self;
    public function setExpirationDate(string $expirationDate): self;
    public function setBrand(string $brand): self;
    public function setType(string $type): self;
}
