<?php
if (!defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
/**
 *
 * @abstract 作品类模型
 * @author WangJiazheng
 *        
 */
class Work_model extends MY_Model {

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
	
	}

	/**
	 * 根据$user_name获取作品列表
	 * @param string $user_name
	 * @return boolean
	 */
	public function getWorkList( $user_name = '' ){

		if (!isset ( $user_name ) && empty ( $user_name )) {return false;}
		$data = array ();
		$data['select'] = array ( 'tsid' , 't1' , 't7' , 'tkind' , 'tsub' , 'tschool' , 't2' , 't5' , 't8' );
		$data['from'] = 'jl_zuopininfo';
		$data['where'] = array ( 'user_name' => $user_name );
		$data['orderby'] = array ( 't8' => 'desc' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs;
		}
		return false;
	
	}

	public function getNameBySchool( $id = '' ){
	
		if (!isset ( $id ) && empty ( $id )) {return false;}
		return $this->getValueByTableKeyCon( 'jl_school' , 'school_name' , array( 'id' => $id ) );
	
	}
	
	public function getNameByClass( $id = '' ){

		if (!isset ( $id ) && empty ( $id )) {return false;}
		return $this->getValueByTableKeyCon( 'jl_class' , 'class_name' , array( 'class_id' => $id ) );
	
	}

	public function getNameBySubject( $id = '' ){
	
		if (!isset ( $id ) && empty ( $id )) {return false;}
		return $this->getValueByTableKeyCon( 'jl_subject' , 'subject_name' ,array( 'subject_id' => $id ) );
	
	}

	public function getValueByTableKeyCon( $table = '' , $key = '' , $con ){

		if (!isset ( $table ) && empty ( $table ) || !isset ( $key ) || empty ( $key )) {return false;}
		$data = array ();
		$data['select'] = array ( $key );
		$data['from'] = $table;
		$data['where'] = $con;
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs[0][$key];
		}
		return false;
	
	}

	public function getAllClass(){

		$data = array ();
		$data['select'] = array ( 'id' , 'class_name' );
		$data['from'] = 'jl_class';
		$data['orderby'] = array ( 'show_order' => 'asc' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs;
		}
		return false;
	
	}

	public function getAllSubject(){

		$data = array ();
		$data['select'] = array ( 'id' , 'subject_name' );
		$data['from'] = 'jl_subject';
		$data['orderby'] = array ( 'show_order' => 'asc' );
		$rs = $this->selectByCondition ( $data );
		if ($rs) {
			return $rs;
		}
		return false;
	
	}

}
?>