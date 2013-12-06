<?php

namespace mdm\admin;

/**
 * Description of Module
 *
 * @author MDMunir
 */
class Module extends \yii\base\Module
{

	public $userModel;
	public $useridField='id';
	public $usernameField='username';
	
	public function init()
	{
		parent::init();
		if($this->userModel === null){
			$this->userModel = \Yii::$app->user->identityClass;
		}
	}

}