<?php
/**
 * Copyright © 2018 Samumaretiya_Stripe. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Samumaretiya\Stripe\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use Samumaretiya\Stripe\Gateway\Http\Client\ClientMock;

/**
 * Class ConfigProvider
 */
final class ConfigProvider implements ConfigProviderInterface
{
    const CODE = 'samumaretiya_stripe';

    /**
     * Retrieve assoc array of checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'payment' => [
                self::CODE => [
                    'transactionResults' => [
                        ClientMock::SUCCESS => __('Success'),
                        ClientMock::FAILURE => __('Fraud')
                    ]
                ]
            ]
        ];
    }
}
