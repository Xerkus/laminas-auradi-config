<?php

namespace ZendTest\AuraDi\Config\TestAsset;

use Psr\Container\ContainerInterface;

class DelegatorFactory
{
    public function __invoke(ContainerInterface $container, $name, callable $callback)
    {
        return new Delegator($name, $callback);
    }
}
