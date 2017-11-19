Use cs_courses;

## 2 ##
## Given a course number, give it's prerequisites ##
## Assume the course given is CS 450 ##
Select Prereq_Course_Num from  prerequisite where Course_Num = 'CS 450';
## Assume the course given is MATH 315 ##
Select Prereq_Course_Num from prerequisite where Course_Num = 'MATH 315';