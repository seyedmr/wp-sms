<?php

namespace WP_SMS\Notification;

use WP_SMS\Notification\Handler\CustomNotification;
use WP_SMS\Notification\Handler\SubscriberNotification;
use WP_SMS\Notification\Handler\WooCommerceOrderNotification;
use WP_SMS\Notification\Handler\WooCommerceProductNotification;
use WP_SMS\Notification\Handler\WordPressCommentNotification;
use WP_SMS\Notification\Handler\WordPressPostNotification;
use WP_SMS\Notification\Handler\WordPressUserNotification;
use WP_SMS\Notification\Handler\WooCommerceCouponNotification;
use WP_SMS\Notification\Handler\WooCommerceCustomerNotification;

class NotificationFactory
{
    /**
     * @param $orderId
     * @return WooCommerceOrderNotification
     */
    public static function getWooCommerceOrder($orderId = false)
    {
        return new WooCommerceOrderNotification($orderId);
    }

    /**
     * @param $productId
     * @return WooCommerceProductNotification
     */
    public static function getWooCommerceProduct($productId = false)
    {
        return new WooCommerceProductNotification($productId);
    }

    /**
     * @param $couponId
     * @return WooCommerceCouponNotification
     */
    public static function getWooCommerceCoupon($couponId = false)
    {
        return new WooCommerceCouponNotification($couponId);
    }

    /**
     * @param $customerId
     * @return WooCommerceCustomerNotification
     */
    public static function getWooCommerceCustomer($customerId = false)
    {
        return new WooCommerceCustomerNotification($customerId);
    }

    /**
     * @param $postId
     * @return WordPressPostNotification
     */
    public static function getPost($postId = false)
    {
        return new WordPressPostNotification($postId);
    }

    /**
     * @param $userId
     * @return WordPressUserNotification
     */
    public static function getUser($userId = false)
    {
        return new WordPressUserNotification($userId);
    }

    /**
     * @param $commentId
     * @return WordPressCommentNotification
     */
    public static function getComment($commentId = false)
    {
        return new WordPressCommentNotification($commentId);
    }

    /**
     * @param $subscriberId
     * @return SubscriberNotification
     */
    public static function getSubscriber($subscriberId = false)
    {
        return new SubscriberNotification($subscriberId);
    }

    /**
     * @return CustomNotification
     */
    public static function getCustom()
    {
        return new CustomNotification();
    }
}