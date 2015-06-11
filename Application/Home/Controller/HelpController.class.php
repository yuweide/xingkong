<?php 

namespace Home\Controller;

/**
 * 帮助中心控制器
 * @author  yuwei
 */

class HelpController extends BaseController
{

	public function _initialize()
	{

		parent::_initialize();
		$this->title = "帮助中心";
	}

	public function index()
	{

		$this->display();
	}

}