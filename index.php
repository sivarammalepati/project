<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> :: PELLI ROJU :: </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
	<header class="header">PELLIROJU</header>
	<div class="upComing">
		<h3>UPCOMING</h3>
	</div>
<div class="container">
<?php
session_start();
include "config.php";
    
	
    $thisCurrentMonth = date('m');	
    $currentYear = date('Y');
    $thisMonth = date('Y-m-d');
	$thisYear = date('Y');
	$thisDate = date('j');
	$query = '';
	$select_data="SELECT id,year(marriageday) AS years, month(marriageday) AS months,day(marriageday) AS dates FROM `videos` WHERE DATE_FORMAT(marriageday,'%Y') <='".$currentYear."' ORDER BY DATE_FORMAT(marriageday,'%m/%d') DESC";
    $select_result=mysqli_query($conn,$select_data); 
	
if($rows=mysqli_num_rows($select_result) > 0)
{
    $no=1;
     if($no >= $rows)
        {
    while($data = mysqli_fetch_array($select_result))
    {  
		if($data['months'] >= $thisCurrentMonth){
			
			if($thisDate <=$data['dates'] && $data['months'] <= $thisCurrentMonth){
				$userIds[] = $data['id'];
			}
			if($data['months'] >= 12){
				$userIds[] = $data['id'];
			}
		}
		/*if($data['years'] >= $thisCurrentYear){
			$userIds[] = $data['id'];
		}*/
	}
	    $query = "id IN ('".implode("', '", $userIds)."')";
		
        ?>
                    
<?php
		
		$selectData="SELECT * FROM `videos` WHERE ".$query." ORDER BY DATE_FORMAT(marriageday,'%m/%d') ASC";
		$resultData=mysqli_query($conn,$selectData);  
		
			if($result=mysqli_num_rows($resultData) > 0){
				while($rec = mysqli_fetch_array($resultData)){
					$date = $rec['marriageday'];
					$userMonths = date('Y-m', strtotime($date));
					$years = date('Y', strtotime($date));
					$dates = date('j',strtotime($date));
					$months = date('n',strtotime($date));  
					$year = date('Y', strtotime($date));
					$month = date('F', strtotime($date));
					$day =date('d',strtotime($date));
					
						if(($no % 2) == 0)
							{ 
							$no++;
						?>
						
						<div class="row">
							<div class="col-md-2 col-sm-2 col-xs-2 calendar calendar-margin">
								<p class="date1">
								<?php  echo $day;?>
								</p>
								<p class="date2">
								<?php echo strtoupper(substr($month,0,3));?>
								</p>
								<p class="date3">
								<?php echo $year;?>
								</p>
							</div>
							<div class="col-md-6 col-sm-5 col-xs-5 subcribeSectionGrey">
								<h2><?php echo strtoupper($rec[3])?></h2>
								<h2>
                                    <?php
                                      if(!empty($rec[6]))
                                      {?>
                                         <a href="<?php echo $rec[6];?>" target="_blank">
										<img src="images/fb.png">
									    </a> 
                                  <?php    }
                                  ?>
									<?php
                                    if(!empty($rec[7]))
                                    {?>
                                        <a href="<?php echo $rec[7];?>" target="_blank">
										<img src="images/twitter.png">
									</a>
                                <?php    }
									?>
                                    <?php
                                    if(!empty($rec[8]))
                                    {?>
                                       <a href="<?php echo $rec[8];?>" target="_blank">
										<img src="images/instagram.png">
									</a> 
                                   <?php }
									?>
								</h2>
				
								<h2><?php echo strtoupper($rec[4])?></h2>
								<h2>
                                    <?php
                                        if(!empty($rec[9]))
                                        {?>
                                            <a href="<?php echo $rec[9]?>" target="_blank">
										<img src="images/fb.png">
									       </a>
                                      <?php  }
									  ?>
                                    <?php
                                    if(!empty($rec[10]))
                                    {?>
                                       <a href="<?php echo $rec[10]?>" target="_blank">
										<img src="images/twitter.png">
									</a> 
                                 <?php   }
									?>
                                    <?php
                                      if(!empty($rec[11]))
                                      {?>
                                         <a href="<?php echo $rec[11]?>" target="_blank">
										<img src="images/instagram.png">
									</a> 
                                  <?php    }
									?>
								</h2>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-5 rightCurve">
								<img class="img-responsive radiusImage" src="<?php echo $rec[2];?>">
							</div>
						</div>
						<br>
					
						<?php
							
						}
							else
							{
							
						$no++;
					?>
						<div class="row">
							<div class="col-md-4 col-sm-5 col-xs-5 leftCurve">
								<img class="img-responsive radiusImage" src="<?php echo $rec[2];?>">
							</div>
							<div class="col-md-6 col-sm-5 col-xs-5 subcribeSectionOrange">
								<h2><?php echo strtoupper($rec[3])?></h2>
								<h2>
                                    <?php
                                    if(!empty($rec[6]))
                                    {?>
                                        <a href="<?php echo $rec[6];?>" target="_blank">
										<img src="images/fb.png">
									</a>
                                 <?php   }
									?>
                                    <?php
                                    if(!empty($rec[7]))
                                    {?>
                                       <a href="<?php echo $rec[7];?>" target="_blank">
										<img src="images/twitter.png">
									</a> 
                                <?php    }
									?>
                                    <?php
                                    if(!empty($rec[8]))
                                    {?>
                                        <a href="<?php echo $rec[8];?>" target="_blank">
										<img src="images/instagram.png">
									</a>
                                <?php    }
									?>
								</h2>
				
								<h2><?php echo strtoupper($rec[4])?></h2>
								<h2>
                                    <?php
                                        if(!empty($rec[9]))
                                        {?>
                                           <a href="<?php echo $rec[9]?>" target="_blank">
										<img src="images/fb.png">
									    </a> 
                                        <?php }
									   ?>
                                    <?php
                                       if(!empty($rec[10]))
                                       {?>
                                         <a href="<?php echo $rec[10]?>" target="_blank">
										<img src="images/twitter.png">
									</a>  
                                     <?php  }
									?>
                                    <?php
                                if(!empty($rec[11]))
                                {?>
                                    <a href="<?php echo $rec[11]?>" target="_blank">
										<img src="images/instagram.png">
									</a>
                              <?php  }
									?>
								</h2>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2 calendar">
								<p class="date1">
								<?php echo $day;?>
									</p>
								<p class="date2">
								<?php echo strtoupper(substr($month,0,3));?>
									</p>
								<p class="date3">
								<?php echo $year;?>
									</p>
							</div>
						</div>
						
						<br>
				<?php
						}
				}
			}
}
}
	$thistMonths = date('n');
	$monthBetween = range($thistMonths,12);
	$yearsBetween = (12)-(count($monthBetween)-1); 

?>
</div>

	
	
<div class="container">
<?php
	$thisCurrentYear = date('Y',strtotime('+'.$yearsBetween.' months'));
    $currentYear = date('Y-m',strtotime('+'.$yearsBetween.' months'));
    $currentMonth = date('m',strtotime('+'.$yearsBetween.' months'));
/*	$thisCurrentMonth = date('m');
    $thisMonth = date('Y-m-d');
	$thisYear = date('Y');
	$thisDate = date('j');*/

	$query = '';
	$query = "id NOT IN ('".implode("', '", $userIds)."')";
	$selectData="SELECT * FROM `videos` WHERE ".$query." ORDER BY DATE_FORMAT(marriageday,'%m/%d') ASC";
    $resultData=mysqli_query($conn,$selectData); 
if($rows=mysqli_num_rows($resultData) > 0)
{
    $no=1;
     if($no >= $rows)
        {
        ?>
                    
<?php
		
		//$selectData="SELECT * FROM `videos` WHERE ".$query." ORDER BY DATE_FORMAT(marriageday,'%Y/%m/%d') ASC";
				//$resultData=mysqli_query($conn,$selectData);  
				while($rec = mysqli_fetch_array($resultData)){
					$date = $rec['marriageday'];
					$userMonths = date('Y-m', strtotime($date));
					$years = date('Y', strtotime($date));
					$dates = date('j',strtotime($date));
					$months = date('n',strtotime($date));  
					$year = date('Y', strtotime($date));
					$month = date('F', strtotime($date));
					$day =date('d',strtotime($date));
					
						if(($no % 2) == 0)
							{ 
							$no++;
						?>
						
						<div class="row">
							<div class="col-md-2 col-sm-2 col-xs-2 calendar calendar-margin">
								<p class="date1">
								<?php  echo $day;?>
								</p>
								<p class="date2">
								<?php echo strtoupper(substr($month,0,3));?>
								</p>
								<p class="date3">
								<?php echo $year;?>
								</p>
							</div>
							<div class="col-md-6 col-sm-5 col-xs-5 subcribeSectionGrey">
								<h2><?php echo strtoupper($rec[3])?></h2>
								<h2>
                                    <?php
                                     if(!empty($rec[6]))
                                     {?>
                                        <a href="<?php echo $rec[6];?>" target="_blank">
										<img src="images/fb.png">
									</a> 
                                  <?php   }
									?>
                                    <?php
                                    if(!empty($rec[7]))
                                    {?>
                                      <a href="<?php echo $rec[7];?>" target="_blank">
										<img src="images/twitter.png">
									</a>  
                                 <?php   }
									?>
                                    <?php
                                     if(!empty($rec[8]))
                                     {?>
                                        <a href="<?php echo $rec[8];?>" target="_blank">
										<img src="images/instagram.png">
									</a> 
                                     <?php }
									?>
								</h2>
				
								<h2><?php echo strtoupper($rec[4])?></h2>
								<h2>
                                    <?php
                                        if(!empty($rec[9]))
                                        {?>
                                           <a href="<?php echo $rec[9]?>" target="_blank">
										<img src="images/fb.png">
									</a> 
                                      <?php  }
									  ?>
                                    <?php
                                     if(!empty($rec[10]))
                                     {?>
                                        <a href="<?php echo $rec[10]?>" target="_blank">
										<img src="images/twitter.png">
									</a> 
                                  <?php   }
									?>
                                    <?php
                                     if(!empty($rec[11]))
                                     {?>
                                        <a href="<?php echo $rec[11]?>" target="_blank">
										<img src="images/instagram.png">
									</a> 
                                  <?php   }
									?>
								</h2>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-5 rightCurve">
								<img class="img-responsive radiusImage" src="<?php echo $rec[2];?>">
							</div>
						</div>
						<br>
					
						<?php
							
						}
							else
							{
							
						$no++;
					?>
						<div class="row">
							<div class="col-md-4 col-sm-5 col-xs-5 leftCurve">
								<img class="img-responsive radiusImage" src="<?php echo $rec[2];?>">
							</div>
							<div class="col-md-6 col-sm-5 col-xs-5 subcribeSectionOrange">
								<h2><?php echo strtoupper($rec[3])?></h2>
								<h2>
                                    <?php
                                    if(!empty($rec[6]))
                                    {?>
                                      <a href="<?php echo $rec[6];?>" target="_blank">
										<img src="images/fb.png">
									</a>  
                                    <?php }
									?>
                                    <?php
                                     if(!empty($rec[7]))
                                     {?>
                                       <a href="<?php echo $rec[7];?>" target="_blank">
										<img src="images/twitter.png">
									</a>  
                                   <?php  }
									?>
                                    <?php
                                    if(!empty($rec[8]))
                                    {?>
                                       <a href="<?php echo $rec[8];?>" target="_blank">
										<img src="images/instagram.png">
									</a> 
                                 <?php   }
									?>
								</h2>
				
								<h2><?php echo strtoupper($rec[4])?></h2>
								<h2>
                                    <?php
                                        if(!empty($rec[9]))
                                        {?>
                                          <a href="<?php echo $rec[9]?>" target="_blank">
										<img src="images/fb.png">
									     </a>  
                                        <?php }
									    ?>
                                    <?php
                                      if(!empty($rec[10]))
                                      {?>
                                         <a href="<?php echo $rec[10]?>" target="_blank">
										<img src="images/twitter.png">
								     	</a> 
                                     <?php }
									 ?>
                                    <?php
                                     if(!empty($rec[11]))
                                     {?>
                                        <a href="<?php echo $rec[11]?>" target="_blank">
										<img src="images/instagram.png">
									</a> 
                                  <?php   }
									?>
								</h2>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2 calendar">
								<p class="date1">
								<?php echo $day;?>
									</p>
								<p class="date2">
								<?php echo strtoupper(substr($month,0,3));?>
									</p>
								<p class="date3">
								<?php echo $year;?>
									</p>
							</div>
						</div>
						
						<br>
				<?php
						}
				}
			
}
}


?>
</div>

    <footer class="footer"><img src="images/Logo.png"></footer>
	<div>
		<p class="text-center footer-copyright">&copy; 2018 by <a href="http://strategy64.com/" target="_blank">Strategy64</a></p>
	</div>

</body>

</html>



