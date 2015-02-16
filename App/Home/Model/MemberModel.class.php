<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class MemberModel extends RelationModel{
	 protected $_link = array(
		'Partment' => array(
			'mapping_type'  => self::BELONGS_TO,
			'class_name'    => 'Partment',
			'foreign_key'   => 'pid',
			'mapping_name'  => 'Partment',
			"mapping_fields"=>"name"

		),
		'Title' => array(
			'mapping_type'  => self::BELONGS_TO,
			'class_name'    => 'Title',
			'foreign_key'   => 'tid',
			'mapping_name'  => 'Title',
			"mapping_fields"=>"name"

		),
		'Role'=>array(
			'mapping_type' => self::MANY_TO_MANY,
			'class_name' => 'Role',
			'foreign_key' => 'user_id',
			'relation_foreign_key' => 'role_id',
			'relation_table' => 'rs_role_user'
		)


	);
}

?>