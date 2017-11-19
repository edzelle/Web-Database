Use cs_courses;

## 5 ##
## Assume each student has a list of courses they have taken and a degree ##
## Find the number of courses they need to take by adding all the requirements and the number of electives they need to finish ##
## Look at their major and subtract the credits from the total number of credits in the major ##
## Assume the student has taken CS 170, CS 171, CS 224 and CS 377 and has a major of Math/CS BS with 3 semesters remaining ##
## Graduation data will be calculated by using the semesters remaining ##

Delete From temp;
Insert into temp Values 
('CS 170'),
('CS 171'),
('CS 224'),
('CS 377');
Delete from study;
Insert into study values
('Computer Science / Mathematics', 'BS');
Delete from semester;
Insert into semester values
(3);
## Will they graduate on time given 3 semester and 4 courses per semeseter ##
## If the result is positive or 0, then  they will be able to graduate ##
## And the value returned is the number of classes they can take in addition to the cs/math classes they need to graduate on time##


Select 4*S - (RC + EC) from
## This gives me the number of electives left to take with a class list and a specified major ##
## Adds this number to the number of required classes left to take minus the numbher of required classes taken ##
(Select Count(Required_Course_Num) - RCT as RC from study, major, requirements, (Select Count(c) as RCT from temp, major, study, requirements
																		where m = field and degree = l and major.m_num = requirements.m_num and c =required_course_num) RCT		
where m=Field and l = degree and major.m_num = requirements.m_num) RC,
## Computes the number of Electives left to take #
(Select Elective_Num - Count(Elective_Num) as EC from study, temp, major, Electives
where m=Field and l = degree and major.M_num = Electives.M_Num and c = elective_course_Num) EC, (Select s from semester as S) S; 