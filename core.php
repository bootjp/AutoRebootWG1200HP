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

    public function logic()
    {
        foreach (self::$config as $host => $auth) {
            try {
                $this->client->setDefaultOption('auth', [$auth['User'], $auth['Password']]);
                $this->client->get('http://' . $host . '/reboot.htm');
                $this->client->post('http://' . $host . '/boafrm/formReboot', [
                    'body' => 'reboot=',
                ]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
