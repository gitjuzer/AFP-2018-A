

CREATE SCHEMA `zh_project` DEFAULT CHARACTER SET utf8 ;

USE zh_project;

CREATE TABLE zh_project.users(
	id INT NOT NULL AUTO_INCREMENT, 
    username VARCHAR(50) NOT NULL, 
    password VARCHAR(200) NOT NULL, 
   
    email VARCHAR(250) NOT NULL,
    teacher bool default 0,
    teacherid varchar(200) ,
    active TINYINT NOT NULL DEFAULT 1, 
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP 
						ON UPDATE CURRENT_TIMESTAMP, 
	deleted_at DATETIME DEFAULT NULL, 
    created_by INT DEFAULT NULL, 
    updated_by INT DEFAULT NULL, 
    deleted_by INT DEFAULT NULL, 
    CONSTRAINT PK_users PRIMARY KEY(id),
    CONSTRAINT UQ_users_username UNIQUE(username)
);






create Table matekfeladatok(
id int not null auto_increment,
question varchar(200),
answer1  varchar(200),
answer2  varchar(200),
answer3  varchar(200),
answer4  varchar(200),
goodanswer int ,
 active TINYINT NOT NULL DEFAULT 1, 
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP 
						ON UPDATE CURRENT_TIMESTAMP, 
	deleted_at DATETIME DEFAULT NULL, 
    created_by INT DEFAULT NULL, 
    updated_by INT DEFAULT NULL, 
    deleted_by INT DEFAULT NULL, 
constraint pk_matek primary key(id)


);



create Table angolfeladatok(
id int not null auto_increment,
question varchar(200),
answer1  varchar(200),
answer2  varchar(200),
answer3  varchar(200),
answer4  varchar(200),
goodanswer int ,
 active TINYINT NOT NULL DEFAULT 1, 
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP 
						ON UPDATE CURRENT_TIMESTAMP, 
	deleted_at DATETIME DEFAULT NULL, 
    created_by INT DEFAULT NULL, 
    updated_by INT DEFAULT NULL, 
    deleted_by INT DEFAULT NULL, 
constraint pk_matek primary key(id)


);


create Table alapprogramozasfeladatok(
id int not null auto_increment,
question varchar(200),
answer1  varchar(200),
answer2  varchar(200),
answer3  varchar(200),
answer4  varchar(200),
goodanswer int ,
 active TINYINT NOT NULL DEFAULT 1, 
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP 
						ON UPDATE CURRENT_TIMESTAMP, 
	deleted_at DATETIME DEFAULT NULL, 
    created_by INT DEFAULT NULL, 
    updated_by INT DEFAULT NULL, 
    deleted_by INT DEFAULT NULL, 
constraint pk_matek primary key(id)


);


