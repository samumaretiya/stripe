/**
 * Copyright © 2018 Samumaretiya_Stripe. All rights reserved.
 * See COPYING.txt for license details.
 */
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'samumaretiya_stripe',
                component: 'Samumaretiya_Stripe/js/view/payment/method-renderer/samumaretiya_stripe'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
