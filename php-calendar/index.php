<?php

include 'classes/calendar.php';
include('../sql_con.php');
session_start();
$club_id = $_SESSION["cid"];
$name=$_SESSION["name"];
$status=$_SESSION["status"];
$mysql_tbl='events';
$sql = "SELECT * FROM `" . $mysql_tbl . "` where club_id= '$club_id'";
$result = mysqli_query($mysqli,$sql);
$month = isset($_GET['m']) ? $_GET['m'] : NULL;
$year  = isset($_GET['y']) ? $_GET['y'] : NULL;
$calendar = Calendar::factory($month, $year);
while($row = mysqli_fetch_array($result))
{
  
    $name=$row['name'];
    $date=$row['date'];
    //split date
   list($year,$month, $day)=explode('-', "$date");
    //join date
   $date1=$day."-".$month."-".$year;
   $event2 = $calendar->event()
    ->condition('timestamp', strtotime("$date"))
    ->title('Hello All')
    ->output("$name")
    ->add_class('custom-event-class');
   $calendar->attach($event2);
}

$event3 = $calendar->event()
    ->condition('timestamp', strtotime('2-05-2015'))
    ->title('Hello All')
    ->output('My Custom Event1')
    ->add_class('custom-event-class');
$event4 = $calendar->event()
    ->condition('timestamp', strtotime('3-05-2015'))
    ->title('Hello All')
    ->output('My Custom Event2')
    ->add_class('custom-event-class');
$event5 = $calendar->event()
    ->condition('timestamp', strtotime('4-05-2015'))
    ->title('Hello All')
    ->output('My Custom Event3')
    ->add_class('custom-event-class');


$calendar->standard('today')
	->standard('prev-next')
	->attach($event3)
        ->attach($event4)
        ->attach($event5);

        
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PHP Calendar</title>
		<link type="text/css" rel="stylesheet" media="all" href="css/style.css" />
	</head>
	<body>
			
		<div style="width:800px; padding:20px; margin:50px auto">
			<table class="calendar">
				<thead>
					<tr class="navigation">
						<th class="prev-month"><a href="<?php echo htmlspecialchars($calendar->prev_month_url()) ?>"><?php echo $calendar->prev_month() ?></a></th>
						<th colspan="5" class="current-month"><?php echo $calendar->month() ?></th>
						<th class="next-month"><a href="<?php echo htmlspecialchars($calendar->next_month_url()) ?>"><?php echo $calendar->next_month() ?></a></th>
					</tr>
					<tr class="weekdays">
						<?php foreach ($calendar->days() as $day): ?>
							<th><?php echo $day ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($calendar->weeks() as $week): ?>
						<tr>
							<?php foreach ($week as $day): ?>
								<?php
								list($number, $current, $data) = $day;
								
								$classes = array();
								$output  = '';
								
								if (is_array($data))
								{
									$classes = $data['classes'];
									$title   = $data['title'];
									$output  = empty($data['output']) ? '' : '<ul class="output"><li>'.implode('</li><li>', $data['output']).'</li></ul>';
								}
								?>
								<td class="day <?php echo implode(' ', $classes) ?>">
									<span class="date" title="<?php echo implode(' / ', $title) ?>"><?php echo $number ?></span>
									<div class="day-content">
										<?php echo $output ?>
									</div>
								</td>
							<?php endforeach ?>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		
	</body>
</html>
