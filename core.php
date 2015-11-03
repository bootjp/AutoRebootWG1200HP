<?php


class core
{
    private static $config;
    private $client;

    public function __construct()
    {
        require_once('./vendor/autoload.php');
        self::$config = $this->getConfigs();
        $this->client = new \GuzzleHttp\Client();
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
            $this->client->setDefaultOption('auth', [$auth['User'], $auth['Password']]);
            $this->client->setDefaultOption('exceptions', false);
            $this->client->get('http://' . $host . '/reboot.htm');
            $this->client->post('http://' . $host . '/boafrm/formReboot', [
                'body' => 'reboot=%BA%C6%B5%AF%C6%B0+',
            ]);
        }
    }
}
