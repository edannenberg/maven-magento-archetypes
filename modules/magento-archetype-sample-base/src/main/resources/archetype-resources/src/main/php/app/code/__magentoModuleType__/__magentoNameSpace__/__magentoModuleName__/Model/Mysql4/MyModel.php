<?php
class ${magentoNameSpace}_${magentoModuleName}_Model_Mysql4_MyModel extends Mage_Core_Model_Mysql4_Abstract
{
	protected function _construct()
	{
		$this->_init('${magentoModuleNameLowerCase}/myModel', 'entity_id');
	}

	public function myResourceMethod() {
		 
		/*
		 *  raw sql read example
		 */
		$db = $this->_getReadAdapter();
		// $this->getEntityTable() if you extend from Mage_Eav_Model_Entity_Abstract
		$sql = sprintf('SELECT * FROM %s', $this->getTable('${magentoModuleNameLowerCase}/myModel'));
		$result = $db->fetchAll($sql);
		 
		/*
		 * zendDbSelect example
		 */
		$select = $this->_getReadAdapter()->select();

		// distinct clause
		//$select->distinct();

		// from table(s) and return columns
		$select->from( array('table_alias' => $this->getTable('${magentoModuleNameLowerCase}/myModel')), array('text_field', 'float_field') );
		 
		// join table as table_alias2 using key_field
		/*$select->join(array('table_alias2' => $this->getTable('${magentoModuleNameLowerCase}/myModel')),
								'table_alias.key_field = table_alias2.key_field');
		*/
		// join table as table_alias3 using key_field and return column amount_of_related_rows
		/*$select->join(array('table_alias3' => $this->getTable('${magentoModuleNameLowerCase}/myModel')),
								'table_alias.key_field = table_alias3.key_field',
		array('amount_of_related_rows' => 'COUNT(*)');
		*/
		 
		// some where clause examples
		//$select->where( 'float_field > ?', $someVar );
		//$select->orWhere('float_field < ?', $someOtherVar);
		//$select->where( 'float_field IN (?)', $someArray );

		// group by clause
		//$select->group('table_alias.text_field');

		// order clause, ASC is default
		//$select->order( array('text_field DESC', 'float_field') );
		 
		// limit/offset clause
		//$select->limit($maxRows, $startAtRow);
		 
		// log the generated sql query
		//Mage::log($select->__toString());
		 
		// execute the select, use fetchOne/fetchAll
		$return = $this->_getReadAdapter()->fetchAll($select);
		 
	}


}