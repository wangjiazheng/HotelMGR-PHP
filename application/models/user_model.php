<?php
if (!defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
/**
 *
 * @abstract 用户类模型
 * @author WangJiazheng
 *        
 */
class User_model extends MY_Model {

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
	
	}

	/**
	 * 检测用户登陆用户名密码
	 *
	 * @param string $user_id
	 * @param string $user_pwd
	 * @return boolean
	 */
	public function checkUserAndPwd( $user_id = '' , $user_pwd = '' ){

		if (empty ( $user_id ) || empty ( $user_pwd )) {return false;}
		$user_pwd = substr ( md5 ( $user_pwd ), 1, 30 );
		$data = array();
		$data['select'] = array( 'count(*) as total' );
		$data['from'] = 'jl_login';
		$data['where'] = array ( 'user_name' => $user_id , 'user_pwd' => $user_pwd  );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			$user_num = $rs[0]['total'];
			if (intval ( $user_num ) > 0) {return true;}
		}
		return false;
	
	}

	/**
	 * 为用户修改密码
	 * @param string $user_id
	 * @param string $user_oldpwd
	 * @param string $user_pwd
	 * @return boolean
	 */
	public function setNewPwd( $user_id = '' , $user_oldpwd = '' , $user_pwd = '' ){

		if (empty ( $user_id ) || empty ( $user_oldpwd ) || empty ( $user_pwd )) {return false;}
		if ($this->checkUserAndPwd ( $user_id, $user_oldpwd )) {
			$data = array( 'user_pwd' => substr ( md5 ( $user_pwd ), 1, 30 ) );
			return $this->updateByCondition( 'jl_login' , $data , array( 'user_name' => $user_id ) );
		} else {
			return false;
		}
	
	}

	/**
	 *
	 * @abstract 检测用户名唯一,TRUE唯一
	 * @param string $param
	 */
	public function checkUserNameUnique( $user_id = '' ){

		if (empty ( $user_id )) {return false;}
		$data = array();
		$data['select'] = array( 'count(*) as total' );
		$data['from'] = 'jl_login';
		$data['where'] = array ( 'user_name' => $user_id  ) ;
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			$user_num = $rs[0]['total'];
			if (intval ( $user_num ) <= 0) {return TRUE;}
		}
		return false;
	
	}

	/**
	 * 根据$user_id获取用户姓名
	 * @param string $user_id
	 * @return boolean|unknown|string
	 */
	public function getUserNameByUserID( $user_id = '' ){

		if (empty ( $user_id )) {return false;}
		$data = array();
		$data['select'] = array( 'name' );
		$data['from'] = 'jl_user';
		$data['where'] = array ( 'user_name' => $user_id  ) ;
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			$user_num = $rs[0]['name'];
			return $user_num;
		}
		return '未获取到数据';
	
	}

	/**
	 * 获取所有的学校ID和名称
	 * @return boolean string
	 */
	public function getAllSchool(){

		$data = array ();
		$data['select'] = array (
								'id,school_name' 
		);
		$data['from'] = 'jl_school';
		$data['orderby'] = array ( 'show_order' => 'asc' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {return $rs;}
		return false;
	
	}

	/**
	 * 获取个人信息
	 * @return boolean string
	 */
	public function getPersonAllInfo( $user_id ){

		if (!isset ( $user_id ) || empty ( $user_id )) {return false;}
		$data = array ();
		$data['select'] = array( '*' );
		$data['from'] = 'jl_user';
		$data['where'] = array ( 'user_name' => $user_id );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {return $rs[0];}
		return false;
	
	}

	/**
	 * 获取网站配置参数值
	 * @param String $siteParam
	 * @return boolean
	 */
	public function getSiteStat( $siteParam ){

		if (!isset ( $siteParam ) || empty ( $siteParam )) {return false;}
		$data = array ();
		$data['select'] = array ( $siteParam );
		$data['from'] = 'jl_config';
		$data['where'] = array ( 'id' => 1 );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {return $rs[0][$siteParam];}
		return false;
	
	}

	public function setSiteStat( $which , $stat ){

		if ( $which != 'welcomeon' && $which != 'loginon' && $which != 'userregon' ) {return false;}
		if ( $stat != '0' && $stat != '1' ) {return false;}
		$rs = $this->updateByCondition( 'jl_config' , array( $which => $stat ) , array( 'id' => 1 ) );
		if ($rs > 0) {
			return true;
		} else {
			return false;
		}
		
	}

}
?>