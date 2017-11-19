
<html>
   <head>
   <title> Course Planner</title>
   </head>
   <body>
      
   <H3>
   <HR>
   Here is some information about the courses listed on the previous page
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


   $Query = "Select T.Course_Num, Title, Credits, Department, Prerequisite_Course, Season from (Select Course.Course_Num, Title, Credits, Department, Prereq_Course_Num as Prerequisite_Course from Course Left Join Prerequisite on Course.Course_Num = Prerequisite.Course_Num) T, Course_Offered where T.Course_Num= Course_Offered.Course_Num; ";

   if (! ($Result = mysqli_query($conn, $Query))){
    printf("Error: %s\n", mysql_error($conn));
    exit(1);
  }


  printf("<UL>\n");
   printf("<TABLE bgcolor=\"lightyellow\" BORDER=\"5\">\n");
      
      $printed = false;
      

   while ( $row = mysqli_fetch_assoc( $Result ) )
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




   ?>     
      
   </UL>
   <P> 
   <HR>
   <HR>
   <HR>
   <HR>