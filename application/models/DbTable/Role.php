<?php

class Application_Model_DbTable_Role extends Zend_Db_Table_Abstract
{

    protected $_name = 'role';
    protected $_primary = 'id';
    protected $_dependentTables = array('User');
}