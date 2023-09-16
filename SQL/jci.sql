CREATE DATABASE JCI;

create table category(
    C_id int(3) AUTO_INCREMENT PRIMARY KEY,
    img varchar(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    C_text VARCHAR(255) NOT NULL
);

CREATE TABLE Project(
	P_id int(3) AUTO_INCREMENT PRIMARY KEY,
    P_titre varchar(50) NOT NULL ,
    
    P_text TEXT ,
    
    P_img varchar(255) NOT NULL,
    category_id INT(3) NOT NULL,
    Foreign Key (category_id) REFERENCES category(C_id)


);


CREATE TABLE UpcomingEvent(
    UE_id int(3) AUTO_INCREMENT PRIMARY KEY,
    E_nom varchar(255) NOT NULL,
    E_text varchar(255) NOT NULL,
    E_date varchar(255) NOT NULL,
    E_img varchar(255) NOT NULL

);

CREATE TABLE members(
    M_id int(3) AUTO_INCREMENT PRIMARY KEY,
    nom varchar(255) NOT NULL,
    prenom varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    Linkdin varchar(255) NOT NULL,
    role varchar(255) NOT NULL

);
CREATE Table contact(
    C_id int(3) AUTO_INCREMENT PRIMARY KEY ,
    Full_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phone varchar(255) NOT NULL,
    message TEXT NOT null
);
