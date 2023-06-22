CREATE DATABASE IF NOT EXISTS forum;
USE forum;
CREATE TABLE IF NOT EXISTS messageboard (
	msg_id int AUTO_INCREMENT,
	uuid text,
	reply_id int,
	msg_type char (5),
	msg_un varchar (50) NOT NULL,
	msg_top varchar (50),
	msg_cnt text NOT NULL,
	msg_date TIMESTAMP,
	PRIMARY KEY (msg_id)
);
select * from messageboard;