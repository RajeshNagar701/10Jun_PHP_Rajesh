<?php

class model
{
	public $conn="";
	function __construct()
	{						//hostname,username,pass,database name 
		$this->conn=new Mysqli('localhost','root','','railway');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel);  // query run on db
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	function select_join2($tbl1,$tbl2,$on)
	{
		$sel="select * from $tbl1 join $tbl2 on $on";  // query
		$run=$this->conn->query($sel);  // query run on db
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	function select_join3($tbl1,$tbl2,$on1,$tbl3,$on2)
	{
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2";  // query
		$run=$this->conn->query($sel);  // query run on db
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	function insert($tbl,$arr)
	{
		$column_arr=array_keys($arr);
		$column=implode(",",$column_arr);
		
		$values_arr=array_values($arr);
		$values=implode("','",$values_arr); 
		
		$sel="insert into $tbl ($column) value ('$values')";  // query
		$run=$this->conn->query($sel);  // query run on db
		return $run;
	}
	
}
$obj=new model

?>