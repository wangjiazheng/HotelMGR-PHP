<?php
if (!defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
/**
 *
 * @abstract 我的控制器基类
 * @author WangJiazheng
 *        
 */
class MY_Controller extends CI_Controller {

	protected $_param = null;

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		// 启动会话，这步必不可少
		if (!isset ( $_SESSION )) {
			session_start ();
		}
	
	}

	public function checkLogin(){
		// 判断是否登陆
		if (isset ( $_SESSION['login'] ) && $_SESSION['login'] === true) {
			return true;
		} else {
			// 验证失败，将 $_SESSION['login'] 置为 false
			$_SESSION['login'] = false;
			$_SESSION['user_id'] = null;
			echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
			echo "<script type=text/javascript>alert('您还没有登陆呢！');location.href='/user/login';</script>";
			exit ();
		}
	
	}

	public function setLogin( $user_id = '' , $login = true ){

		if ($login) {
			if (!isset ( $user_id ) || empty ( $user_id )) {return false;}
			// 注册登陆成功的 admin 变量，并赋值 true
			$_SESSION['login'] = true;
			$_SESSION['user_id'] = $user_id;
		} else {
			$_SESSION['login'] = null;
			$_SESSION['user_id'] = null;
		}
	
	}

	public function isAdmin(){

		if ($this->checkLogin ()) {
			$user_id = $_SESSION['user_id'];
			if ($user_id == Admin_Manage_Account) { 
				return true;
			} else {
				return false;
			}
		}
	
	}

	public function getUserName(){

		if ($this->checkLogin ()) {
			$user_id = $_SESSION['user_id'];
			$this->load->model ( 'User_model' );
			return $this->User_model->getUserNameByUserID ( $user_id );
		}
	
	}

	public function getUserID(){

		if ($this->checkLogin ()) {
			$user_id = $_SESSION['user_id'];
			return $user_id;
		}
	
	}

	/**
	 * 判断网站是否是打开状态
	 * @return boolean
	 */
	public function isSiteOn( $which = 'loginon' ){

		if (!isset ( $which ) || empty ( $which ) || ($which != 'loginon' && $which != 'welcomeon' && $which != 'userregon')) {return false;}
		$this->load->model ( 'User_model' );
		$siteon = $this->User_model->getSiteStat ( $which );
		if (!$siteon || $siteon == '0') {
			return false;
		} else {
			return true;
		}
	
	}
	
	public function jumpToLogin( $info ='登陆失败' ){
	
		if ( $info == '' ) {
			$info ='登陆失败';
		}
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
		echo "<script type=text/javascript>alert('" . $info . "');location.href='/user/login';</script>";
		exit ();
	
	}
	
	public function jumpToFormer( $info ='信息错误' ){
	
		if ( $info == '' ) {
			$info ='信息错误';
		}
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
		echo "<script type=text/javascript>alert('" . $info . "');location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
		exit ();
	
	}

	public function getDateFromDatetime( $datetime ){

		if (!isset ( $datetime ) || empty ( $datetime )) {return false;}
		return date ( "Y-m-d", strtotime ( $datetime ) );
	
	}

	public function getShortTitle( $oldTitle ){

		if (!isset ( $oldTitle ) || empty ( $oldTitle )) {return false;}
		if (mb_strlen ( $oldTitle ) <= 15) {
			return $oldTitle;
		} else {
			$newTitle = mb_substr ( $oldTitle, 0, 14 );
			return $newTitle . '...';
		}
	
	}

}