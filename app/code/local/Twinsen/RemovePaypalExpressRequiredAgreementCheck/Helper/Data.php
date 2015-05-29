<?php

/**
 * hotbytes - the opensource company
 *
 *
 * @category Extbase
 * @package ${Package}
 * @author Elias Kotlyar <eko@hotbytes.de
 * @date 29.05.2015
 * @copyright Copyright (c) 2014 hotbytes GmbH & Co KG (http://www.hotbytes.de/)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
class Twinsen_RemovePaypalExpressRequiredAgreementCheck_Helper_Data extends Mage_Checkout_Helper_Data
{
    public function getRequiredAgreementIds()
    {
        $request = Mage::app()->getRequest():
         // get Controller name
        $request->getControllerName();
        // get Action name, i.e. the function inside the controller
        $request->getActionName();
        // get Router name
        $request->getRouteName();
        // get module name
        $request->getModuleName();
        return parent::getRequiredAgreementIds();
    }
}