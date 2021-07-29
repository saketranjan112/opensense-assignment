create db job_application;

use job_application;

create table submissions2(first_name varchar(20) not null, last_name varchar(20), email varchar(30) primary key, linkedin_profile varchar(50), drupal_profile varchar(50), position varchar(20), start_days varchar(20), mobile_no bigint not null, current_city varchar(20), city_name varchar(20), relocate varchar(10), last_company varchar(30), comments varchar(200), applied_on datetime default current_timestamp);