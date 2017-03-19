CREATE DATABASE NgomaMusic;
USE NgomaMusic;

CREATE TABLE Users (
userID int NOT NULL UNIQUE,
first_name varchar(20),
last_name varchar(20),
email varchar(20),
PRIMARY KEY (userID)
);

CREATE TABLE Listeners (
userID INT NOT NULL UNIQUE,
username varchar (20),
password varchar(20),
PRIMARY KEY (userID)
);

CREATE TABLE Artists (
userID INT NOT NULL UNIQUE,
first_name varchar (20),
last_name varchar(20),
user_name varchar(20),
email varchar (20),
password varchar(20),
copyright varchar(20),
music_type varchar(20),
DOB datetime,
website varchar(20),
description varchar(20),
contact_no int,
fan_message varchar(20),
PRIMARY KEY (userID)
);

);
CREATE TABLE Enjoyments (
userID int NOT NULL UNIQUE,
songID INT NOT NULL UNIQUE,
african_region varchar (20),
ratings int
);

CREATE TABLE Song (
songID int NOT NULL UNIQUE,
song_name varchar (20),
song_artist varchar(20),
genre varchar (20),
album_name varchar (20),
release_date datetime,
record_label varchar (20),
PRIMARY KEY (songID)
);

CREATE TABLE Employee (
empID int NOT NULL UNIQUE,
first_name varchar (20),
last_name varchar(20),
employmentDate datetime,
gender varchar(20),
contact_no int (10),
role varchar(20),
PRIMARY KEY (empID)
);

CREATE TABLE Regular (
empID INT NOT NULL UNIQUE,
contract_term int,
supervisorName varchar(20),
PRIMARY KEY (empID)
);

CREATE TABLE Admins (
empID int NOT NULL,
email varchar(20),
user_name varchar(20),
password varchar(20),
PRIMARY KEY (empID)
);

CREATE TABLE Events (
eventID INT NOT NULL,
eventName varchar(20), 
date datetime,
location varchar(20),
time datetime,
event_type varchar (20),
ticketFee int,
address varchar(20),
link varchar (20),
poster varchar(20),
PRIMARY KEY (eventID)
);

CREATE TABLE FormRequest (
requestID INT NOT NULL,
empID INT NOT NULL,
userID INT NOT NULL,
first_name varchar (20),
last_name varchar(20),
email varchar (20),
message varchar(200),
PRIMARY KEY (requestID),
FOREIGN KEY (empID) references Employee (empID),
FOREIGN KEY (userID) references Users (userID)
);