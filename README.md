# AutoRebootWG1200HP

### How to use 

```bash

$ vim core.php  // edit config   
$ php wrapper.php  

```

#### 注意点

ルータの仕様上、再起動リクエスト後すぐに再起動が始まるため、  
コネクションエラーがでると面倒なので、Guzzle Clientのexceptionを潰しています。


```php
self::$client->setDefaultOption('exceptions', true);
```

に変更して検証するなどしてください。