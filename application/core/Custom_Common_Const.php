<?php
/**
 * @abstract Common Const Definition
 * @author WangJiazheng
 *
 */
class Custom_Common_Const{
	
	//具体错误码
	const STATUS_SUCCESS			= 0;	//成功
	const STATUS_FAILURE	    	= 1;	//参数错误
	
	const CODE_UERNAME_ERROR 			= '1000'; //用户名不存在
	
	static  $code= array(
			self::CODE_UERNAME_ERROR => '用户名不存在',
	);

}


?>