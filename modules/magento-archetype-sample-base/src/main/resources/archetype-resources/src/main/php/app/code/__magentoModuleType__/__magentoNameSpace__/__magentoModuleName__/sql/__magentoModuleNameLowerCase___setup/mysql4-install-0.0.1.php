<?php
$installer = $this;
$installer->startSetup();

$installer->run("

CREATE TABLE {$this->getTable('${magentoModuleNameLowerCase}_mymodel')} 
(
  `entity_id` int(10) unsigned NOT NULL auto_increment,
  `text_field` varchar(255) NOT NULL DEFAULT 'default value',
  `float_field` DECIMAL (12,2) NOT NULL,
  `boolean_field` BOOLEAN NOT NULL DEFAULT 0,
  `date_field` DATE NOT NULL DEFAULT '0000-00-00',

  PRIMARY KEY  (`entity_id`)
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();