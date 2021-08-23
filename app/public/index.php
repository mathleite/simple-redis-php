<?php

use Dotenv\Dotenv;
use Redis\src\client\Redis;
use App\console\models\CreditCard;
use Redis\src\client\exceptions\RedisConnectionFailure;

require_once __DIR__ . '/../../vendor/autoload.php';

$dir = __DIR__ . '/../config';
$dotEnv = Dotenv::createUnsafeImmutable($dir);
$dotEnv->load();
$dotEnv->required(['REDIS_HOST']);

$card = (new CreditCard())
    ->setBin('123')
    ->setBrand('master_card')
    ->setExpirationDate('11/28')
    ->setHolderName('Matheus Leite')
    ->setNumber('123443211234');

try {
    $key = 'CREDIT_CARD_' . date('Ymd_His');
    $redis = new Redis();
    #$redis->set($key, $card->toJson());
    
    foreach ($redis->getAllKeys() as $redisKey) {
        echo $redisKey . PHP_EOL;
    }
} catch (RedisConnectionFailure $e) {
    echo $e->getMessage();
}
