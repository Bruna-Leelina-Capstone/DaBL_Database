create database if not exists user;

use user;


create table if not exists users (
    user_name varchar(100) not null,
    uid varchar(20) not null primary key,
    previous_uid varchar(20),
    member_type char(30) not null,
    member_since datetime not null,
    last_access timestamp not null,
    waiver bit not null,
    series1pro bit not null,
    uprintseplus bit not null,
    jaguarvlx bit not null,
    bantamtools bit not null,
    pls475 bit not null,
    sewing bit not null,
	user_in_project bit not null,
	user_project_count int(2) not null
);

create table if not exists members (
    user_name varchar(100) not null,
    uid varchar(20) not null,
    member_type char(30) not null primary key,
    member_since datetime not null
);

create table if not exists tools (
    tool_name varchar(100) not null primary key,
	category varchar(30) not null,
	inventory int(5) not null,
	certification_count int(3) not null 
);
 
-- create table if not exists users_tools (
--     tool_Name varchar(100) not null primary key,
-- 	last_access timestamp,
--     user_Name varchar(100),
--     uid varchar(20) primary key
-- );

create table if not exists access_log (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime,
    uid varchar(20) primary key
);

create table if not exists bantamtools (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime
);

create table if not exists jaguarvlx (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime
);

create table if not exists pls475 (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime
);

create table if not exists series1pro (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime
);

create table if not exists sewing (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime
);

create table if not exists uprintseplus (
	user_name varchar(100),
    uid varchar(20) primary key,
	access_time datetime
);

create table if not exists workshops (
    workshop_name varchar(100) not null primary key,
	workshopid varchar(100) not null,
	workshop_date datetime,
	workshop_requests int(3),
	users_signedUp int(3) not null,
	users_attended int(3) not null
);

create table if not exists projects (
    project_name varchar(100) not null primary key,
	project_id varchar(20) not null,
	project_description text not null,
	project_status varchar(25) not null,
	user_name varchar(100) not null,
    uid varchar(20) not null primary key,
	start_date date,
	completed_date date,
	last_updated timestamp
);