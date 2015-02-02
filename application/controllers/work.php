<?php
/**
 *
 * @abstract 作品操作类
 * @author WangJiazheng
 *        
 */
class Work extends MY_Controller {

	private $data = array ();

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		$this->load->model ( 'Work_model' );
		$this->load->model ( 'User_model' );
		$this->load->helper ( 'url' );
		$this->data['title'] = WebSite_Static_Title;
	
	}

	public function displayzp(){

		if ($this->checkLogin ()) {
			$this->data['class'] = 'displayzp';
			$this->data['username'] = $this->getUserName ();
			$this->data['wlist'] = $this->Work_model->getWorkList ( $this->getUserID () );
			$this->load->view ( 'user/user_panel', $this->data );
		}
	
	}

	public function showwork( $tsid = '' ){

		if ($this->checkLogin ()) {
			if (!isset ( $tsid ) || empty ( $tsid )) {
				$this->jumpToFormer ( '请求错误' );
			}
			echo "REQUEST TSID:" . $tsid;
		}
	
	}

	public function uploadzp(){

		if ($this->checkLogin ()) {
			$this->data['class'] = 'uploadzp';
			$this->data['username'] = $this->getUserName ();
			$this->data['tkind'] = $this->Work_model->getAllClass ();
			if (!$this->data['tkind']) {
				$this->jumpToFormer ( '获取种类列表错误' );
			}
			$this->data['tsub'] = $this->Work_model->getAllSubject ();
			if (!$this->data['tsub']) {
				$this->jumpToFormer ( '获取主题列表错误' );
			}
			$this->data['schools'] = $this->User_model->getAllSchool ();
			if (!$this->data['schools']) {
				$this->jumpToFormer ( '获取学校列表错误' );
			}
			$this->data['info'] = $this->User_model->getPersonAllInfo ( $this->getUserID () );
			if (!$this->data['info']) {
				$this->jumpToFormer ( '获取个人信息错误' );
			}
			$this->load->view ( 'user/user_panel', $this->data );
		}
	
	}

}
