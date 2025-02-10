<?php
include_once 'DB.php';
class ManageBD extends DB{
  /*public function getQueries(){

	$course = $this->connect()->query('SELECT * FROM course');
	$department =$this->connect()->query('SELECT * FROM department');
	$end=$this->connect()->query('SELECT * FROM end');
	$instructor=$this->connect()->query('SELECT * FROM instructor');
	$instructor_view=$this->connect()->query('SELECT * FROM instructor_view');
	$profesor=$this->connect()->query('SELECT * FROM profesor');
	$student=$this->connect()->query('SELECT * FROM student');
	$takes=$this->connect()->query('SELECT * FROM takes');
	$teaches=$this->connect()->query('SELECT * FROM teaches');
	$taylor_building=$this->connect()->query('SELECT * FROM taylor_building');
	$queries = array (
		"course"=>$course,
		"department"=>$department,
		"end"=>$end,
		"instructor"=>$instructor,
		"instructor_view"=>$instructor_view,
		"profesor"=>$profesor,
		"student"=>$student,
		"takes"=>$takes,
		"teaches"=>$teaches,
	    "taylor_building"=>$taylor_building
	);
	
		return $queries;
	
	}*/

	public function getQueries(){

		$union = $this->connect()->query('SELECT * from instructor where salary=68250 union select * from instructor where salary=90000');
		$queries = array (
			"union"=>$union
		);
		
			return $queries;
		
		}
}
?>