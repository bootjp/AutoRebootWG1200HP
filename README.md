# AutoRebootWG1200HP

[![Build Status](https://travis-ci.org/bootjp/AutoRebootWG1200HP.svg?branch=master)](https://travis-ci.org/bootjp/AutoRebootWG1200HP)

## NEC WG1200HP の再起動ツール / docker images です

### How to use 

#### 注意点

ルータの仕様上、再起動リクエスト後すぐに再起動が始まるため、  
コネクションエラーがでて面倒なので、Guzzle Clientのexceptionをtry-catchで避けています。


#### Use Source codes

```bash
$ git@github.com:bootjp/AutoRebootWG1200HP.git
$ cd AutoRebootWG1200HP
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
or
$ composer install

$ vim setting.ini  // edit config
$ php wrapper.php  

```

#### Use Docker images  

go to -> [hub.docker.com/r/bootjp/autorebootwg1200hp/](https://hub.docker.com/r/bootjp/autorebootwg1200hp/)

以下のような ini ファイルを -v でマウントするなどして使用してください。

##### setup

```ini
;sample
[192.168.1.2]
User = 'admin'
Password = 'PassWord'
[192.168.1.15]
User = 'admin'
Password = 'PassWord'
```

##### execure 
```bash
$ docker run -v $(pwd)/setting.ini:/app/setting.ini bootjp/autorebootwg1200hp
```
