<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class TitleModel extends RelationModel{
	 protected $_link = array(
		'Partment' => array(
			'mapping_type'  => self::BELONGS_TO,
			'class_name'    => 'Partment',
			'foreign_key'   => 'apid',
			'mapping_name'  => 'Partment',
			"mapping_fields"=>"name"

		)
	);
}

?>