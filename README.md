# AutoRebootWG1200HP

## NEC WG1200HP の再起動ツールです

### How to use 

```bash
$ git@github.com:bootjp/AutoRebootWG1200HP.git
$ cd AutoRebootWG1200HP
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
or
$ composer install

$ vim core.php  // edit config   
$ php wrapper.php  

```

#### 注意点

ルータの仕様上、再起動リクエスト後すぐに再起動が始まるため、  
コネクションエラーがでて面倒なので、Guzzle Clientのexceptionをtry-catchで避けています。
