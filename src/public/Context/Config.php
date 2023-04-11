<?php

class Config
{
    public array $config = [];

    function __construct()
    {
        $this->config = [
            'db' => [
                'host'     => 'db',
                'user'     => 'root',
                'pass'     => 'root',
                'database' => 'ShopPhP',
                'driver'   => 'mysql',
            ],
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }
}