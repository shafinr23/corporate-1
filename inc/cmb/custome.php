<?php



add_action('cmb2_admin_init','custome_func');


function custome_func(){

	$dhora = new_cmb2_box(array(
			'id'		=>	'unique_name',
			'title'		=>	'Add button name',
			'object_types' => array('foot')

		));

	$dhora->add_field(array(
			'id'=> 'button_name',
			'name'=>'button name ',
			'type'=> 'text'

		));
	



}



?>