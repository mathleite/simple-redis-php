<?php

namespace Redis\src\client;

use Predis\Client;
use Predis\Connection\AbstractConnection;
use Redis\src\client\exceptions\RedisConnectionFailure;

class Redis
{
    private Client $client;

    public function __construct()
    {
        $this->initialize();
    }

    private function initialize(): void
    {
        $this->client = new Client(['host' => getenv('REDIS_HOST')]);
    }

    public function set(string $key, string $value): bool
    {
        $this->validateConnection();
        return (bool)$this->client->set($key, $value);
    }

    public function getByKey(string $key): string
    {
        $this->validateConnection();
        return $this->client->get($key);
    }

    public function getAllKeys(): array
    {
        $this->validateConnection();
        return $this->client->keys('*');
    }

    public function deleteAll(): array
    {
        $this->validateConnection();
        $this->client->flushAll();
        return $this->getAllKeys();
    }

    public function deleteByKey(string $key): array
    {
        $this->validateConnection();
        $this->client->del($key);
        return $this->getAllKeys();
    }

    private function validateConnection(): void
    {
        try {
            if (!$this->client->ping()) {
                throw new RedisConnectionFailure();
            }
        } catch (\Throwable) {
            throw new RedisConnectionFailure();
        }
    }
}
