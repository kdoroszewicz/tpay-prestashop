<?php

/**
 * NOTICE OF LICENSE
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author    Tpay
 * @copyright 2010-2022 tpay.com
 * @license   LICENSE.txt
 */

declare(strict_types=1);

namespace Tpay\Handler;

interface PaymentMethodHandler
{
    public function getName(): string;
    public function createPayment(
        \Tpay $module,
        \Order $order,
        \Customer $customer,
        \Context $context,
        array $clientData,
        array $data
    );
}
