<?php


class core
{
    private static $config;
    private static $client;

    public function __construct()
    {
        require_once('./vendor/autoload.php');
        self::$config = $this->getConfigs();
        self::$client = new \GuzzleHttp\Client([
            'defaults' => ['exceptions' => false]
        ]);
    }

    private static function getConfigs()
    {
        return [
            '192.168.1.13' => [
                'User' => 'admin',
                'Password' => 'PassWord'
            ],
            '192.168.1.15' => [
                'User' => 'admin',
                'Password' => 'PassWord'
            ]
        ];
    }

    function logic()
    {
        foreach(self::$config as $host => $auth) {
            self::$client->setDefaultOption('auth', [$auth['User'], $auth['Password']]);
            self::$client->setDefaultOption('exceptions', false);
            self::$client->get('http://' . $host . '/reboot.htm');
            self::$client->post('http://' . $host . '/boafrm/formReboot', [
                'body' => 'reboot=%BA%C6%B5%AF%C6%B0+',
            ]);
        }
    }
}
