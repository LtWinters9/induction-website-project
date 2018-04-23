-- Colleges
INSERT INTO college (collegeid,collegename,description,addressline1,town,postcode) VALUES ('PC01','Perth College','Our picturesque, leafy college on the outskirts of the city is a vibrant community of more than 9,000 students and 650 teaching and support staff.','Crieff Rd','Perth','PH1 2NX');
INSERT INTO college (collegeid,collegename,description,addressline1,town,postcode) VALUES ('IV01','Inverness College','Inverness College UHI is one of the largest partners of the University of the Highlands and Islands (UHI).   Through a partnership with 12 other colleges and internationally renowned research centres, we are making it easier for people to study high quality further and higher education across the region. Our vast selection of courses, from national certificates to post graduate degrees, are taught to over 6,500 full-time and part-time students','1 Inverness Campus','Inverness','IV2 5NA');

-- Locations
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('BB01','Brahan Building','Brahan building is the largest building at Perth College. It houses many different departments as well as a cafetria, coffee shop and snack shop.','PC01');
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('GB01','Goodlyburn Building','Goodlyburn building is a building that houses various wonderful things','PC01');
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('ASW01','Academy of Sport and Wellbeing','The Academy of Sport and Wellbeing is our brand new sport centre that has everything you need to get healthy','PC01');
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('WB01','Webster Building and Union-Link','Perth Colleges union resides here where you can chill out with your coursemates and drink coffee.(NO BEER AVAILABLE)','PC01');
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('DAE01','Dunne Aeronautical Laboratory','We are well known for our aeronatuical laboratory and here you will discovery all you need to know about aeroplane engineering','PC01');
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('ICP01','Inverness Campus','Our InvernessCampus is the main campus and is where the majority of our courses are delivered.','IV01');
INSERT INTO location (locationid,locationname,locationdes,collegeid) VALUES ('SSF01','Scottish School of Forestry','The stunning forested scenery of Viewhill, Balloch, is just seven miles from Inverness city centre. It is here, on a self-contained site, that our Scottish School of Forestry is based','IV01');

-- Courses
INSERT INTO course (courseid,coursename,coursedes) VALUES ('HNCCom','HNC Computing','Learn all there is to know about the computing world.');
INSERT INTO course (courseid,coursename,coursedes) VALUES ('HNDCom','HND Computer Science','Advance your skills and knowledge with computers and advance your coding skills.');
INSERT INTO course (courseid,coursename,coursedes) VALUES ('HNCHD','HNC Hairdressing','Lear how to cut hair');
INSERT INTO course (courseid,coursename,coursedes) VALUES ('HNCBA','HNC Business and Accounting','Learn all there is to know about Business and Accounting');
INSERT INTO course (courseid,coursename,coursedes) VALUES ('HNCSF','HNC Sport and Fitness','Learn all there is to know about sport and fitness');
INSERT INTO course (courseid,coursename,coursedes) VALUES ('HNDMgmt','HND Management','Advance your skills in management');


-- Students
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) VALUES (15011406,'Mr','Scott','Munsie','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','15011406@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) VALUES (083321,'Mr','David','Ferguson','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','083321@uhi.ac.uk',null,2,'HNDCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) VALUES (09012233,'Mr','Scott','Robertson','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','09012233@uhi.ac.uk',null,2,'HNCHD','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) VALUES (13004417,'Mr','Benjamin','Traill','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','13004417@uhi.ac.uk',null,2,'HNCSF','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) VALUES (65231354,'Mr','James','Jamieson','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','65231354@uhi.ac.uk',null,2,'HNCCom','IV01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid) VALUES (12345678,'Mr','Heather','Smith','1993-07-28','6 Drive Drive','Perth','PH1 9TY','07749056381','07749056381','12345678@uhi.ac.uk',null,2,'HNDMgmt','IV01');

-- Staff
INSERT INTO users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) VALUES (123,'Mr','Derek','Summers',null,'Derek@uhi.ac.uk','Derek is a great guy',3,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) VALUES (234,'Mr','Ian','Turnbull',null,'Ian@uhi.ac.uk','Ian is a great guy',3,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) VALUES (345,'Mr','Mike','Kula',null,'Mike@uhi.ac.uk','Mike is a great guy',3,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) VALUES (456,'Ms','Gillian','Douglas',null,'Gillian@uhi.ac.uk','Gillian is a great guy',3,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,email,bio,usertype,courseid,collegeid) VALUES (567,'Mr','Craig','Smith',null,'Craig@uhi.ac.uk','Craig is a great guy',3,'HNCCom','IV01');

-- Testers 1 - 10
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2211,'Mr','Tester','One','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2211@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2222,'Mrs','Tester','Two','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2222@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2233,'Ms','Tester','Three','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2233@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2244,'Mr','Tester','Four','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2244@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2255,'Ms','Tester','Five','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2255@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2266,'Mrs','Tester','Six','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2266@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2277,'Mr','Tester','Seven','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2277@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2288,'Ms','Tester','Eight','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2288@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2299,'Mrs','Tester','Nine','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2299@uhi.ac.uk',null,2,'HNCCom','PC01');
INSERT INTO users (userid,title,forename,surname,dob,addressline1,town,postcode,telephone,mobilephone,email,bio,usertype,courseid,collegeid)
  VALUES (2300,'Mr','Tester','Ten','1993-07-28','15 Earth Land','Perth','PH1 KTW','077490555','077490555','2300@uhi.ac.uk',null,2,'HNCCom','PC01');

--  Main Passwds
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (1,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',15011406);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (2,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',083321);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (3,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',09012233);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (4,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',13004417);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (5,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',65231354);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (6,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',12345678);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (7,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',123);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (8,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',234);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (9,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',345);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (10,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',456);
INSERT INTO userpass (passwordid,userpass,salt,userid) VALUES (11,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',234);

--  Tester Passwds
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (12,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2211);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (13,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2222);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (14,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2233);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (15,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2244);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (16,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2255);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (17,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2266);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (18,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2277);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (19,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2288);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (20,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2299);
INSERT INTO userpass (passwordid,userpass,salt,userid)
  VALUES (21,'ad98e978a7c2921ab4c3ab2194445c544f51d412963d7ab6d61c3c9a48f418db','2a8a23ab94ab1695f09ce4a622b742e5',2300);




-- Modules
INSERT INTO module (moduleid,modulename,moduledes,courseid) VALUES ('TW01','Team Working in Computing','Learn how to work as a team','HNCCom');
INSERT INTO module (moduleid,modulename,moduledes,courseid) VALUES ('SQL01','SQL: Introduction','Learn how to create SQL databases','HNCCom');
INSERT INTO module (moduleid,modulename,moduledes,courseid) VALUES ('DS01','Developing Software: Introduction','Learn how to code','HNCCom');
INSERT INTO module (moduleid,modulename,moduledes,courseid) VALUES ('GU01','Graded Unit 1','Examination on what you have learned','HNCCom');

-- Blog
INSERT INTO mainblog (title,blogtext,blogtime,blogposter,collegeid) VALUES ('Main Blog Entry Number 1 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',15011406,'PC01');
INSERT INTO mainblog (title,blogtext,blogtime,blogposter,collegeid) VALUES ('Main Blog Entry Number 2 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-15 23:11:11',083321,'PC01');
INSERT INTO mainblog (title,blogtext,blogtime,blogposter,collegeid) VALUES ('Main Blog Entry Number 3 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-16 23:11:11',15011406,'PC01');
INSERT INTO mainblog (title,blogtext,blogtime,blogposter,collegeid) VALUES ('Main Blog Entry Number 4 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-17 23:11:11',083321,'PC01');


INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',15011406,1);
INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',15011406,2);
INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',15011406,3);
INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',15011406,1);
INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',083321,2);
INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',083321,4);
INSERT INTO mainblogcom (commenttext,blogtime,userid,mainblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',083321,3);



INSERT INTO courseblog (title,blogtext,blogtime,blogposter,courseid,collegeid) VALUES ('Course Blog Entry Number 1 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-14 23:11:11',15011406,'HNCCom','PC01');
INSERT INTO courseblog (title,blogtext,blogtime,blogposter,courseid,collegeid) VALUES ('Course Blog Entry Number 2 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-15 23:11:11',083321,'HNCCom','PC01');
INSERT INTO courseblog (title,blogtext,blogtime,blogposter,courseid,collegeid) VALUES ('Course Blog Entry Number 3 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-16 23:11:11',15011406,'HNDCom','PC01');
INSERT INTO courseblog (title,blogtext,blogtime,blogposter,courseid,collegeid) VALUES ('Course Blog Entry Number 4 Heading','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue a urna nec pharetra. Maecenas et felis ipsum. Donec mattis lacus orci, quis hendrerit nibh blandit at.','2014-04-17 23:11:11',083321,'HNDCom','PC01');


INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,1);
INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,2);
INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,3);
INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,1);
INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,2);
INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,4);
INSERT INTO courseblogcom (commenttext,blogtime,userid,courseblogid) VALUES ('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2014-04-14 23:11:11',09012233,3);


-- Bookings
INSERT INTO booking (bookdate,booktime,advisor,booked) VALUES ('2018-04-03','13:00:00','Derek','N');
INSERT INTO booking (bookdate,booktime,advisor,booked) VALUES ('2018-04-10','13:00:00','Derek','N');
INSERT INTO booking (bookdate,booktime,advisor,booked) VALUES ('2018-04-17','13:00:00','Derek','N');
INSERT INTO booking (bookdate,booktime,advisor,booked) VALUES ('2018-03-30','13:00:00','Russell','N');
INSERT INTO booking (bookdate,booktime,advisor,booked) VALUES ('2018-04-06','13:00:00','Russell','N');
INSERT INTO booking (bookdate,booktime,advisor,booked) VALUES ('2018-04-13','13:00:00','Russell','N');

COMMIT;
