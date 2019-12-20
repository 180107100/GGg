<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>

	<?php include_once(DIRNAME.'view/template/external.php'); ?>
	

	
</head>
<body>
<?php include_once(DIRNAME.'view/template/header.php'); ?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
				<?php include_once(DIRNAME.'view/template/sidenav.php'); ?>
	 	</div>
	    <div class="col-sm-9">
	     	<!--INSERT CONTENT HERE-->
	     	
	     	
	     	<?php
	     	$subjects = SubjectType::getSubjectTypes();
        $getSb = Subject::getSubjects();
        $times = Time::getTimes();
        $rooms = Room::getRooms();
        $weeks = Week::getWeeks();
        $groups = Group::getGroups();
        $teachers = Teacher::getTeachers();
         
         
        $uroks = array();
        foreach($getSb as $subject){
            $count = SubjectType::countSubjectByID($subject["id"]);
            $uroks[] = new Urok($subject["id"] ,$subject["title"] , $count[0]);
        }
         
       
            //EDIT
            /*
         foreach ($times as $time){
             
            foreach($weeks as $week){
               foreach($rooms as $room){
             
             for($i = 0 ;$i < count($uroks); $i++)
                   {
                          if(!Schedule::checkRoom($room["id"],$time["start_time"],$week["id"])){
                            if($uroks[$i]->getValid())
                            {
                                $uroks[$i]->minusTime();
                                break;
                            }
                          }
                          else{
                                  
                              }
                     
                  }  
               }
            }
        }*/
            
            
            
            
            echo '<table class="table table-hover" >';
        foreach ($times as $time){
          
            echo "<tr>";  
            echo "<td>"; 
            echo $time["start_time"]."-".$time["end_time"]; 
            echo "</td>"; 
            foreach($weeks as $week){
              echo "<td>"; 
               echo "<b>".$week["title"]."</b>";
               foreach($rooms as $room){
                   for($i = 0 ;$i < count($uroks); $i++)
                   {
                  if(!Schedule::checkRoom($room["id"],$time["start_time"],$week["id"])){
                     if($uroks[$i]->getValid($time))
                            {
                                $uroks[$i]->clock = $time;
                                echo "<br>".$uroks[$i]->title; 
                                $uroks[$i]->minusTime();
                                echo "<span style='color:red'>".$room["title"].", </span>";
                                break;
                            }
                     
                      
                  }
                 
                   }  
                  
               }
               
                
                 echo "</td>"; 
                
            }
            echo "<tr>";
            
        }
        
        
            echo "</table>";
            
            
            
            
            
            
            //EKRAN
            
          /*  foreach($getSb as $subject){
                            //$sbj = Subject::getSubjectByID($subject["subject_id"]);
                            $count = SubjectType::countSubjectByID($subject["id"]);
                            echo $subject["title"]." - ".$count[0]." <br>";
                        }
            */
            
            
            //EKRAN
          /*  echo '<table cellspacing="2" cellpadding="2" border="1" width="100%">';
        foreach ($times as $time){
          
            echo "<tr>";  
            echo "<td>"; 
            echo $time["start_time"]."-".$time["end_time"]; 
            echo "</td>"; 
            foreach($weeks as $week){
              echo "<td>"; 
               echo $week["title"];
               foreach($rooms as $room){
                   
                  if(Schedule::checkRoom($room["id"],$time["start_time"],$week["id"])){
                      echo "<br><span style='color:red'>".$room["title"].", </span>";
                      
                  }
                  else{
                       
                      echo "<br><span style='color:green'>".$room["title"].", </span>";
                  }
                  
                  
               }
               
                
                 echo "</td>"; 
                
            }
            echo "<tr>";
            
        }
        
        
            echo "</table>";
    */
    ?>
	     	
	     	<!--INSERT CONTENT HERE-->
	    </div>
	</div>
	</div>

</body>


	<?php include_once(DIRNAME.'view/template/scripts.php'); ?>
	
</html>