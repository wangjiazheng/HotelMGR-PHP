<?php
/**
 *
 * @abstract 系统消息类
 * @author WangJiazheng
 *        
 */
class Notice extends MY_Controller {

	private $data = array ();

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model ( 'News_model' );
		$this->data['title'] = WebSite_Static_Title;
	
	}

	public function view( $class = '' ){

		if ($this->checkLogin ()) {
			if ($class == '') {
				$class = 'main';
			}
			$this->data['username'] = $this->getUserName ();
			$this->data['class'] = $class;
			$isAdmin = $this->isAdmin ();
			$this->data['attention'] = $this->News_model->getAttention ( $isAdmin );
			$this->data['information'] = $this->News_model->getInformation ( $isAdmin );
			$this->data['aboutSite'] = $this->News_model->getAboutSite ( $isAdmin );
			$this->data['aboutMe'] = $this->News_model->getAboutMe ( $isAdmin );
			if (!$this->data['attention'] || !$this->data['information'] || !$this->data['aboutSite'] || !$this->data['aboutMe']) {
				$this->jumpToFormer ();
			}
			$this->load->view ( 'user/user_panel', $this->data );
		}
	
	}

}
?>