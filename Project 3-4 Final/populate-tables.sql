Use cs_courses;

## Configure Course table ##
## Drops top row ##


Load data local infile "Course.csv" into table course fields terminated by ',';

Delete from course where Title = 'Fake Classes';


## Configures course_offered ##
## The top row get eliminated SQL automatically ##

Load data local infile "Course_Offered.csv" into table course_offered fields terminated by ',';


## Configures Major table ##
## Top row is fake and is dropped ##


Load data local infile "Major.csv" into table major fields terminated by ',';

Delete from Major where M_num = 0;


## Configures Prerequisite ##
## Drops last column of 0's ##


Load data local infile "Prerequisites.csv" into table prerequisite fields terminated by ',';

Alter Table prerequisite drop column fake;

## Configures Electives ## 
## Drops last column of 0's ##


Load data local infile "Electives.csv" into table electives fields terminated by ',';

Alter Table Electives drop column fake;

## Configures Requirements ## 
## Drops last column 0f 0's ##

Load data local infile "Requirements.csv" into table requirements fields terminated by ',';

Alter Table requirements drop column fake;


