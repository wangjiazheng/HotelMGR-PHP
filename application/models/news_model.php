<?php
if (!defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
/**
 *
 * @abstract 用户类模型
 * @author WangJiazheng
 *        
 */
class News_model extends MY_Model {

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
	
	}

	public function getNews( $num = 1 ){

		$num = $num < 0 ? 1 : $num;
		return $this->getArticleBrief ( $num, 1 );
	
	}

	public function getNotices( $num = 1 ){

		$num = $num < 0 ? 1 : $num;
		return $this->getArticleBrief ( $num, 2 );
	
	}

	public function getInfo( $num = 1 ){

		$num = $num < 0 ? 1 : $num;
		return $this->getArticleBrief ( $num, 3 );
	
	}

	public function getArticleBrief( $num = 1 , $leibie = 1 ){

		$num = $num < 0 ? 1 : $num;
		$data = array();
		$data['select'] = array( '*' );
		$data['from'] = 'jl_article';
		$data['where'] = array ( 'leibie' => $leibie );
		$data['orderby'] = array ( 'id' => 'desc' );
		$data['limit'] = array ( 0 , $num );
		$rs = $this->selectByCondition ( $data );
		$rbdata = array ();
		foreach ( $rs as $row ) {
			$new = array ();
			$new['id'] = $row['id'];
			$new['leibie'] = $row['leibie'];
			$new['title'] = $row['ctitle'];
			$new['time'] = $row['ptime'];
			$new['level'] = $row['ilevel'];
			$new['guide'] = $row['cguide'];
			$new['pguide'] = $row['cpguide'];
			$new['author'] = $row['author'];
			$rbdata[] = $new;
		}
		return $rbdata;
	
	}

	/**
	 * 根据id获取新闻消息全部
	 * @param string $msg_id
	 * @return boolean|unknown|multitype:
	 */
	public function getNewsAllByMsgID( $msg_id = '' ){

		if (empty ( $msg_id )) {return false;}
		$data = array();
		$data['select'] = array( '*' );
		$data['from'] = 'jl_article';
		$data['where'] = array ( 'id' => $msg_id );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs[0];
		} else {
			return array ();
		}
	}

	public function getAboutSite( $idf = '' ){

		$data = array();
		$data['select'] = array( 'aboutSite' );
		$data['from'] = 'jl_notice';
		$data['where'] = array ( 'idf' => ($idf ? '0' : '1') , 'kind' => '1' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs[0];
		} else {
			return array ();
		}
	
	}

	public function getAboutMe( $idf = '' ){

		$data = array();
		$data['select'] = array( 'aboutMe' );
		$data['from'] = 'jl_notice';
		$data['where'] = array ( 'idf' => ($idf ? '0' : '1') , 'kind' => '1' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs[0];
		} else {
			return array ();
		}
	
	}

	public function getAttention( $idf = '' ){

		$data = array();
		$data['select'] = array( 'aboutMe' );
		$data['from'] = 'jl_notice';
		$data['where'] = array ( 'idf' => ($idf ? '0' : '1') , 'kind' => '0' , 'aboutSite' => 'attention' );
		$data['orderby'] = array ( 'id' => 'desc' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs;
		} else {
			return array ();
		}
	
	}

	public function getInformation( $idf = '' ){

		$data = array();
		$data['select'] = array( 'aboutMe' );
		$data['from'] = 'jl_notice';
		$data['where'] = array ( 'idf' => ($idf ? '0' : '1') , 'kind' => '0' , 'aboutSite' => 'information' );
		$data['orderby'] = array ( 'id' => 'desc' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs;
		} else {
			return array ();
		}
	
	}

}
?>