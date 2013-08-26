<?php class Mdl_init extends CI_Model {


	function createTables(){

		$q1 = "CREATE TABLE app_users (
		 username varchar(30) primary key,
		 password varchar(255),
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






	function createIonAuthTables(){
		//
		// Table structure for table 'groups'
		//

		$q1 = "CREATE TABLE groups (
				  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
				  name varchar(20) NOT NULL,
				  description varchar(100) NOT NULL,
				  PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		//
		// Dumping data for table 'groups'
		//

		$q2 = "INSERT INTO groups (id, name, description) VALUES
				     (1,'admin','Administrator'),
				     (2,'members','General User');";



		//
		// Table structure for table 'users'
		//

		$q3 = "CREATE TABLE users (
				  id int(11) unsigned NOT NULL AUTO_INCREMENT,
				  ip_address varbinary(16) NOT NULL,
				  username varchar(100) NOT NULL,
				  password varchar(80) NOT NULL,
				  salt varchar(40) DEFAULT NULL,
				  email varchar(100) NOT NULL,
				  activation_code varchar(40) DEFAULT NULL,
				  forgotten_password_code varchar(40) DEFAULT NULL,
				  forgotten_password_time int(11) unsigned DEFAULT NULL,
				  remember_code varchar(40) DEFAULT NULL,
				  created_on int(11) unsigned NOT NULL,
				  last_login int(11) unsigned DEFAULT NULL,
				  active tinyint(1) unsigned DEFAULT NULL,
				  first_name varchar(50) DEFAULT NULL,
				  last_name varchar(50) DEFAULT NULL,
				  company varchar(100) DEFAULT NULL,
				  phone varchar(20) DEFAULT NULL,
				  PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";


		//
		// Dumping data for table 'users'
		//

		$q4 = "INSERT INTO users (id, ip_address, username, password, salt, email, activation_code, forgotten_password_code, created_on, last_login, active, first_name, last_name, company, phone) VALUES
				     ('1',0x7f000001,'administrator','59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4','9462e8eee0','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');";



		//
		// Table structure for table 'users_groups'
		//

		$q5 = "CREATE TABLE users_groups (
				  id int(11) unsigned NOT NULL AUTO_INCREMENT,
				  user_id int(11) unsigned NOT NULL,
				  group_id mediumint(8) unsigned NOT NULL,
				  PRIMARY KEY (id),
				  KEY fk_users_groups_users1_idx (user_id),
				  KEY fk_users_groups_groups1_idx (group_id),
				  CONSTRAINT uc_users_groups UNIQUE (user_id, group_id),
				  CONSTRAINT fk_users_groups_users1 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION,
				  CONSTRAINT fk_users_groups_groups1 FOREIGN KEY (group_id) REFERENCES groups (id) ON DELETE CASCADE ON UPDATE NO ACTION
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$q6 = "INSERT INTO users_groups (id, user_id, group_id) VALUES
				     (1,1,1),
				     (2,1,2);";




		//
		// Table structure for table 'login_attempts'
		//

		$q7 = "CREATE TABLE login_attempts (
				  id int(11) unsigned NOT NULL AUTO_INCREMENT,
				  ip_address varbinary(16) NOT NULL,
				  login varchar(100) NOT NULL,
				  time int(11) unsigned DEFAULT NULL,
				  PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		if($this->db->query($q1) && $this->db->query($q2) && $this->db->query($q3) && $this->db->query($q4) && $this->db->query($q5) && $this->db->query($q6) && $this->db->query($q7)){ 
			$response = true;
		}else{
			$response = false;
		}

		return $response;

	}


	function dropTablesIonAuth(){
		if($this->db->query("DROP TABLES IF EXISTS users_groups, login_attempts, groups, users")){
			$response = true;
		}else{
			$response = false;
		}
		return $response;
	}


	function deleteTables(){
		if($this->db->query("DROP TABLES IF EXISTS app_users, app_active_guests, app_banned_users, app_active_users")){
			$response = true;
		}else{
			$response = false;
		}
		return $response;
	}


}



