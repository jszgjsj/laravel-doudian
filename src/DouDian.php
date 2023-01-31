<?php

namespace Oneself\DouDian;

use Oneself\DouDian\Api\AfterSale;
use Oneself\DouDian\Api\Alliance;
use Oneself\DouDian\Api\AntiSpam;
use Oneself\DouDian\Api\Bats;
use Oneself\DouDian\Api\Brand;
use Oneself\DouDian\Api\BuyIn;
use Oneself\DouDian\Api\Coupons;
use Oneself\DouDian\Api\CrossBorder;
use Oneself\DouDian\Api\DutyFree;
use Oneself\DouDian\Api\FreightTemplate;
use Oneself\DouDian\Api\Iop;
use Oneself\DouDian\Api\Logistics;
use Oneself\DouDian\Api\Material;
use Oneself\DouDian\Api\Member;
use Oneself\DouDian\Api\OpenCloud;
use Oneself\DouDian\Api\Order;
use Oneself\DouDian\Api\OrderCode;
use Oneself\DouDian\Api\Product;
use Oneself\DouDian\Api\Recycle;
use Oneself\DouDian\Api\Security;
use Oneself\DouDian\Api\Shop;
use Oneself\DouDian\Api\Sms;
use Oneself\DouDian\Api\Spu;
use Oneself\DouDian\Api\Storage;
use Oneself\DouDian\Api\SupplyChain;
use Oneself\DouDian\Api\Token;
use Oneself\DouDian\Api\Topup;
use Oneself\DouDian\Api\WareHouse;
use Oneself\DouDian\Api\Yunc;
use Exception;
use Illuminate\Support\Str;

/**
 * Class DouDian.
 *
 * @property AfterSale   $afterSale
 * @property Alliance    $alliance
 * @property AntiSpam    $antiSpam
 * @property Bats        $bats
 * @property Brand       $brand
 * @property BuyIn       $buyIn
 * @property Coupons     $coupons
 * @property CrossBorder $crossBorder
 * @property DutyFree    $dutyFree
 * @property FreightTemplate    $freightTemplate
 * @property Logistics   $logistics
 * @property Iop         $iop
 * @property Material    $material
 * @property Member      $member
 * @property OpenCloud   $openCloud
 * @property Order       $order
 * @property OrderCode   $orderCode
 * @property Product     $product
 * @property Recycle     $recycle
 * @property Security    $security
 * @property Shop        $shop
 * @property Sms         $sms
 * @property Storage     $storage
 * @property SupplyChain $supplyChain
 * @property Spu         $spu
 * @property Token       $token
 * @property Topup       $topup
 * @property WareHouse   $wareHouse
 * @property Yunc        $yunc
 */
class DouDian
{
    private $config;
    private $shop_id = null;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function __get($class)
    {
        $class = '\\Oneself\\DouDian\\Api\\'.Str::ucfirst($class);
        if (! class_exists($class)) {
            throw new Exception($class.', Not found', 404);
        }

        return new $class($this->config, $this->shop_id);
    }

    /**
     * 设定店铺ID.
     *
     * @param int $shopId
     *
     * @return $this
     */
    public function setShopId(int $shopId): self
    {
        $this->shop_id = $shopId;

        return $this;
    }

    /**
     * 获取店铺ID.
     *
     * @return mixed|null
     */
    public function getShopId()
    {
        return $this->shop_id;
    }
}
