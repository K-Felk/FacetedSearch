<?php

class FacetedSearchPlugin extends Omeka_Plugin_AbstractPlugin
{
	protected $_hooks = array('install', 'uninstall', 'config_form',);

	public function hookInstall(){
        
		set_option('test_option', "");
    }

	public function hookUninstall() {
		delete_option('test_option');


	}

	public function hookConfig($args){
        $post = $args['post'];
        if(isset($post['test_option'])) {
            set_option('test_option', $post['test_option']);
        } else {
            set_option('test_option', "");
        }
        
    	}


    public function hookConfigForm()
    {
 
        include 'config-form.php';
    }

}


?>
