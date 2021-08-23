<?php

namespace Test\redis\src\client;

use PHPUnit\Framework\TestCase;
use Redis\src\client\exceptions\RedisConnectionFailure;
use Redis\src\client\Redis;

class RedisTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        putenv('REDIS_HOST=wrong_host');
    }

    public function test_ShouldThrowException_WhenPassInvalidHost(): void
    {
        $this->expectException(RedisConnectionFailure::class);
        $redis = new Redis();
        $redis->getAllKeys();
    }
}