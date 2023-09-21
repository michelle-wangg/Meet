drop table Posts CASCADE CONSTRAINTS;
drop table RSVPCommunity CASCADE CONSTRAINTS;
drop table RSVPGroup CASCADE CONSTRAINTS;
drop table IsPartOf CASCADE CONSTRAINTS;
drop table Profiles CASCADE CONSTRAINTS;
drop table CommunityEvent CASCADE CONSTRAINTS;
drop table GroupMeetup CASCADE CONSTRAINTS; 
drop table Community CASCADE CONSTRAINTS;

drop table ChatRoom CASCADE CONSTRAINTS;
drop table CommunityEvent_Venues CASCADE CONSTRAINTS;
drop table GroupMeetup_Venues CASCADE CONSTRAINTS;
drop table Community_Topic CASCADE CONSTRAINTS;
drop table circle CASCADE CONSTRAINTS;
drop table Account CASCADE CONSTRAINTS;




CREATE TABLE ChatRoom
	(RoomID	INT PRIMARY KEY,
	 Name		CHAR(80));


CREATE TABLE circle(
	GroupID 	INT PRIMARY KEY,
	Name 		CHAR(80),
	RoomID	INT,
	UNIQUE 	(RoomID),
    FOREIGN KEY (RoomID) REFERENCES ChatRoom(RoomID));


CREATE TABLE Account
	(Email		CHAR(80) PRIMARY KEY,
	 Password 	CHAR(80));


CREATE TABLE Profiles(
	UserID 		CHAR(80) PRIMARY KEY,
	Name 		CHAR(80),
	Faculty	 	CHAR(80),
	Pronouns 	CHAR(50), 
	Interest 	CHAR(100),
	Email 		CHAR(80) NOT NULL,
	Age 		INT,
	GroupID 	INT,
	BuddyID 	CHAR(80),
	UNIQUE (Email),
	FOREIGN KEY(BuddyID) REFERENCES Profiles,
    FOREIGN KEY(GroupID) REFERENCES circle,
    FOREIGN KEY(Email) REFERENCES Account ON DELETE CASCADE);

CREATE TABLE Posts(
	UserID 		CHAR(80),
	Caption 	CHAR(100),
	Mood 		CHAR(100), 
	PRIMARY KEY (UserID, Caption),
	FOREIGN KEY (UserID) REFERENCES Profiles ON DELETE CASCADE);



CREATE TABLE Community_Topic
	(Topic		CHAR(100) PRIMARY KEY,
	 Category	CHAR(80));

CREATE TABLE Community
	(CID		INTEGER PRIMARY KEY,
	 Name		CHAR(80),
    Topic		CHAR(100),
    FOREIGN KEY (Topic) REFERENCES Community_Topic(Topic));

CREATE TABLE CommunityEvent_Venues(
	Location 	CHAR(80) PRIMARY KEY,
	Delivery_Mode CHAR(80));
	
CREATE TABLE CommunityEvent(
	EventID 	INT PRIMARY KEY,
	Name 		CHAR(80),
	Event_Date 		DATE,
	Location 	CHAR(80) ,
	CID 		INT,
    UNIQUE (Name, event_Date, Location),
    FOREIGN KEY (Location) REFERENCES CommunityEvent_Venues(Location),
    FOREIGN KEY (CID) REFERENCES Community(CID));

CREATE TABLE GroupMeetup_Venues(
	Location 	CHAR(80) PRIMARY KEY,
	Delivery_Mode CHAR(80));

CREATE TABLE GroupMeetup(
	EventID 	INT PRIMARY KEY,
	Name 		CHAR(40),
	event_Date 	DATE,
	Location 	CHAR(80),
	GroupID 	INT,
    UNIQUE(Name, event_Date, Location),
    FOREIGN KEY (Location) REFERENCES GroupMeetup_Venues(Location),
    FOREIGN KEY (GroupID) REFERENCES circle(GroupID));

CREATE TABLE RSVPCommunity(
	EventID 	INT,
	ProfileID 	CHAR(80),
	PRIMARY KEY (EventID, ProfileID),
	FOREIGN KEY(EventID) REFERENCES CommunityEvent(EventID),
    FOREIGN KEY (ProfileID) REFERENCES Profiles(UserID) ON DELETE CASCADE);

CREATE TABLE RSVPGroup(
	EventID 	INT,
	ProfileID 	CHAR(80),
	PRIMARY KEY (EventID, ProfileID),
	FOREIGN KEY(EventID) REFERENCES GroupMeetup(EventID),
    FOREIGN KEY (ProfileID) REFERENCES Profiles(UserID) ON DELETE CASCADE);    

CREATE TABLE IsPartOf(
	CID 		INT,
	ProfileID 	CHAR(80),
	PRIMARY KEY (CID, ProfileID),
	FOREIGN KEY (CID) REFERENCES Community,
	FOREIGN KEY (ProfileID) REFERENCES Profiles(UserID) ON DELETE CASCADE);

-- insert statements 
INSERT INTO ChatRoom VALUES(1111, 'Sports Chat');
INSERT INTO ChatRoom VALUES(1112, 'Nature Chat');
INSERT INTO ChatRoom VALUES(1113, 'Cooking Chat');
INSERT INTO ChatRoom VALUES(1114, 'School Chat');
INSERT INTO ChatRoom VALUES(1115, 'Drawing Chat');

INSERT INTO circle VALUES(0001, 'Sports', 1111);
INSERT INTO circle VALUES(0002, 'Nature', 1112);
INSERT INTO circle VALUES(0003, 'Cooking', 1113);
INSERT INTO circle VALUES(0004, 'School', 1114);
INSERT INTO circle VALUES(0005, 'Drawing', 1115);

INSERT INTO Community_Topic VALUES('Fitness', 'Movement');
INSERT INTO Community_Topic VALUES('Environment', 'Outdoors');
INSERT INTO Community_Topic VALUES('Arts', 'School Faculty');
INSERT INTO Community_Topic VALUES('Science', 'School Faculty');
INSERT INTO Community_Topic VALUES('Engineering', 'School Faculty');

INSERT INTO Community VALUES(1001, 'Buff', 'Fitness');
INSERT INTO Community VALUES(1002,'Trees', 'Environment');
INSERT INTO Community VALUES(1003, 'Artsy', 'Arts');
INSERT INTO Community VALUES(1004, 'Sciece is cool', 'Science');
INSERT INTO Community VALUES(1005, 'Big Brains', 'Engineering');

INSERT INTO Account VALUES('chriswoojinlee@gmail.com', 'Woojin');
INSERT INTO Account VALUES('trevordang@gmail.com', 'WakeUpEarly');
INSERT INTO Account VALUES('ryangao@gmail.com', 'Lincoln#1');
INSERT INTO Account VALUES('edwardchong@gmail.com', 'WhatIsBreakfast');
INSERT INTO Account VALUES('alexwang@gmail.com', 'abcde');
INSERT INTO Account VALUES('maddiezhang@gmail.com', '12345');

INSERT INTO Profiles VALUES(1000,'Chris Woojin Lee', 'Science', 'he,him,his', 'Golf, Lasagna', 'chriswoojinlee@gmail.com', 20, 0001, NULL);
INSERT INTO Profiles VALUES(1001,'Trevor Dang', 'Engineering', 'he,him,his', 'Golf, Lacrosse', 'trevordang@gmail.com', 20, 0001, NULL);
INSERT INTO Profiles VALUES(1002,'Ryan Gao', 'Science', 'he,him,his', 'Badminton, School', 'ryangao@gmail.com', 19, 0001, NULL);
INSERT INTO Profiles VALUES(1003,'Edward Chong', 'Science', 'he,him,his', 'Badminton, School', 'edwardchong@gmail.com', 19, 0001, NULL);
INSERT INTO Profiles VALUES(1004,'Alex Wang', 'Forestry', 'they, them', 'Trees, Wood', 'alexwang@gmail.com', 19, 0002, NULL);
INSERT INTO Profiles VALUES(1005,'Maddie Zhang', 'Arts', 'she, her, hers', 'Trees, Environment', 'maddiezhang@gmail.com', 19, 0002, NULL);

INSERT INTO Posts VALUES(1000, 'I applied to another job', 'Neutral');
INSERT INTO Posts VALUES(1001, 'I love ATSC', 'Happy');
INSERT INTO Posts VALUES(1002, 'I miss Lincoln', 'Sad');
INSERT INTO Posts VALUES(1003, '320 is the best!', 'Excited');
INSERT INTO Posts VALUES(1004, 'I like hikes', 'Happy');

INSERT INTO CommunityEvent_Venues VALUES('Vancouver', 'in-person');
INSERT INTO CommunityEvent_Venues VALUES('UBC', 'in-person');
INSERT INTO CommunityEvent_Venues VALUES('Grouse Mountain', 'in-person');
INSERT INTO CommunityEvent_Venues VALUES('Zoom', 'online');
INSERT INTO CommunityEvent_Venues VALUES('Vancouver Convention Centre', 'in-person');

INSERT INTO CommunityEvent VALUES(1201, 'Marathon Sunday!', TO_DATE('2023-03-03','YYYY-MM-DD'), 'Vancouver', 1001);
INSERT INTO CommunityEvent VALUES(1202, 'Pilates with Bunnies', TO_DATE('2023-04-04','YYYY-MM-DD'), 'UBC', 1003);
INSERT INTO CommunityEvent VALUES(1203, 'Grouse Grind!', TO_DATE('2023-05-05','YYYY-MM-DD'), 'Grouse Mountain', 1002);
INSERT INTO CommunityEvent VALUES(1204, 'nwHacks Hackathon', TO_DATE('2023-01-14','YYYY-MM-DD'), 'UBC', 1004);
INSERT INTO CommunityEvent VALUES(1205, 'Halloween Social', TO_DATE('2023-10-31','YYYY-MM-DD'), 'UBC', 1003);
INSERT INTO CommunityEvent VALUES(1206, 'Christmas Social', TO_DATE('2023-10-31','YYYY-MM-DD'), 'Vancouver Convention Centre', 1005);

INSERT INTO GroupMeetup_Venues VALUES('Vancouver', 'in-person');
INSERT INTO GroupMeetup_Venues VALUES('UBC', 'in-person');
INSERT INTO GroupMeetup_Venues VALUES('Zoom', 'online');
INSERT INTO GroupMeetup_Venues VALUES('Life Science Institute', 'in-person');
INSERT INTO GroupMeetup_Venues VALUES('War Memorial Gymnasium', 'in-person');

INSERT INTO GroupMeetup VALUES(1301, 'Marathon Training!', TO_DATE('2023-03-01','YYYY-MM-DD'), 'Vancouver', 0001);
INSERT INTO GroupMeetup VALUES(1302, 'Petting Zoo', TO_DATE('2023-08-20','YYYY-MM-DD'), 'UBC', 0002);
INSERT INTO GroupMeetup VALUES(1303, 'Github Workshop', TO_DATE('2023-01-04','YYYY-MM-DD'), 'Zoom', 0004);
INSERT INTO GroupMeetup VALUES(1304, 'Intro to Java', TO_DATE('2023-03-03','YYYY-MM-DD'), 'Life Science Institute', 0004);
INSERT INTO GroupMeetup VALUES(1305, 'Volleyball Intramurals', TO_DATE('2023-03-03','YYYY-MM-DD'), 'War Memorial Gymnasium', 0001);

INSERT INTO RSVPCommunity VALUES(1201, 1000);
INSERT INTO RSVPCommunity VALUES(1202, 1000);
INSERT INTO RSVPCommunity VALUES(1203, 1000);
INSERT INTO RSVPCommunity VALUES(1204, 1000);
INSERT INTO RSVPCommunity VALUES(1205, 1000);
INSERT INTO RSVPCommunity VALUES(1206, 1000);

INSERT INTO RSVPCommunity VALUES(1201, 1001);
INSERT INTO RSVPCommunity VALUES(1202, 1001);
INSERT INTO RSVPCommunity VALUES(1203, 1001);
INSERT INTO RSVPCommunity VALUES(1204, 1001);
INSERT INTO RSVPCommunity VALUES(1205, 1001);
INSERT INTO RSVPCommunity VALUES(1206, 1001);
INSERT INTO RSVPCommunity VALUES(1202, 1002);
INSERT INTO RSVPCommunity VALUES(1203, 1005);

INSERT INTO RSVPGroup VALUES(1301, 1000);
INSERT INTO RSVPGroup VALUES(1301, 1001);
INSERT INTO RSVPGroup VALUES(1302, 1000);
INSERT INTO RSVPGroup VALUES(1302, 1002);
INSERT INTO RSVPGroup VALUES(1302, 1005);

INSERT INTO IsPartOf VALUES(1001, 1000);
INSERT INTO IsPartOf VALUES(1001, 1001);
INSERT INTO IsPartOf VALUES(1001, 1002);
INSERT INTO IsPartOf VALUES(1001, 1003);
INSERT INTO IsPartOf VALUES(1002, 1004);
INSERT INTO IsPartOf VALUES(1002, 1005);

COMMIT WORK;

