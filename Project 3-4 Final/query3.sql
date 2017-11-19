Use cs_courses;

## 3 ##
## Assume the list of courses taken are CS 170, CS 171, MATH 111 and MATH 112 and the Major of Computer Scinece BA 
Delete from temp;
Insert into Temp Values
('CS 170'),
('CS 171'),
('MATH 111'),
('MATH 112');
Select distinct Required_Course_Num from major, requirements, temp
where Field = 'Computer Science' and Degree = 'BA'
								and Major.M_num = requirements.M_num
and Required_Course_Num not in (Select c from temp);
