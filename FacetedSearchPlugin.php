<?php

class FacetedSearchPlugin extends Omeka_Plugin_AbstractPlugin
{
	protected $_hooks = array('install', 'uninstall', 'config_form',);

	public function hookInstall(){
        


		set_option('test_option', json_encode(array()));
    	}

	public function hookUninstall() {
		delete_option('test_option');


	}

	public function hookConfig($args){
        $post = $args['post'];
        if(isset($post['elements'])) {
            set_option('test_option', json_encode($post['elements']));
        } else {
            set_option('test_option', json_encode(array()));
        }
        set_option('test_option', $post['test_option']);
    	}




}


?>
