create table notes(
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(200),
content TEXT,
created_on INT(20),
modified_on INT(20),
platform VARCHAR(100),
synced INT(1),
tags VARCHAR(200),
color_tag VARCHAR(50),
location VARCHAR(200),
access VARCHAR(100),
notebook VARCHAR(100),
account_id VARCHAR(100),
PRIMARY KEY(id)
);

--///////////create accounts table/////////////////--
create table accounts(
account_id VARCHAR(100),
email VARCHAR(200),
password VARCHAR(100),
created_on INT(20),
firstname VARCHAR(60),
lastname VARCHAR(60),
PRIMARY KEY(account_id)
);


--////////////////////insert note //////////////////--
insert into notes(id,title,content,created_on,modified_on,platform,synced,tags,color_tag,location,access,notebook,account_id) VALUES(
null,"great app that i am developing here","the author of this app is impressed by the progress and performance so far",1470744971,1470745871,"web",0,"test","belize hole","chipinge","private","default","c6fa2427c9bdce92146d82a54c9c350d");

--////////////insert new account////////////////--
insert into accounts(account_id,email,password,created_on,firstname,lastname) VALUES(
"af152c456b2194ccd","jsingizi7@gmail.com","tafadzwa2175",142444351,"James","Singizi");