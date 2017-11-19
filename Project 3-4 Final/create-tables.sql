Drop Database CS_Courses;
Create Schema CS_Courses;

Use CS_Courses;

Create Table Course
(
Course_Num char(10),
Title char(50),
Credits Integer,
Department char(50),
Level Integer,
Constraint Course_PK primary key(Course_Num)
);

Create Table Prerequisite
(
Course_Num char(10),
Prereq_Course_Num char(10),
Fake int,
Constraint Prerequisite_PK primary key(Course_Num, Prereq_Course_Num),
Constraint Prerequisite_FK1 foreign key(Course_Num) references Course(Course_Num),
Constraint Prerequisite_FK2 foreign key(Prereq_Course_Num) references Course(Course_Num)
);

Create Table Major
(
M_num Int,
Field char(30),
Degree char(10),
credits int,
Elective_Num int,
Constraint Major_PK primary key(M_num)
);

Create Table Requirements
(
M_num Int,
Required_Course_Num char(10),
fake int,
Constraint Major_Reqs_PK primary key(M_num, Required_Course_Num),
Constraint Major_Reqs_FK foreign key(Required_Course_Num) references Course(Course_Num),
Constraint Major_Reqs_FK2 foreign key(M_num) references Major(M_num)
);

Create Table Electives
(
M_num Int,
Elective_Course_Num char(10),
fake int,
Constraint Major_Electives_PK primary key(M_num, Elective_Course_Num),
Constraint Major_Electives_FK foreign key(Elective_Course_Num) references Course(Course_Num),
Constraint Major_Electives_FK2 foreign key(M_num) references Major(M_num)
);

Create Table Course_Offered
(
Course_Num char(10),
Season char(1),
Constraint Course_Offered_PK primary key(Course_Num, Season),
Constraint Course_Offered_FK foreign key(Course_Num) references Course(Course_Num)
);

Create table temp
(c char(20));

Create table study
(m char(50),
l char(10));

Create table semester
(s int);