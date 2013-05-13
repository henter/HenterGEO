HenterGEO
=========
基于Symfony2和MongoDB的地理位置查询演示

Install
-------
```
$ git clone https://github.com/henter/HenterGEO.git
$ cd HenterGEO/
$ composer update
$ php app/console doctrine:mongodb:schmea:update
$ php app/console geo:data:import
```
