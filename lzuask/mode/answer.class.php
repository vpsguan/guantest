<?php
/*
 * mode/answer.php
 * 回答问题类 
 * 2012/8/18
 */
header("Content-Type: text/html; charset=UTF-8");//如有必要一定要设置成utf-8
class answermode{
	var $db;
	/*
	 * 通过QID获取所有回答信息
	 */
	function answerall($qid){
		$pass=DB_PRE.'ask_answer';
		$sql="SELECT * FROM $pass WHERE qid=$qid ORDER BY time DESC";
		$result=_query($sql);
		return $result;
	}
	/*
	 * 回答问题  提交函数
	 */
	function insertanswer($qid,$title,$content,$author,$authorid,$proposeid){
		$pass=DB_PRE.'ask_answer';
	//	$author=$login['lzuname'];
	//	$authorid=$login['lzuuid'];
		$time=time();
		$sql="INSERT INTO $pass(
			qid,
			title,
			author,
			authorid,
			questionid,
			time,
			content)
			VALUES(
			'{$qid}',
			'{$title}',
			'{$author}',
			'{$authorid}',
			'{$proposeid}',
			'{$time}',
			'{$content}'
			)";
		_query($sql);
		
		/*
		 * 用户回答数加1
		 */
		$pass=DB_PRE.'ask_user';
		$sql="SELECT answers FROM $pass WHERE uid='{$authorid}'";
		$result=_query($sql);
		$re=mysql_fetch_array($result);
		$answers=$re['answers']+1;
		$sql="UPDATE $pass SET answers='{$answers}' WHERE uid='{$authorid}'";
		_query($sql);
		/*
		 * 问题被回答数 加1
		 */
		$pass=DB_PRE.'ask_question';
		$sql="SELECT answers,views FROM $pass WHERE id='{$qid}'";
		$result=_query($sql);
		$re=mysql_fetch_array($result);
		$answers=$re['answers']+1;
		$views=$re['views']+1;
		$sql="UPDATE $pass SET answers='{$answers}',views='{$views}' WHERE id='{$qid}'";
		_query($sql);
	/*
	 * 给用户发送an_message
	 * 明确 已经有人回答 
	 */
	$pass=DB_PRE.'ask_an_message';
	$an_title="回答了你的问题";
	$sql="INSERT INTO $pass(
		from_id,
		from_name,
		to_id,
		title,
		q_id,
		q_title,
		time)
		VALUES(
		'{$authorid}',
		'{$author}',
		'{$proposeid}',
		'{$an_title}',
		'{$qid}',
		'{$title}',
		'{$time}'
		)";
	_query($sql);
	}
	/*
	 * 获取回答用户的信息
	 * 头像
	 * 回答数
	 * 提问数
	 */
	function answerinfo($authorid){
		$pass=DB_PRE.'ask_user';
		$sql="SELECT username,avatar,groupid,answers,adopts FROM $pass WHERE uid='{$authorid}'";
		$result=_query($sql);
		$re=mysql_fetch_array($result);
		return $re;
	}
	/*
	 * support aganist
	 */
	function answersupport($id,$support){
		$support++;
		$pass=DB_PRE.'ask_answer';
		$sql="UPDATE $pass SET support='{$support}' WHERE id='{$id}'";
		_query($sql);
	}
	function answeraganist($id,$aganist){
		$aganist++;
		$pass=DB_PRE.'ask_answer';
		$sql="UPDATE $pass SET against='{$aganist}' WHERE id='{$id}'";
		_query($sql);
	}
	/*
	 * views 浏览一次加1
	 */
	function addviews($qid){
		$pass=DB_PRE.'ask_question';
		$sql="SELECT views FROM $pass WHERE id='{$qid}'";
		$result=_query($sql);
		$re=mysql_fetch_array($result);
		$views=$re['views']+1;
		$sql="UPDATE $pass SET views='{$views}' WHERE id='{$qid}'";
		_query($sql);
	}
}
?>