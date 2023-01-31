# 基于Laravel 的 抖店开放平台 sdk
#目前只开放了订单和退费相关sdk order && AfterSale

## 安装

```bash
composer require "overtrue/laravel-wechat"
```

## 配置

1. 创建配置文件：

```shell
php artisan vendor:publish --provider="Oneself\DouDian\DouDianServiceProvider"
```

2. 可选，添加别名

```php
    Oneself\DouDian\DouDianServiceProvider::class
```

3. 修改`config/doudian.php`中相关配置。
## 使用
``` php
use Oneself\DouDian\DouDian;

$doudian = new DouDian(config('doudian.default'));# 支持多开放平台切换
$doudian->setShopId('店铺ID')->order->orderDetail(["shop_order_id"=>'店铺订单号']);
```

## 欢迎联系指正！感谢！
