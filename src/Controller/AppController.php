<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
	public $data = null;	

    public function initialize()
    {

		$this->data["base_url"]       = "http://fdc.dev/";
		
		$this->data["landing_page"]   = false;
		
		$this->data['header_styles']  = array(
								"bower_components/bootstrap/dist/css/bootstrap.css",
								"bower_components/bootstrap/dist/css/bootstrap.theme.css"
							);
		$this->data['header_scripts'] = array(
	    						"bower_components/jquery/dist/jquery.js",
	    						"bower_components/bootstrap/dist/js/bootstrap.js",
	    						"bower_components/angularjs/angular.js",
	    						"ng/service.js",
	    						"ng/controller.js",
	    						"ng/app.js",
    						);

        parent::initialize();
        $this->loadComponent('Flash');
    }

}