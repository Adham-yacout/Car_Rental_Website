use car_rental_system;
CREATE TABLE  car(
    plate_no varchar(7) PRIMARY KEY,
	model varchar(250) not null,
  `year` date ,
  color varchar(250) not null,
    transmission varchar(250) not null ,
    
     office_id int ,
    image text 
);
CREATE TABLE  car_status(
    plate_no varchar(7) ,
    `status` varchar(250) not null ,
    `date` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`status`,`date`,plate_no)
);
CREATE TABLE  office(
    office_id int not null PRIMARY key AUTO_INCREMENT,
    location varchar(250) not null,
    name varchar(250) not null
);
use car_rental_system;
CREATE TABLE  reservation(
    reservation_id int not null ,
   plate_no varchar(7) ,
    payment_type varchar(250) not null,
    paidat  DATETIME DEFAULT CURRENT_TIMESTAMP,
    start_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    end_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    customer_ssn int ,
    PRIMARY KEY (customer_ssn, plate_no,start_date,reservation_id)
    
);

CREATE TABLE  customer(
    ssn int not null PRIMARY key AUTO_INCREMENT,
    name varchar(250) not null,
    email varchar(250) not null UNIQUE,
  	sex ENUM('F','M') NOT NULL,
    country varchar(250) not null,
   `password` varchar(250) not null
);
use car_rental_system;


ALTER TABLE car_status add FOREIGN key  (plate_no) REFERENCES car(plate_no);
ALTER TABLE reservation add FOREIGN key  (plate_no) REFERENCES car(plate_no);
ALTER TABLE car add FOREIGN key  (office_id) REFERENCES office(office_id);
ALTER TABLE reservation add FOREIGN key  (customer_ssn) REFERENCES customer(ssn);