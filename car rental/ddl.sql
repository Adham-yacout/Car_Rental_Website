CREATE DATABASE car_rental_system;


use car_rental_system;
use car_rental_system;
CREATE TABLE  car(
    plate_no varchar(7) PRIMARY KEY,
	model varchar(250) not null,
  `year` date ,
  color varchar(250) not null,
    transmission varchar(250) not null ,
    `status` varchar(250) not null,
     office_id int ,
    image text 
);
CREATE TABLE  car_status(
    plate_no varchar(7) ,
    `status` varchar(250) not null PRIMARY key,
    date DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE  office(
    office_id int not null PRIMARY key,
    location varchar(250) not null,
    name varchar(250) not null
);
use car_rental_system;
CREATE TABLE  reservation(
    reservation_id int not null PRIMARY key,
   plate_no varchar(7) ,
    payment_type varchar(250) not null,
    paidat  DATETIME DEFAULT CURRENT_TIMESTAMP,
    start_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    end_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    customer_ssn int 
);

CREATE TABLE  customer(
    ssn int not null PRIMARY key,
    name varchar(250) not null,
    email varchar(250) not null UNIQUE,
  	sex ENUM('F','M') NOT NULL,
    country varchar(250) not null,
   `password` varchar(250) not null
);
use car_rental_system;

alter table reservation drop PRIMARY key ;
ALTER TABLE reservation add PRIMARY KEY (customer_ssn, plate_no,start_date,reservation_id);
ALTER TABLE car add FOREIGN key  (`status`) REFERENCES car_status(`status`);
ALTER TABLE reservation add FOREIGN key  (plate_no) REFERENCES car(plate_no);
ALTER TABLE car add FOREIGN key  (office_id) REFERENCES office(office_id);
ALTER TABLE reservation add FOREIGN key  (customer_ssn) REFERENCES customer(ssn);