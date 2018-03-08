insert into college (collegeid,collegename,description,addressline1,town,postcode) VALUES ('PC01','Perth College','Our picturesque, leafy college on the outskirts of the city is a vibrant community of more than 9,000 students and 650 teaching and support staff.','Crieff Rd','Perth','PH1 2NX');
insert into college (collegeid,collegename,description,addressline1,town,postcode) VALUES ('IV01','Inverness College','Inverness College UHI is one of the largest partners of the University of the Highlands and Islands (UHI).   Through a partnership with 12 other colleges and internationally renowned research centres, we are making it easier for people to study high quality further and higher education across the region. Our vast selection of courses, from national certificates to post graduate degrees, are taught to over 6,500 full-time and part-time students','1 Inverness Campus','Inverness','IV2 5NA');


insert into location (locationid,locationname,locationdes,collegeid) values ('BB01','Brahan Building','Brahan building is the largest building at Perth College. It houses many different departments as well as a cafetria, coffee shop and snack shop.','PC01');
insert into location (locationid,locationname,locationdes,collegeid) values ('GB01','Goodlyburn Building','Goodlyburn building is a building that houses various wonderful things','PC01');
insert into location (locationid,locationname,locationdes,collegeid) values ('ASW01','Academy of Sport and Wellbeing','The Academy of Sport and Wellbeing is our brand new sport centre that has everything you need to get healthy','PC01');
insert into location (locationid,locationname,locationdes,collegeid) values ('WB01','Webster Building and Union-Link','Perth Colleges union resides here where you can chill out with your coursemates and drink coffee.(NO BEER AVAILABLE)','PC01');
insert into location (locationid,locationname,locationdes,collegeid) values ('DAE01','Dunne Aeronautical Laboratory','We are well known for our aeronatuical laboratory and here you will discovery all you need to know about aeroplane engineering','PC01');
insert into location (locationid,locationname,locationdes,collegeid) values ('ICP01','Inverness Campus','Our InvernessCampus is the main campus and is where the majority of our courses are delivered.','IV01');
insert into location (locationid,locationname,locationdes,collegeid) values ('SSF01','Scottish School of Forestry','The stunning forested scenery of Viewhill, Balloch, is just seven miles from Inverness city centre. It is here, on a self-contained site, that our Scottish School of Forestry is based','IV01');

insert into course (courseid,coursename,coursedes) values ('HNCCom','HNC Computing','Learn all there is to know about the computing world.');
insert into course (courseid,coursename,coursedes) values ('HNDCom','HND Computer Science','Advance your skills and knowledge with computers and advance your coding skills.');
insert into course (courseid,coursename,coursedes) values ('HNCHD','HNC Hairdressing','Lear how to cut hair');
insert into course (courseid,coursename,coursedes) values ('HNCBA','HNC Business and Accounting','Learn all there is to know about Business and Accounting');
insert into course (courseid,coursename,coursedes) values ('HNCSF','HNC Sport and Fitness','Learn all there is to know about sport and fitness');
insert into course (courseid,coursename,coursedes) values ('HNDMgmt','HND Management','Advance your skills in management');



insert into users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) values (15011406,'Mr','Scott','Munsie','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','15011406@uhi.ac.uk',null,2,'HNCCom','PC01');
insert into users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) values (083321,'Mr','David','Ferguson','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','083321@uhi.ac.uk',null,2,'HNDCom','PC01');
insert into users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) values (09012233,'Mr','Scott','Robertson','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','09012233@uhi.ac.uk',null,2,'HNCHD','PC01');
insert into users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) values (13004417,'Mr','Benjamin','Traill','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','13004417@uhi.ac.uk',null,2,'HNCSF','PC01');
insert into users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) values (65231354,'Mr','James','Jamieson','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','65231354@uhi.ac.uk',null,2,'HNCCom','IV01');
insert into users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) values (12345678,'Mr','Heather','Smith','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','12345678@uhi.ac.uk',null,2,'HNDMgmt','IV01');

insert into users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) values (123,'Mr','Derek','Summers',null,'Derek@uhi.ac.uk','Derek is a great guy',3,'HNCCom','PC01');
insert into users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) values (234,'Mr','Ian','Turnbull',null,'Ian@uhi.ac.uk','Ian is a great guy',3,'HNCCom','PC01');
insert into users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) values (345,'Mr','Mike','Kula',null,'Mike@uhi.ac.uk','Mike is a great guy',3,'HNCCom','PC01');
insert into users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) values (456,'Ms','Gillian','Douglas',null,'Gillian@uhi.ac.uk','Gillian is a great guy',3,'HNCCom','PC01');
insert into users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) values (567,'Mr','Craig','Smith',null,'Craig@uhi.ac.uk','Craig is a great guy',3,'HNCCom','IV01');

insert into userpass (passwordid,userpass,salt,userid) values (1,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',15011406);
insert into userpass (passwordid,userpass,salt,userid) values (2,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',083321);
insert into userpass (passwordid,userpass,salt,userid) values (3,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',09012233);
insert into userpass (passwordid,userpass,salt,userid) values (4,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',13004417);
insert into userpass (passwordid,userpass,salt,userid) values (5,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',65231354);
insert into userpass (passwordid,userpass,salt,userid) values (6,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',12345678);
insert into userpass (passwordid,userpass,salt,userid) values (7,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',123);
insert into userpass (passwordid,userpass,salt,userid) values (8,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',234);
insert into userpass (passwordid,userpass,salt,userid) values (9,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',345);
insert into userpass (passwordid,userpass,salt,userid) values (10,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',456);
insert into userpass (passwordid,userpass,salt,userid) values (11,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',234);




insert into module (moduleid,modulename,moduledes,courseid) values ('TW01','Team Working in Computing','Learn how to work as a team','HNCCom');
insert into module (moduleid,modulename,moduledes,courseid) values ('SQL01','SQL: Introduction','Learn how to create SQL databases','HNCCom');
insert into module (moduleid,modulename,moduledes,courseid) values ('DS01','Developing Software: Introduction','Learn how to code','HNCCom');
insert into module (moduleid,modulename,moduledes,courseid) values ('GU01','Graded Unit 1','Examination on what you have learned','HNCCom');


insert into mainblog (title,blogtext,blogtime,userposter,collegeid) values ('Main Blog Entry Number 1 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',15011406,'PC01');
insert into mainblog (title,blogtext,blogtime,userposter,collegeid) values ('Main Blog Entry Number 2 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',083321,'PC01');
insert into mainblog (title,blogtext,blogtime,userposter,collegeid) values ('Main Blog Entry Number 3 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',15011406,'PC01');
insert into mainblog (title,blogtext,blogtime,userposter,collegeid) values ('Main Blog Entry Number 4 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',083321,'PC01');


insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,1);
insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,2);
insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,3);
insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,1);
insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,2);
insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,4);
insert into mainblogcom (commenttext,blogtime,userid,mainblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,3);



insert into courseblog (title,blogtext,blogtime,userposter,courseid,collegeid) values ('Course Blog Entry Number 1 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',15011406,'HNCCom','PC01');
insert into courseblog (title,blogtext,blogtime,userposter,courseid,collegeid) values ('Course Blog Entry Number 2 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',083321,'HNCCom','PC01');
insert into courseblog (title,blogtext,blogtime,userposter,courseid,collegeid) values ('Course Blog Entry Number 3 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',15011406,'HNDCom','PC01');
insert into courseblog (title,blogtext,blogtime,userposter,courseid,collegeid) values ('Course Blog Entry Number 4 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',083321,'HNDCom','PC01');


insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,1);
insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,2);
insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,3);
insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,1);
insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,2);
insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,4);
insert into courseblogcom (commenttext,blogtime,userid,courseblogid) values ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,3);


insert into booking (bookdate,booktime,advisor,booked) values ('2018-03-08','12:00:00','Derek','N');
insert into booking (bookdate,booktime,advisor,booked) values ('2018-03-08','13:00:00','Derek','N');
insert into booking (bookdate,booktime,advisor,booked) values ('2018-03-08','14:00:00','Derek','N');
