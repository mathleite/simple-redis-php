<?php

namespace App\console\traits;

trait Serializer
{
    public function toJson(): string
    {
        return json_encode($this);
    }
}