<?php
/**
 *
 * @abstract 查看新闻消息类
 * @author WangJiazheng
 *        
 */
class News extends MY_Controller {

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model ( 'News_model' );
	
	}

	public function view( $msg_id , $class = '1' ){ // 1新闻，2通知
		if (!isset ( $msg_id ) || empty ( $msg_id ) || !$this->isIntNumber ( $msg_id )) {
			$this->jumpToIndex ();
		}
		$data['title'] = WebSite_Static_Title;
		$className = array( '1' => "新闻" , '2' => "通知" , '3' => "信息" );
		if ($class == '1') {
			$data['lists'] = $this->News_model->getNews ( 20 );
		}else if ($class == '2') {
			$data['lists'] = $this->News_model->getNotices ( 20 );
		}else if ($class == '3') {
			$data['lists'] = $this->News_model->getInfo ( 20 );
		}
		$data['class'] = $className[$class];
		$data['lists'] = $this->formatNewsList ( $data['lists'] );
		$data['news'] = $this->News_model->getNewsAllByMsgID ( $msg_id );
		if ($data['news']['leibie'] != $class) {
			$this->jumpToIndex ();
		}
		$this->load->view ( 'readnews', $data );
	
	}

	public function jumpToIndex(){

		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
		echo "<script type=text/javascript>alert('请求错误');location.href='/';</script>";
		exit ();
	
	}

	public function isIntNumber( $param ){

		if (is_numeric ( $param )) {
			if (strpos ( $param, '.' ) === false) {
				if (strpos ( $param, 'e' ) === false) {return true;}
			}
		}
		return false;
	
	}

	public function formatNewsList( $newsList ){

		if (!isset ( $newsList ) || empty ( $newsList )) {return false;}
		$rb = array ();
		foreach ( $newsList as $listItem ) {
			$newItem = array ();
			$newItem['id'] = $listItem['id'];
			$newItem['leibie'] = $listItem['leibie'];
			$newItem['title'] = $this->getShortTitle ( $listItem['title'] );
			$newItem['time'] = $this->getDateFromDatetime ( $listItem['time'] );
			$rb[] = $newItem;
		}
		return $rb;
	
	}

}
?>