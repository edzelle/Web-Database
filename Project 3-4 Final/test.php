
<html>
   <head>
   <title> Class Schedule</title>
   </head>
   <body>
      
   <H3>
   <HR>
   Here is a schedule organized by semester of the classes you need to graduate
   <HR>
   </H3>
   <P> 
   <UL>
      
   <?php
      
   $conn = @mysqli_connect("localhost", "cs377", "cs377_s17","CS_Courses");
      
   if (mysqli_connect_errno())            # -----------  check connection error
   {      
      printf("Connect failed: %s\n". mysqli_connect_error());
      exit(1);
   }      
      
      if ( ! ($r1 =   mysqli_query($conn, "Delete from temp;")))
      {
         printf("Error deleting temp: %\n", mysqli_error($conn));
      }
      if ( ! ($r2 = mysqli_query($conn, "Delete from study;")))
      {
         printf("Error deleting study: %\n", mysqli_error($conn));
      }
      
      $major = $_POST['major'];

      $major_d = $_POST['major_d'];

      if (empty ($_POST['major'])) {
      echo("Error no major entered");
      exit(1);
      } else if ( empty ($_POST['major_d'])){
      printf("Error major entered without degree");
      exit(1);
      } else {
      $major = $_POST['major'];
      $major_d = $_POST['major_d'];

      }

      if (! empty ($_POST['op_major'])) {
         if ( empty ($_POST['major_op_d'])){
         printf("Error major entered without degree");
         } else {
            $op_major = $_POST['op_major'];
            $major_op_d = $_POST['major_op_d'];
         }
      } else if (! empty ($_POST['major_op_d'])) {
        printf("Error entered degree without major");
      }
      
      if(! isset($op_major)){
      $add_major = "Insert into study values ('$major', '$major_d');";
      
      } else {
      $add_major = "Insert into study values ('$major','$major_d'),('$op_major','$major_op_d');";
    
      }



      
      
   if ( ! ( $result = mysqli_query($conn, $add_major)) )      # Execute query
   {      
      printf("Error: %s\n", mysqli_error($conn));
      printf("RIP");
      exit(1);
   }

$major_Num_query = "Select M_num from Major, study where Degree = d and Field  = m;";
  if (! ($major_Num = mysqli_query($conn, $major_Num_query))){
    printf("Error: %s\n", mysql_error($conn));
    exit(1);
  }



## Inserting Classes into temp


   if (! empty($_POST['CS_170'])){
      if ( ! ($cs170 =  mysqli_query($conn, "Insert into temp values ('CS 170');")))
      {
      printf("Error inserting class: %\n", mysqli_error($conn));
      }
   }



    if (! empty($_POST['CS_171'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 171')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_224'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 224')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_255'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 255')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['CS_323'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 323')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['CS_325'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 325')")))
      {
         printf("Error inserting class: %\n", mysqli_errir($conn));
      }
    }
  

    if (! empty($_POST['CS_329'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 329')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_355'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 355')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_370'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 370')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['CS_377'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 377')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }



    if (! empty($_POST['CS_378'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 378')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_424'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 424')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_450'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 450')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['CS_452'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 452')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }



    if (! empty($_POST['CS_453'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 453')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_455'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 455')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }


    if (! empty($_POST['CS_456'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('CS 456')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_111'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 111')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_112'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 112')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_211'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 211')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_212'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 212')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_221'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 221')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_250'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 250')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_270'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 270')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_315'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 315')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_318'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 318')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_321'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 321')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_328'])){
      if ( ! ($cs170 =   mysqli_query($conn, "Insert into temp values ('MATH 328')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_330'])){
      if ( ! ($MATH_330 =   mysqli_query($conn, "Insert into temp values ('MATH 330')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_344'])){
      if ( ! ($MATH_344 =   mysqli_query($conn, "Insert into temp values ('MATH 344')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_345'])){
      if ( ! ($MATH_345 =   mysqli_query($conn, "Insert into temp values ('MATH 345')")))
      {
      printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_346'])){
      if ( ! ($MATH_346 =   mysqli_query($conn, "Insert into temp values ('MATH 346')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_347'])){
      if ( ! ($MATH_347 =   mysqli_query($conn, "Insert into temp values ('MATH 347')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_351'])){
      if ( ! ($MATH_351 =   mysqli_query($conn, "Insert into temp values ('MATH 351')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_352'])){
      if ( ! ($MATH_352 =   mysqli_query($conn, "Insert into temp values ('MATH 352')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_361'])){
      if ( ! ($MATH_361 =   mysqli_query($conn, "Insert into temp values ('MATH 361')")))
      {
      printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_362'])){
      if ( ! ($MATH_362 =   mysqli_query($conn, "Insert into temp values ('MATH 362')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_411'])){
      if ( ! ($MATH_411 =   mysqli_query($conn, "Insert into temp values ('MATH 411')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_412'])){
      if ( ! ($MATH_412 =   mysqli_query($conn, "Insert into temp values ('MATH 412')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_421'])){
      if ( ! ($MATH_421 =   mysqli_query($conn, "Insert into temp values ('MATH 421')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_422'])){
      if ( ! ($MATH_422 =   mysqli_query($conn, "Insert into temp values ('MATH 422')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

    if (! empty($_POST['MATH_425'])){
      if ( ! ($MATH_425 =   mysqli_query($conn, "Insert into temp values ('MATH 425')")))
      {
         printf("Error inserting class: %\n", mysqli_error($conn));
      }
    }

     if (empty ($_POST['next_year'])) {
      echo("Current year not entered");
      exit(1);
      } 
$next_year = $_POST['next_year'];
      
      if (empty ($_POST['next_Fall'])) {
        if (empty ($_POST['next_Spring'])) {
      echo("Current season not entered");
      exit(1);
    }
      $next_season= $_POST['next_Spring'];
      $n = 0;
      } else {
      $next_season = $_POST['next_Fall'];
      $n = 1;
      }
      
 if (empty ($_POST['g_year'])) {
      echo("Graduation year not entered");
      exit(1);
      } 

$g_year = $_POST['g_year'];
      

      if (! (empty ($_POST['next_Fall']))) {
        if(! (empty ($_POST['next_Spring']))) {
          print("Error: Two values entered for season");
          exit(1);
        }     
      }

      if (! (empty ($_POST['g_Fall']))) {
        if(! (empty ($_POST['g_Spring']))) {
          print("Error: Two values entered for season");
          exit(1);
        }     
      }

      if (empty ($_POST['g_Fall'])) {
        if (empty ($_POST['g_Spring'])) {
      echo("Graduation season not entered");
      exit(1);
      }
      $g_season= $_POST['g_Spring'];
      $g = 0;
      } else {
      $g_season = $_POST['g_Fall'];
      $g = 1;
      }


      $c_year = (int)$next_year;
      $gr_year = (int)$g_year;
      $diff_year = $gr_year - $c_year;

      if ($n == $g){
      $semesters = 1+ 2*$diff_year;
     
      } else if ($n == 1 and $g == 0){
      $semesters =  2*$diff_year;
      
      } else {
        $semesters = 2 + 2*$diff_year;
       
      }

if ($diff_year == 0 and $g==1 and $n == 0) {
    printf("Graduation date impossible");
    exit(1);
}

if ($diff_year < 0) {
  printf("Graduation date impossible");
  exit(1);
}




$Num_Electives_Remaining_query1 = "Select c from temp, study, Major where d = Degree and m = Field and c in (Select Elective_Course_Num from Electives where Major.M_num = Electives.M_num);";

$Num_Electives_Remaining_query2 = "Select Elective_Num from Major, study where d = Degree and m = Field;";

$Num_Electives_For_Majors_query = "Select E - T from
(Select Elective_Num as E from Major, study where Degree = d and Field = m) E, 
(Select Count(Elective_Course_Num) as T from Major, Electives, study 
where Degree = d and Field = m and Major.M_num = Electives.M_num and Elective_Course_Num in (Select c from temp)) T;";

$Num_Electives_For_Major1_query = "Select E - T from
(Select Elective_Num as E from Major, (Select * from study order by d limit 1) S1 where Degree = d and Field = m) E, 
(Select Count(Elective_Course_Num) as T from Major, Electives, (Select * from study order by d limit 1) S
where Degree = d and Field = m and Major.M_num = Electives.M_num and Elective_Course_Num in (Select c from temp)) T;";

$Num_Courses_Taken_query = "Select Count(c) as RCT from temp, Major, study, Requirements
where m = Field and Degree = d and Major.M_num = Requirements.M_num and c =Required_Course_Num;";


$Required_Courses_Remaining_query= "Select Course.Course_Num from Course where Course.Course_Num in (Select Required_Course_Num from Major, Requirements, study where m=Field and d = Degree and Major.M_num = Requirements.M_num) and Course.Course_Num not in (Select c from temp, Major, study, Requirements where m = Field and Degree = d and Major.M_num = Requirements.M_num and c = Required_Course_Num) order by Level;";

if (! ($Num_Req_Courses_Taken = mysqli_query($conn, $Num_Courses_Taken_query)))
{
  printf("Error in query %\n", mysqli_error($conn));
} 


if(!($Num_Electives_For_Majors = mysqli_query($conn, $Num_Electives_For_Majors_query))){
  printf("Error in Elective_Num query %\n", mysqli_error($conn));
}

if(!($Num_Electives_For_Major1 = mysqli_query($conn, $Num_Electives_For_Major1_query))){
  printf("Error in Elective1_Num query %\n", mysqli_error($conn));
}
$Major1_Elective_Count = 0;
while ( $row = mysqli_fetch_assoc( $Num_Electives_For_Major1 ) ){
      
      
      
      
      foreach ($row as $key => $value)       
      {   
      $Major1_Elective_Count = $Major1_Elective_Count + (int)$value; ##### $value is the M_num. I can do the same for 
                                        ###### elective number and add them
      }   
      printf ("</TR>\n");
   }      
   


$Elective_Count = 0;
 while ( $row = mysqli_fetch_assoc( $Num_Electives_For_Majors ) ){
      
      
      
      
      foreach ($row as $key => $value)       
      {   
      $Elective_Count = $Elective_Count + (int)$value; ##### $value is the M_num. I can do the same for 
                                        ###### elective number and add them
      }   
      printf ("</TR>\n");
   }      
   printf("</TABLE>\n");
   printf("</UL>\n");
   printf("<P>\n");




#if (! ($Num_ER2 = mysqli_query($conn, $Num_Electives_Remaining_query2)))
#      {
#      printf("Error in electives query: %\n", mysqli_error($conn));
#      }
#echo("<br>");
#      printf("Num_ER2 = $Num_ER2");





#$Num_Courses_Remaining = $Num_Required_Courses_remaining + $Num_ER;


if (! ($Requirements_remaining = mysqli_query($conn, $Required_Courses_Remaining_query)))
      {
      printf("Error in electives query: %\n", mysqli_error($conn));
      }


$total_courses = $Elective_Count + $Requirements_remaining;
if (4*$semesters - $total_courses < 0){
  printf("Graduation date is impossible. Too many courses remaining");
  exit(1);
}

printf("Number of semesters remaining: $semesters");
  echo("<br>");
  echo("<br>");

 printf("Required Courses Remaining: ");
 echo("<br>");



 printf("<UL>\n");
   printf("<TABLE bgcolor=\"lightyellow\" BORDER=\"5\">\n");
      
      $printed = false;


$Num_Required_Courses_remaining = 0;


   while ( $row = mysqli_fetch_assoc( $Requirements_remaining ) )
      {
      $Num_Required_Courses_remaining++;
      if ( ! $printed )
      {
    
     $printed = true;                 # Print header once...
      
     printf("<TR bgcolor=\"lightcyan\">\n");
     foreach ($row as $key => $value)
     {
     
        printf ("<TH>" . $key . "</TH>");             # Print attr. name
     }
     printf ("</TH>\n");
      }   
      
      
      printf("<TR>\n");
      foreach ($row as $key => $value)
      {   
     printf ("<TD>" . $value . "</TD>");
      }   
      printf ("</TR>\n");
   }      
   printf("</TABLE>\n");
   printf("</UL>\n");
   printf("<P>\n");

printf("Number of required courses remaining: $Num_Required_Courses_remaining<br><br>");

mysqli_free_result($Requirements_remaining);


 $Electives_remaining_query = "Select Distinct Elective_Course_Num from Electives where Elective_Course_Num not in (Select Distinct Elective_Course_Num from Major, temp, (Select * from study order by d limit 1) D, Electives where Field = m and Degree= d and Major.M_num = Electives.M_num and temp.c = Elective_Course_Num) and Elective_Course_Num in (Select distinct Elective_Course_Num from Major, (Select * from study order by d limit 1) D2, Electives where Field = m and d = Degree and Major.M_num= Electives.M_num);";

 $Num_Electives_For_Major2_query = "Select E - T from
(Select Elective_Num as E from Major, (Select * from study order by d desc limit 1) S1 where Degree = d and Field = m) E, 
(Select Count(Elective_Course_Num) as T from Major, Electives, (Select * from study order by d desc limit 1) S
where Degree = d and Field = m and Major.M_num = Electives.M_num and Elective_Course_Num in (Select c from temp)) T";

if(!($Num_Electives_For_Major2 = mysqli_query($conn, $Num_Electives_For_Major2_query))){
  printf("Error in Elective2_Num query %\n", mysqli_error($conn));
}


$Major2_Elective_Count = 0;
while ( $row = mysqli_fetch_assoc( $Num_Electives_For_Major2 ) ){
      
      
      
      
      foreach ($row as $key => $value)       
      {   
      $Major2_Elective_Count = $Major2_Elective_Count + (int)$value; ##### $value is the M_num. I can do the same for 
                                        ###### elective number and add them
      }   
      printf ("</TR>\n");
   }  

if (! ($Electives_remaining = mysqli_query($conn, $Electives_remaining_query)))
      {
      printf("Error in electives query: %\n", mysqli_error($conn));
}




printf("Number of elective courses remaining for a $major_d in $major: $Major2_Elective_Count");

echo("<br>");
printf("Courses that satisfy an elective requirement that may be taken"); 
   printf("<UL>\n");
   printf("<TABLE bgcolor=\"lightyellow\" BORDER=\"5\">\n");
      
      $printed = false;
      

   while ( $row = mysqli_fetch_assoc( $Electives_remaining ) )
      {
  
      if ( ! $printed )
      {
     
     $printed = true;                 # Print header once...
      
     printf("<TR bgcolor=\"lightcyan\">\n");
     foreach ($row as $key => $value)
     {
        printf ("<TH>" . $key . "</TH>");             # Print attr. name
     }
     printf ("</TH>\n");
      }   
      
      
      printf("<TR bgcolor=\"lightpink\">\n");
      foreach ($row as $key => $value)
      {   
     printf ("<TD>" . $value . "</TD>");
      }   
      printf ("</TR>\n");
   }      
   printf("</TABLE>\n");
   printf("</UL>\n");
   printf("<P>\n");


if (isset($op_major)){    
$two = true;   
$Electives_remaining_query2 = "Select Distinct Elective_Course_Num from Electives where Elective_Course_Num not in (Select Distinct Elective_Course_Num from Major, temp, (Select * from study order by d limit 1) D, Electives where Field = m and Degree= d and Major.M_num = Electives.M_num and temp.c = Elective_Course_Num) and Elective_Course_Num in (Select distinct Elective_Course_Num from Major, (Select * from study order by d desc limit 1) D2, Electives where Field = m and d = Degree and Major.M_num= Electives.M_num);";


$Num_Electives_For_Major2_query = "Select E - T from
(Select Elective_Num as E from Major, (Select * from study order by d desc limit 1) S1 where Degree = d and Field = m) E, 
(Select Count(Elective_Course_Num) as T from Major, Electives, (Select * from study order by d desc limit 1) S
where Degree = d and Field = m and Major.M_num = Electives.M_num and Elective_Course_Num in (Select c from temp)) T";

if (! ($Electives_remaining2 = mysqli_query($conn, $Electives_remaining_query2)))
      {
      printf("Error in electives query: %\n", mysqli_error($conn));
}


if(!($Num_Electives_For_Major2 = mysqli_query($conn, $Num_Electives_For_Major2_query))){
  printf("Error in Elective2_Num query %\n", mysqli_error($conn));
}
$Major2_Elective_Count = 0;
while ( $row = mysqli_fetch_assoc( $Num_Electives_For_Major2 ) ){
      
      
      
      
      foreach ($row as $key => $value)       
      {   
      $Major2_Elective_Count = $Major2_Elective_Count + (int)$value; ##### $value is the M_num. I can do the same for 
                                        ###### elective number and add them
      }   
      printf ("</TR>\n");
   }  

$Elective_Count = $Major1_Elective_Count + $Major2_Elective_Count;

 printf("Number of elective courses remaining for a $major_op_d in $op_major: $Major1_Elective_Count");

echo("<br>");
printf("Courses that satisfy an elective requirement that may be taken");
   printf("<UL>\n");
   printf("<TABLE bgcolor=\"lightyellow\" BORDER=\"5\">\n");
      
      $printed = false;
      

   while ( $row = mysqli_fetch_assoc( $Electives_remaining2 ) )
      {
  
      if ( ! $printed )
      {
     
     $printed = true;                 # Print header once...
      
     printf("<TR bgcolor=\"lightcyan\">\n");
     foreach ($row as $key => $value)
     {
        printf ("<TH>" . $key . "</TH>");             # Print attr. name
     }
     printf ("</TH>\n");
      }   
      
      
       printf("<TR bgcolor=\"lightpink\">\n");
      foreach ($row as $key => $value)
      {   
     printf ("<TD>" . $value . "</TD>");
      }   
      printf ("</TR>\n");
   }      
   printf("</TABLE>\n");
   printf("</UL>\n");
   printf("<P>\n");



}

## Lits of Classes sorted by Season

$Fall_Courses_Query = "Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'F';";

$Spring_Courses_Query = "Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'S';";

if(!($Fall_Courses = mysqli_query($conn, $Fall_Courses_Query))){
  printf("Error in Elective2_Num query %\n", mysqli_error($conn));
}

if(!($Spring_Courses = mysqli_query($conn, $Spring_Courses_Query))){
  printf("Error in Elective2_Num query %\n", mysqli_error($conn));
}




## These Classes are the classes that are able to be scheduled

$Eligible_Classes_F = "Select Distinct Course_Num from (Select Course_Num, level from Course where Course_Num in (Select S.Course_Num from (Select Course_Num, Count(c) as c from Prerequisite, temp where Prereq_Course_Num = c group by Course_Num) T, (Select Course_Num, Count(Prereq_Course_Num) as P from Prerequisite group by Course_Num) S where P = c and T.Course_Num = S.Course_Num and T.Course_Num not in (Select c from temp)) and Course_Num in (Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'F') Union Select Course_Num, level from Course where Course_Num not in (Select Course_Num from Prerequisite) and Course_Num not in (Select c from temp) order by level) T limit 4;";

$Eligible_Classes_S = "Select Distinct Course_Num from (Select Course_Num, level from Course where Course_Num in (Select S.Course_Num from (Select Course_Num, Count(c) as c from Prerequisite, temp where Prereq_Course_Num = c group by Course_Num) T, (Select Course_Num, Count(Prereq_Course_Num) as P from Prerequisite group by Course_Num) S where P = c and T.Course_Num = S.Course_Num and T.Course_Num not in (Select c from temp)) and Course_Num in (Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'S') Union Select Course_Num, level from Course where Course_Num not in (Select Course_Num from Prerequisite) and Course_Num not in (Select c from temp) order by level) T limit 4;";

$Elective_Classes_S = "Select Distinct Course_Num from (Select Course_Num, level from Course where Course_Num in (Select S.Course_Num from (Select Course_Num, Count(c) as c from Prerequisite, temp where Prereq_Course_Num = c group by Course_Num) T, (Select Course_Num, Count(Prereq_Course_Num) as P from Prerequisite group by Course_Num) S where P = c and T.Course_Num = S.Course_Num and T.Course_Num not in (Select c from temp)) and Course_Num in (Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'S') and Course_Num in (Select Elective_Course_Num from Electives, study, Major where d = Degree and m = Field and Major.M_Num = Electives.M_Num) order by level) T limit 4;";

$Elective_Classes_F = "Select Distinct Course_Num from (Select Course_Num, level from Course where Course_Num in (Select S.Course_Num from (Select Course_Num, Count(c) as c from Prerequisite, temp where Prereq_Course_Num = c group by Course_Num) T, (Select Course_Num, Count(Prereq_Course_Num) as P from Prerequisite group by Course_Num) S where P = c and T.Course_Num = S.Course_Num and T.Course_Num not in (Select c from temp)) and Course_Num in (Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'F') and Course_Num in (Select Elective_Course_Num from Electives, study, Major where d = Degree and m = Field and Major.M_Num = Electives.M_Num) order by level) T limit 4;";


$Required_Classes_F = "Select Distinct Course_Num from (Select Course_Num, level from Course where Course_Num in (Select S.Course_Num from (Select Course_Num, Count(c) as c from Prerequisite, temp where Prereq_Course_Num = c group by Course_Num) T, (Select Course_Num, Count(Prereq_Course_Num) as P from Prerequisite group by Course_Num) S where P = c and T.Course_Num = S.Course_Num and T.Course_Num not in (Select c from temp)) and Course_Num in (Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'F') and Course_Num in (Select Required_Course_Num from Requirements, study, Major where d = Degree and m = Field and Major.M_Num = Requirements.M_Num) Union Select Course_Num, level from Course where Course_Num not in (Select Course_Num from Prerequisite) and Course_Num not in (Select c from temp) order by level) T limit 4;";

$Required_Classes_S = "Select Distinct Course_Num from (Select Course_Num, level from Course where Course_Num in (Select S.Course_Num from (Select Course_Num, Count(c) as c from Prerequisite, temp where Prereq_Course_Num = c group by Course_Num) T, (Select Course_Num, Count(Prereq_Course_Num) as P from Prerequisite group by Course_Num) S where P = c and T.Course_Num = S.Course_Num and T.Course_Num not in (Select c from temp)) and Course_Num in (Select Course.Course_Num from Course, Course_Offered where Course.Course_Num = Course_Offered.Course_Num and Season = 'S') and Course_Num in (Select Required_Course_Num from Requirements, study, Major where d = Degree and m = Field and Major.M_Num = Requirements.M_Num) Union Select Course_Num, level from Course where Course_Num not in (Select Course_Num from Prerequisite) and Course_Num not in (Select c from temp) order by level) T limit 4;";

printf("Here is a schedule of courses that will fulfill your designated Major/ Minor Choices");
echo("<br>");echo("<br>");


while ($semesters > 0){
  
  if($n == 0){ ## Select up to 4 eligable courses from the courses remaining that are offered
              ## in the Spring. Create variables for them Print. those courses to a table
              ## Add those courses to a temp so they can be considered as prereqs.
              ## Decrement the number of semesters remaining and change n to 1.
              ## Repeat until there are no more semesters remaining.
              ## n = 0 Corresponds to Spring
              ## c_year is the current year
    $sem = 'Spring';
    $c_year = $c_year;
    printf("$sem $c_year");
    
    if(!($Spring_Courses_R = mysqli_query($conn, $Required_Classes_S))){
      printf("Error in Elective2_Num query %\n", mysqli_error($conn));
    }

    if(!($Spring_Courses_E = mysqli_query($conn, $Elective_Classes_S))){
      printf("Error in Elective2_Num query %\n", mysqli_error($conn));
    }

    printf("<UL>\n");
    printf("<TABLE bgcolor=\"lightyellow\" BORDER=\"5\">\n");
      
    $printed = false;
      
    $row_count = 0;
    while ( $row = mysqli_fetch_assoc( $Spring_Courses_R) ) {
      $row_count++;
      $Num_Required_Courses_remaining--;
      if ( ! $printed ){
     
        $printed = true;                 # Print header once...
      
        printf("<TR bgcolor=\"lightcyan\">\n");
        foreach ($row as $key => $value){
          printf ("<TH>" . $key . "</TH>");             # Print attr. name
        }
        printf ("</TH>\n");
      }   
      
      
      printf("<TR>\n");
      foreach ($row as $key => $value) {   
        printf ("<TD>" . $value . "</TD>");
        if(!($add_c = mysqli_query($conn, "Insert into temp values ('$value');"))){
          printf("Error in Insertion Query%\n", mysqli_error($conn));
        }
      }   
      printf ("</TR>\n");
    }      
    

    while ($row_count < 4){
      $row = mysqli_fetch_assoc($Spring_Courses_E);
      $row_count++;
      $Elective_Count--;
      if ( ! $printed ){
     
        $printed = true;                 # Print header once...
      
        printf("<TR bgcolor=\"lightcyan\">\n");
        foreach ($row as $key => $value){
          printf ("<TH>" . $key . "</TH>");             # Print attr. name
        }
        printf ("</TH>\n");
      }   
      
      
       printf("<TR bgcolor=\"lightpink\">\n");
      foreach ($row as $key => $value) {   
        printf ("<TD>" . $value . "</TD>");
        if(!($add_c = mysqli_query($conn, "Insert into temp values ('$value');"))){
          printf("Error in Insertion Query%\n", mysqli_error($conn));
        }
        if ($Elective_Count == 0){
          break;
        }
      }   
      printf ("</TR>\n");

    }

    printf("</TABLE>\n");
    printf("</UL>\n");
    printf("<P>\n");

    $n=1;
  





  }
  else if ($n==1){
    $sem = 'Fall';
    $c_year = $c_year;
    printf("$sem $c_year");
    if(!($Fall_Courses_R = mysqli_query($conn, $Required_Classes_F))){
      printf("Error in Elective2_Num query %\n", mysqli_error($conn));
    }

    if(!($Fall_Courses_E = mysqli_query($conn, $Elective_Classes_F))){
      printf("Error in Elective2_Num query %\n", mysqli_error($conn));
    }

    printf("<UL>\n");
    printf("<TABLE bgcolor=\"lightyellow\" BORDER=\"5\">\n");
      
    $printed = false;
      
    $row_count = 0;
    while ( $row = mysqli_fetch_assoc( $Fall_Courses_R) ) {
      $row_count++;
      $Num_Required_Courses_remaining--;
      if ( ! $printed ){
     
        $printed = true;                 # Print header once...
      
        printf("<TR bgcolor=\"lightcyan\">\n");
        foreach ($row as $key => $value){
          printf ("<TH>" . $key . "</TH>");             # Print attr. name
        }
        printf ("</TH>\n");
      }   
      
      
      printf("<TR>\n");
      foreach ($row as $key => $value) {   
        printf ("<TD>" . $value . "</TD>");
        if(!($add_c = mysqli_query($conn, "Insert into temp values ('$value');"))){
          printf("Error in Insertion Query%\n", mysqli_error($conn));
        }
      }   
      printf ("</TR>\n");
    }      
    

    while ($row_count < 4){
      $row = mysqli_fetch_assoc($Fall_Courses_E);
      $row_count++;
      $Elective_Count--;
      if ( ! $printed ){
     
        $printed = true;                 # Print header once...
      
        printf("<TR bgcolor=\"lightcyan\">\n");
        foreach ($row as $key => $value){
          printf ("<TH>" . $key . "</TH>");             # Print attr. name
        }
        printf ("</TH>\n");
      }   
      
      
       printf("<TR bgcolor=\"lightpink\">\n");
      foreach ($row as $key => $value) {   
        printf ("<TD>" . $value . "</TD>");
        if(!($add_c = mysqli_query($conn, "Insert into temp values ('$value');"))){
          printf("Error in Insertion Query%\n", mysqli_error($conn));
        }
        if ($Elective_Count == 0){
          break;
        }
      }   
      printf ("</TR>\n");

    }

    printf("</TABLE>\n");
    printf("</UL>\n");
    printf("<P>\n");


    $n=0;
    $c_year++;


  }

  $semesters--;
 
  if ($Elective_Count <= 0 && $Num_Required_Courses_remaining == 0){
    printf("You can graduate after taking the couses listed above");
    echo("<br>");
    if ($semesters != 0){
      printf("With this plan, you will graudate $semesters semester(s) earlier than you planned");
    }
  break;
  }
}

if ($Elective_Count > 0 || $Num_Required_Courses_remaining > 0){
  printf("Oh no!! Looks like you wont be able to graduate after all <br>");
  printf("You will not be able to finish your Major/ Minor Requirements before you specified graduation date");
}
   
      
   mysqli_free_result($Electives_remaining);
      
   mysqli_close($conn);

   ?>     
      
   </UL>
   <P> 
   <HR>
   <HR>
   <HR>
   <HR>
