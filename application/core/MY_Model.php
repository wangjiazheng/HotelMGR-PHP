<?php
if (!defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
/**
 *
 * @abstract 我的控制器基类
 * @author WangJiazheng
 *        
 */
class MY_Model extends CI_Model {

	protected $_param = null;

	/**
	 * 构造函数
	 */
	public function __construct(){

		parent::__construct ();
		$this->load->database ();
	
	}

	/**
	 * 根据条件返回SELECT的内容
	 * @param array() $data = array();
	 * 		$data['select'] = array();
	 * 		$data['from'] = '';
	 * 		$data['where'] = array ();
	 * 		$data['orderby'] = array ();
	 * 		$data['limit'] = array ( start , count );
	 * @return boolean
	 */
	public function selectByCondition( $data ){

		if (!isset ( $data ) || empty ( $data )) {return false;}
		if (empty ( $data['from'] )) {return false;}
		if (!isset ( $data['select'] ) || empty ( $data['select'] )) {
			$this->db->select ( '*' );
		} else {
			$select = '';
			$first = true;
			foreach ( $data['select'] as $selectItem ) {
				if ($first) {
					$select = ' ' . $selectItem . ' ';
					$first = false;
				} else {
					$select .= ',' . $selectItem . ' ';
				}
			}
			$this->db->select ( $select );
		}
		$this->db->from ( $data['from'] );
		if (!isset ( $data['where'] ) || empty ( $data['where'] )) {
			;
		} else {
			$this->db->where ( $data['where'] );
		}
		if (!isset ( $data['orderby'] ) || empty ( $data['orderby'] )) {
			;
		} else {
			foreach ( $data['orderby'] as $orderbyItem => $orderbyValue ) {
				$this->db->order_by ( $orderbyItem, $orderbyValue );
			}
		}
		if (!isset ( $data['limit'] ) || empty ( $data['limit'] )) {
			;
		} else {
			$this->db->limit(  $data['limit'][1] , $data['limit'][0] );
		}
		$query = $this->db->get ();
		return $query->result_array ();
	
	}
	
	/**
	 * 根据指定的内容执行UPDATE语句
	 * @param string $table
	 * @param array $data
	 * @param array $where
	 * @return boolean
	 */
	public function updateByCondition( $table , $data , $where ) {
		if ( !isset($table) || empty($table) ) {
			return false;
		}
		if ( !isset($data) || empty($data) ) {
			return false;
		}
		$this->db->where ( $where );
		$this->db->update ( $table , $data );
		return $this->db->affected_rows ();
	}
	
}