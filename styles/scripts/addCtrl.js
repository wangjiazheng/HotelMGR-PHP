/**
 * 按钮控制项目个数 CreatedBy: 王家峥 吉林大学软件研究生院
 */
function addFile() {
	var tb = document.getElementById("FileTable");
	var num = tb.rows.length;
	var row = tb.insertRow(num);
	var cell = row.insertCell();
	cell.innerHTML = "<input class='text-input file-input datepicker' type='file' name='item_file[]' id='item_file[]'/>";
	var FileNum = parseInt(document.getElementById("FileNum").value);
	FileNum = FileNum + 1;
	document.getElementById("FileNum").value = FileNum;
	if (FileNum == 3) {
		document.getElementById("FileButton").style.display = 'none';
	}
}

/**
 * 增加一个作者
 */
function addAuthor() {
	var tb = document.getElementById("AuthorTable");
	var num = tb.rows.length;
	var row = tb.insertRow(num);
	var cell = row.insertCell();
	var AuthorNum = parseInt(document.getElementById("AuthorNum").value);
	AuthorNum = AuthorNum + 1;
	document.getElementById("AuthorNum").value = AuthorNum;
	if (AuthorNum == 5) {
		document.getElementById("AuthorButton").style.display = 'none';
	}
	cell.innerHTML = "<p><label><font color=blue><b>作者姓名</b></font></label><input class=\"text-input medium-input datepicker\" type=\"text\" id=\"medium-input\" name=\"AuthorName"
			+ AuthorNum
			+ "\" /><label><font color=green><b>联系电话</b></font></label><input class=\"text-input medium-input datepicker\" type=\"text\" id=\"medium-input\" name=\"AuthorTel"
			+ AuthorNum + "\" /></p> ";
}
/**
 * 增加一个教师
 */
function addTecher() {
	var tb = document.getElementById("AuthorTable");
	var num = tb.rows.length;
	var row = tb.insertRow(num);
	var cell = row.insertCell();
	cell.innerHTML = "<p><label><font color=red><b>老师姓名</b></font></label><input class=\"text-input medium-input datepicker\" type=\"text\" id=\"medium-input\" name=\"TeacherName2\" ><label><font color=red><b>联系电话</b></font></label><input class=\"text-input medium-input datepicker\" type=\"text\" id=\"medium-input\" name=\"TeacherTel2\" /></p> ";
	document.getElementById("TecherButton").style.display = 'none';
}

/**
 * 功能：判断用户输入的邮箱格式是否正确 传参：无 返回值：true or false
 */
function form_check() {
	var email = document.getElementById("t4").value; // 获取邮箱地址
	// 判断邮箱格式是否正确
	if (!/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email)) {
		alert("邮箱格式错误!");
		document.getElementById("t4").focus(); // 让邮箱文本框获得焦点
		return false;
	}
	if ((document.getElementById("t1").value) == "") {
		alert("报名编号不能为空");
		document.getElementById("t1").focus(); // 让报名编号框获得焦点
		return false;
	}
	if ((document.getElementById("t2").value) == "") {
		alert("作者姓名不能为空");
		document.getElementById("t2").focus(); // 让作者姓名框获得焦点
		return false;
	}
	if (checkMobile(document.getElementById("t3").value) == false) {
		alert("作者联系电话(手机号)格式错误!");
		document.getElementById("t3").focus(); // 让作者联系电话文本框获得焦点
		return false;
	}
	if ((document.getElementById("t7").value) == "") {
		alert("作品名称不能为空");
		document.getElementById("t7").focus(); // 让作品名称框获得焦点
		return false;
	}
	return true;
}

/**
 * 功能：判断用户输入的手机号格式是否正确 传参：无 返回值：true or false
 */
function checkMobile(s) {
	var regu = /^[1][0-9][0-9]{9}$/;
	var re = new RegExp(regu);
	if (re.test(s)) {
		return true;
	} else {
		return false;
	}
}