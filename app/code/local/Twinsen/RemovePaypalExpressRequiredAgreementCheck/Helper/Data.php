<?php

/**
 * @category Magento
 * @package Twinsen_RemovePaypalExpressRequiredAgreementCheck
 * @author Elias Kotlyar <elias.kotlyar@gmail.com>
 * @date 29.05.2015
 * @copyright Copyright (c) 2015 Elias Kotlyar
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
class Twinsen_RemovePaypalExpressRequiredAgreementCheck_Helper_Data extends Mage_Checkout_Helper_Data
{
    public function getRequiredAgreementIds()
    {
        $request = Mage::app()->getRequest();
        if ($request->getControllerName() == 'express' && $request->getActionName() == 'placeOrder' && $request->getRouteName() == 'paypal' && $request->getModuleName() == 'paypal') {
            return null;
        }
        return parent::getRequiredAgreementIds();
    }
}