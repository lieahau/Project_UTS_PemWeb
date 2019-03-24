<?php
	class crud{
			
			public function __construct(){
				$this->db=new PDO ('mysql:host=localhost;dbname=facenote','root','');
			}
			public function insert($file,$field){
				$key=array_keys($field);
				$value="";
				$key2=implode(",",$key);
				foreach($field as $v){
					if($value==""){
						$value .= "'$v'";
					}else{
						$value .= ",". "'$v'";
					}
					echo($value."<br>");
				}
				$sql="insert into ".$file." ($key2) values($value)";	
				$query=$this->db->query($sql);
				print_r($sql);
				return 0;
				
			}
			public function tampil($file){
				$sql="select * from ".$file;
				$query=$this->db->query($sql);
				return $query;
			}
			public function tampilCond($file,$where,$conds){
				$key=$where['field'];
				$va=$where['value'];
				$sql="select * from ".$file." where ".$key." $conds '$va'";
				
				$query=$this->db->query($sql);
				
				return $query;
			}
			public function tampilSrc($file,$where){
				$key=$where['field'];
				$va=$where['value'];
				$sql="select * from ".$file." where ".$key." like '%$va%'";
				
				$query=$this->db->query($sql);
				
				return $query;
			}
			public function del($file,$field){
				$key2=$field['field'];
				$value=$field['value'];
				$sql="delete from ". $file ." where $key2=$value";	
				$query=$this->db->query($sql);
				
			}
			public function edit($file,$field,$where){
				$key=$where['field'];
				$va=$where['value'];
				$value=array_map(function($v,$k){
					return "{$k}='{$v}'";
				},$field,array_keys($field));
				$value2=implode(",",$value);
				$sql="update $file set $value2 where $key='$va'";
				$query=$this->db->query($sql);
				print_r($sql);
				
			}
			public function tampilinner($field,$file1,$file2,$kode,$kode2){
				$field2=implode(",",$field);
				$sql="select $field2 from $file1 inner join $file2 on $kode = $kode2";
				$query=$this->db->query($sql);
				return $query;
			}
			public function tampilinnerWhere($field,$file1,$file2,$kode,$kode2,$where){
				
				$key=$where['field'];
				$va=$where['value'];				
				$sql="select $field from $file1 inner join $file2 on $kode = $kode2 where $key=$va";
				$query=$this->db->query($sql);
				return $query;
			}
	}