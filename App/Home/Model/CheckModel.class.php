<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class CheckModel extends RelationModel{
	 protected $_link = array(
		'Partment' => array(
			'mapping_type'  => self::BELONGS_TO,
			'class_name'    => 'Partment',
			'foreign_key'   => 'pid',
			'mapping_name'  => 'Partment',
			"mapping_fields"=>"name"

		),
		'Member' => array(
			'mapping_type'  => self::BELONGS_TO,
			'class_name'    => 'Member',
			'foreign_key'   => 'mid',
			'mapping_name'  => 'Member',
			"mapping_fields"=>"truename"


		),


	);
}

?>