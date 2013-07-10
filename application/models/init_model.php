<?php class Init_model extends CI_Model
{


	function createTables(){

		$q1 = "CREATE TABLE app_users (
		 username varchar(30) primary key,
		 password varchar(32),
		 userid varchar(32),
		 userlevel tinyint(1) unsigned not null,
		 email varchar(50),
		 timestamp int(11) unsigned not null,
		 email_confirmed tinyint(1)
		);";

		$q2 = "CREATE TABLE app_active_users (
		 username varchar(30) primary key,
		 timestamp int(11) unsigned not null
		);";

		$q3 = "CREATE TABLE app_active_guests (
		 ip varchar(15) primary key,
		 timestamp int(11) unsigned not null
		);";

		$q4 = "CREATE TABLE app_banned_users (
		 username varchar(30) primary key,
		 timestamp int(11) unsigned not null
		);";	
		
		if($this->db->query($q1) && $this->db->query($q2) && $this->db->query($q3) && $this->db->query($q4)){ 
			$response = true;
		}else{
			$response = false;
		}

		return $response;
	}
}