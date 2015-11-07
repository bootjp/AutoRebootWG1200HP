# AutoRebootWG1200HP

## NEC WG1200HP の再起動ツールです

### How to use 


#### Use Docker images  

go to -> [hub.docker.com/r/bootjp/autorebootwg1200hp/](https://hub.docker.com/r/bootjp/autorebootwg1200hp/)

#### Use Source codes

```bash
$ git@github.com:bootjp/AutoRebootWG1200HP.git
$ cd AutoRebootWG1200HP
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
or
$ composer install

$ vim setting.init  // edit config
$ php wrapper.php  

```

#### 注意点

ルータの仕様上、再起動リクエスト後すぐに再起動が始まるため、  
コネクションエラーがでて面倒なので、Guzzle Clientのexceptionをtry-catchで避けています。
