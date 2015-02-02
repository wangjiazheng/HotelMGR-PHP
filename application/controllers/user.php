<?php
/**
 *
 * @abstract 用户操作登陆、注册类
 * @author WangJiazheng
 *        
 */
class User extends MY_Controller {

	private $data = array();
	
	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		$this->load->model ( 'User_model' );
		$this->load->helper ( 'url' );
		$this->data['title'] = WebSite_Static_Title;
	
	}

	/**
	 * 用户登陆
	 */
	public function login( $idf = '' ){

		if (!$this->isSiteOn () && $idf != 'adminideajl') {
			$this->load->view ( 'sitefix', $this->data );
		}  else {
			$this->load->helper ( 'form' );
			$this->load->view ( 'user/login', $this->data );
		}
	
	}

	/**
	 * 用户注册
	 */
	public function signup(){

		if (!$this->isSiteOn ( 'userregon' )) {
			$this->load->view ( 'sitefix', $this->data );
		} else {
			$this->load->helper ( array ( 'form' , 'url' ) );
			$this->load->library ( 'form_validation' );
			$this->load->view ( 'user/signup', $this->data );
		}
	
	}

	public function mypanel( $class = '' ){

		if ($this->checkLogin ()) {
			if ($class == '') {
				header ( "location:/notice/view/main" );
				exit ( 0 );
			}
			$this->data['username'] = $this->getUserName ();
			$this->data['class'] = $class;
			if ($this->isAdmin ()) { // 管理员登陆
				if ( $class == 'siteopen' ) { // 网站开关设置
					$this->data['welcon'] = $this->isSiteOn( 'welcomeon' );
					$this->data['siteon'] = $this->isSiteOn( 'loginon' );
					$this->data['userregon'] = $this->isSiteOn( 'userregon' );
				}
				$this->load->view ( 'user/admin_panel', $this->data );
			} else { // 普通用户
				if (!$this->isSiteOn ()){
					$this->jumpToLogin( '网站维护中' );
				}
				if ( $class == 'myinfo' ) { // 查看个人信息
					$this->data['schools'] = $this->User_model->getAllSchool ();
					if (!$this->data['schools']) {
						$this->jumpToFormer ( '获取学校列表错误' );
					}
					$this->data['info'] = $this->User_model->getPersonAllInfo ( $this->getUserID () );
					if (!$this->data['info']) {
						$this->jumpToFormer ( '获取个人信息错误' );
					}
				}
				$this->load->view ( 'user/user_panel', $this->data );
			}
		}
	
	}

	public function checkUserIDAndPWD(){

		if (!isset ( $_POST['username'] ) || empty ( $_POST['username'] ) || !isset ( $_POST['password'] ) || empty ( $_POST['password'] )) {
			$this->jumpToLogin ();
		}
		$user_id = $_POST['username'];
		if ($this->User_model->checkUserAndPwd ( $user_id, $_POST['password'] )) {
			$this->setLogin ( $user_id );
			echo "<script type=text/javascript>location.href='/user/mypanel';</script>";
		} else {
			$this->jumpToLogin ();
		}
	
	}

	public function logout(){

		$this->setLogin ( '', false );
		echo "<script type=text/javascript>location.href='/';</script>";
	
	}

	public function resetpwd(){

		if (!isset ( $_POST['passWord0'] ) || empty ( $_POST['passWord0'] ) || !isset ( $_POST['passWord1'] ) || empty ( $_POST['passWord1'] ) || !isset ( $_POST['passWord2'] ) || empty ( $_POST['passWord2'] )) {
			$this->jumpToFormer ();
		}
		$passWord0 = $_POST['passWord0'];
		$passWord1 = $_POST['passWord1'];
		if ( $passWord1 != $_POST['passWord2'] ) {
			$this->jumpToFormer ( '两次输入密码不一致' );
		}
		$rs = $this->User_model->setNewPwd ( $this->getUserID (), $passWord0, $passWord1 );
		if ($rs != false) {
			if ($rs > 0) {
				$this->jumpToFormer ( '密码修改成功' );
			} else {
				$this->jumpToFormer ();
			}
		} else {
			$this->jumpToFormer ( '原密码输入错误' );
		}
	
	}

	public function setSiteStat( $which , $stat ){

		if ($this->isAdmin ()) {
			if (($which != 'welcomeon' && $which != 'loginon' && $which != 'userregon') || ($stat != '0' && $stat != '1')) {
				$this->jumpToFormer ( '请求错误' );
			}
			$rs = $this->User_model->setSiteStat ( $which , $stat );
			$this->jumpToFormer ( $rs ? '设置成功' : '设置失败' );
		} else {
			$this->setLogin ( '', false );
			$this->jumpToLogin ( '您不是管理员，无权操作此选项！' );
		}
	
	}

}
?>