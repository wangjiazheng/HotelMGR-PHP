<?php
if (!defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
class Welcome extends MY_Controller {

	private $data = array();
	
	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		$this->load->model ( 'News_model' );
		$this->load->helper ( 'url' );
		$this->data['title'] = WebSite_Static_Title;
	
	}

	/**
	 * 默认加载首页
	 */
	public function index(){

		if (!$this->isSiteOn ( 'welcomeon' )) {
			$this->load->view ( 'sitefix', $this->data );
		} else {
			$this->data['news'] = $this->News_model->getNews ( 3 );
			$this->data['info'] = $this->News_model->getInfo ( 2 );
			$this->data['notice'] = $this->News_model->getNotices ( 5 );
			$this->load->view ( 'welcome', $this->data );
		}
	
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>