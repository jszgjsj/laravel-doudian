# 基于Laravel 的 抖店开放平台 sdk
#目前只开放了订单和退费相关sdk order && AfterSale

1、通过`composer`安装扩展包。
```bash
composer require jszgjsj/laravel-doudian
```
2、发布配置文件。
```bash
php artisan vendor:publish --provider="Oneself\DouDian\DouDianServiceProvider"
```
3、修改`config/doudian.php`中相关配置。
## 使用
## 支持多开放平台切换
``` php
$doudian = new DouDian(config('doudian.default'));
$doudian->setShopId('店铺ID')->order->orderDetail(["shop_order_id"=>'店铺订单号']);
```

## 欢迎联系指正！感谢！
