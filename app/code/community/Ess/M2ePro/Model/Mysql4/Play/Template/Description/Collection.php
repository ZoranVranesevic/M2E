<?php

/*
 * @copyright  Copyright (c) 2012 by  ESS-UA.
 */

class Ess_M2ePro_Model_Mysql4_Play_Template_Description_Collection
    extends Ess_M2ePro_Model_Mysql4_Collection_Component_Child_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('M2ePro/Play_Template_Description');
    }
}