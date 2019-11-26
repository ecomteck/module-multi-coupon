<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Ecomteck
 * @package   Ecomteck\MultiCoupon
 * @author    Ecomteck <ecomteck@gmail.com>
 * @copyright 2019 Ecomteck
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Ecomteck\MultiCoupon\Block\Cart;

/**
 * Multiple Coupon cart block.
 *
 * @category Ecomteck
 * @package  Ecomteck\MultiCoupon
 * @author   Ecomteck <ecomteck@gmail.com>
 */
class Coupon extends \Magento\Checkout\Block\Cart\AbstractCart
{
    /**
     * @return array
     */
    public function getCouponCodes()
    {
        return array_filter(explode(",", $this->getQuote()->getCouponCode()));
    }
}
