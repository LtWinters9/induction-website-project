drop table if exists booking;
drop table if exists courseblogcom;
drop table if exists courseblog;
drop table if exists mainblogcom;
drop table if exists mainblog;
drop table if exists module;
drop table if exists userpass;
drop table if exists users;
drop table if exists course;
drop table if exists location;
drop table if exists college;



create table college (
	collegeid      varchar(6) unique not null,
  collegename    varchar(40),
  description    varchar(1000),
  addressline1   varchar(50),
  town		  		 varchar(30),
	postcode       varchar(8),
  primary key (collegeid)
) engine=innodb default character set=utf8;

create table location (
	locationid		varchar(6) unique not null,
  locationname	varchar(50),
  locationdes		varchar(1000),
  collegeid			varchar(6),
  primary key (locationid),
  foreign key (collegeid) references college (collegeid)
) engine=innodb default character set=utf8;


create table course (
	courseid			varchar(8) unique not null,
  coursename		varchar(30),
  coursedes			varchar(1000),
  primary key (courseid)
) engine=innodb default character set=utf8;


create table users (
	userid				int(8) unique not null,
    title 				varchar(6),
	forename			varchar(30),
	surname				varchar(30),
	dob					date,
	addressline1		varchar(50),
    addressline2		varchar(50),
	town				varchar(30),
	postcode			varchar(8),
	telephone			varchar(12),
    mobilephone			varchar(13),
	email				varchar(40),
	bio					varchar(1000),
  usertype			int(1) not null default 2,
  sessionid			varchar(64),
  courseid			varchar(8),
  collegeid 		varchar(6),
  primary key (userid),
  foreign key (courseid) references course (courseid),
  foreign key (collegeid) references college (collegeid)
) engine=innodb default character set=utf8;



create table userpass (
	passwordid	int(10) unique not null,
  userpass		char(64) not null,
	salt				char(32) not null,
  userid			int(8),
	primary key (passwordid),
  foreign key (userid) references users (userid)
) engine=innodb default character set=utf8;



create table module (
	moduleid		varchar(8) unique not null,
  modulename	varchar(100),
  moduledes		varchar(1000),
  courseid		varchar(8),
  primary key (moduleid),
  foreign key (courseid) references course (courseid)
) engine=innodb default character set=utf8;

create table mainblog (
	mainblogid	int(5) not null auto_increment,
	title				varchar(40),
	blogtext		text,
	blogtime		timestamp default current_timestamp,
	userposter	int(8),
  collegeid		varchar(6),
	primary key(mainblogid),
	foreign key(userposter) references users (userid),
  foreign key(collegeid) references college (collegeid)
) engine=innodb default character set=utf8;

create table mainblogcom (
	mbcid				int(10) not null auto_increment,
  commenttext	text,
  blogtime		timestamp default current_timestamp,
  userid			int(8),
  mainblogid	int(5),
  primary key (mbcid),
  foreign key (userid) references users (userid),
  foreign key (mainblogid) references mainblog (mainblogid)
) engine=innodb default character set=utf8;


create table courseblog (
	courseblogid	int(5) not null auto_increment,
	title					varchar(40),
	blogtext			text,
	blogtime			timestamp default current_timestamp,
	userposter		int(8),
  courseid			varchar(8),
  collegeid			varchar(6),
	primary key (courseblogid),
	foreign key (userposter) references users (userid),
  foreign key (courseid) references course (courseid),
  foreign key (collegeid) references college (collegeid)
) engine=innodb default character set=utf8;

create table courseblogcom (
	cbcid					int(10) not null auto_increment,
  commenttext		text,
  blogtime			timestamp default current_timestamp,
  userid				int(8),
  courseblogid	int(5),
  primary key (cbcid),
  foreign key (userid) references users (userid),
  foreign key (courseblogid) references courseblog (courseblogid)
) engine=innodb default character set=utf8;


create table booking (
	bookingid	int(5) not null auto_increment,
    bookdate	date,
    booktime	time,
    advisor		varchar(20),
    booked		boolean,
    userid		int(8),
    primary key (bookingid),
    foreign key (userid) references users (userid)
    )engine=innodb default character set=utf8;

