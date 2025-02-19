<?php
session_start();

if(!isset($_SESSION['global_admin']) || $_SESSION['global_admin'] != '21sd123Sjdsf934912') {
  header("Location: /treaty/thiscontrolpanel/login");
  die("1");
}

include_once '../config/database.php';

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Статистика | Admin Panel</title>
	<meta name="description" content="Unnamed">
	<link href="../assets/css/fonts.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/purple_styles.css" rel="stylesheet">
	<link href="../assets/css/purple_admin.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../assets/img/logo-sm.svg" type="image/x-icon">
	<link rel="icon" href="../assets/img/logo-sm.svg" type="image/x-icon">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-theme">
		<div class="container"> 
		<a class="navbar-brand" href="#">ADMIN PANEL</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item"> <a class="nav-link" href="index">Заявки</a></li>
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="statistics">Статистика</a></li>
				</ul>
				<div class="col-md-3 text-end">
					<button type="button" class="btn btn-primary btn btn-primary d-flex justify-content-center align-items-center ms-auto navbar-btn" onclick="location.replace('logout')">
					Выйти 
					<svg class="ms-2" width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.58371 1.04729H7.10117C7.39742 1.04729 7.63759 1.28746 7.63759 1.58371V3.30792C7.63759 3.59712 7.87203 3.83157 8.16123 3.83157C8.45044 3.83157 8.68488 3.59712 8.68488 3.30792V1.58371C8.68488 0.709053 7.97583 0 7.10117 0H1.58371C0.709053 0 0 0.709053 0 1.58371V9.83435C0 10.709 0.709053 11.4181 1.58371 11.4181H7.10117C7.97583 11.4181 8.68488 10.709 8.68488 9.83435V7.62481C8.68488 7.33561 8.45044 7.10117 8.16123 7.10117C7.87203 7.10117 7.63759 7.33561 7.63759 7.62481V9.83435C7.63759 10.1306 7.39742 10.3708 7.10117 10.3708H1.58371C1.28746 10.3708 1.04729 10.1306 1.04729 9.83435V1.58371C1.04729 1.28746 1.28746 1.04729 1.58371 1.04729Z" fill="white"/>
						<path d="M0 1.16848C0 0.427834 0.690176 -0.119499 1.41134 0.0492345L4.52768 0.778374C5.04759 0.900019 5.41528 1.36366 5.41528 1.89762V11.9112C5.41528 12.6977 4.64318 13.2519 3.89804 13.0003L0.781705 11.9479C0.314515 11.7902 0 11.352 0 10.8589V1.16848Z" fill="white"/>
						<path d="M7.07562 5.45359C7.07562 5.15028 7.32151 4.9044 7.62481 4.9044H9.89821C10.2015 4.9044 10.4474 5.15028 10.4474 5.45359C10.4474 5.7569 10.2015 6.00279 9.89821 6.00279H7.62481C7.32151 6.00279 7.07562 5.7569 7.07562 5.45359Z" fill="white"/>
						<path d="M12.83 5.01975C13.0567 5.26457 13.0567 5.64262 12.83 5.88744L10.9288 7.94096C10.5341 8.36719 9.82158 8.08797 9.82158 7.50711V3.40007C9.82158 2.81922 10.5342 2.54 10.9288 2.96623L12.83 5.01975Z" fill="white"/>
					</svg>
					</button>
				 </div>
			</div>
		</div>
	</nav>
	<main class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block-treaty p-4 my-5">
					<div class="block-tabs d-flex justify-content-left align-items-center mb-4">
						<div class="tab-time" onclick="changeTab('ned')" id="stat_ned">
							<span class="m-0">7 Дней</span>
						</div>
						<div class="tab-time active" onclick="changeTab('month')" id="stat_month">
							<span class="m-0">30 Дней</span>
						</div>
						<div class="tab-time" onclick="changeTab('year')" id="stat_year">
							<span class="m-0">Год</span>
						</div>
						<div class="tab-time" onclick="changeTab('all')" id="stat_all">
							<span class="m-0">Все время</span>
						</div>
					</div>

					<span id="block_stat_month" class="block_stat_class">
						<?php
						$month_date = date("Y-m-d H:i:s", strtotime("-31 days"));
						$get_month_stat = db_query("SELECT count(*) as total, CAST(t_requests.t_add_date AS DATE) AS DATE_PURCHASED FROM t_requests WHERE t_add_date > '$month_date' GROUP BY DATE_PURCHASED");
						$month_array = [];
						$month_count = 0;

						foreach ($get_month_stat as $value) {

              array_push($month_array, [
                "y" => $value['DATE_PURCHASED'],
                "deps" => (int)$value['total']
              ]);

              $month_count = $month_count + (int)$value['total'];
						}

						if($month_count < 1) {
              for($i=0; $i < 5; $i++) {
                array_push($month_array, [
                  "y" => date("Y-m-d"),
                  "deps" => 0
                ]);
              }
              
            }

            $month_array = json_encode($month_array);

            if($month_count > 31) {
            	$today_month_request = (int)$month_count / 31;
            	$today_month_request = (int)$today_month_request;
            } else {
            	$today_month_request = '1 <';
            }

            $get_month_device = db_fetch("SELECT count(*) as total FROM t_requests WHERE (t_add_device = 'Linux' OR t_add_device = 'MacOS' OR t_add_device = 'Windows') AND t_add_date > '$month_date' GROUP BY t_id");
            $month_desktop = (int)$get_month_device['total'];
            $month_mobile = 0;

            $month_desktop_percent = 0;
            $month_mobile_percent = 0;
            if($month_count > 0) {
            	$month_mobile = (int)$month_count - (int)$month_desktop;
            }

            $month_mobile_percent = (($month_count - $month_desktop) * 100) / $month_count;
            $month_mobile_percent = (int)$month_mobile_percent;
            $month_desktop_percent = 100 - (int)$month_mobile_percent;
            

						?>
						<div class="row">
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Новые заявки</h1>
									<p><?=$month_count;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Кол-во заявок в день</h1>
									<p><?=$today_month_request;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Устройство</h1>
									<div class="d-flex justify-content-left align-items-center mt-3">
										<div class="substat"> 
										<?php if($month_mobile_percent > $month_desktop_percent) { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$month_desktop;?><small class="pr-red"><?=$month_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$month_mobile;?><small class="pr-green"><?=$month_mobile_percent;?>%</small></p>
										<?php } else { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$month_desktop;?><small class="pr-green"><?=$month_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$month_mobile;?><small class="pr-red"><?=$month_mobile_percent;?>%</small></p>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center mt-4">
							<h1 class="block-title m-0 p-0">Новые заявки</h1>
							<h1 class="block-title m-0 p-0"><?=$month_count;?></h1>
						</div>
						<span style='display: none;' id='get_month_stat' data-json='<?=$month_array;?>'></span>
						<div id="month_stat" style="background: #F0F2F6;border-radius: 16px;width: 100%; margin-top: 30px; height: 278px;">
						</div>
					</span>

					<span id="block_stat_year" class="block_stat_class" style="display: none;">
						<?php
						$year_date = date("Y-m-d H:i:s", strtotime("-365 days"));
						$get_year_stat = db_query("SELECT count(*) as total, CAST(t_requests.t_add_date AS DATE) AS DATE_PURCHASED FROM t_requests WHERE t_add_date > '$year_date' GROUP BY DATE_PURCHASED");
						$year_array = [];
						$year_count = 0;

						foreach ($get_year_stat as $value) {

              array_push($year_array, [
                "y" => $value['DATE_PURCHASED'],
                "deps" => (int)$value['total']
              ]);

              $year_count = $year_count + (int)$value['total'];
						}

						if($year_count < 1) {
              for($i=0; $i < 5; $i++) {
                array_push($year_array, [
                  "y" => date("Y-m-d"),
                  "deps" => 0
                ]);
              }
              
            }

            $year_array = json_encode($year_array);

            if($year_count > 31) {
            	$today_year_request = (int)$year_count / 31;
            	$today_year_request = (int)$today_year_request;
            } else {
            	$today_year_request = '1 <';
            }

            $get_year_device = db_fetch("SELECT count(*) as total FROM t_requests WHERE (t_add_device = 'Linux' OR t_add_device = 'MacOS' OR t_add_device = 'Windows') AND t_add_date > '$year_date' GROUP BY t_id");
            $year_desktop = (int)$get_year_device['total'];
            $year_mobile = 0;

            $year_desktop_percent = 0;
            $year_mobile_percent = 0;
            if($year_count > 0) {
            	$year_mobile = (int)$year_count - (int)$year_desktop;
            }

            $year_mobile_percent = (($year_count - $year_desktop) * 100) / $year_count;
            $year_mobile_percent = (int)$year_mobile_percent;
            $year_desktop_percent = 100 - (int)$year_mobile_percent;
            

						?>
						<div class="row">
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Новые заявки</h1>
									<p><?=$year_count;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Кол-во заявок в день</h1>
									<p><?=$today_year_request;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Устройство</h1>
									<div class="d-flex justify-content-left align-items-center mt-3">
										<div class="substat"> 
										<?php if($year_mobile_percent > $year_desktop_percent) { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$year_desktop;?><small class="pr-red"><?=$year_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$year_mobile;?><small class="pr-green"><?=$year_mobile_percent;?>%</small></p>
										<?php } else { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$year_desktop;?><small class="pr-green"><?=$year_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$year_mobile;?><small class="pr-red"><?=$year_mobile_percent;?>%</small></p>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center mt-4">
							<h1 class="block-title m-0 p-0">Новые заявки</h1>
							<h1 class="block-title m-0 p-0"><?=$year_count;?></h1>
						</div>
						<span style='display: none;' id='get_year_stat' data-json='<?=$year_array;?>'></span>
						<div id="year_stat" style="background: #F0F2F6;border-radius: 16px;width: 100%; margin-top: 30px; height: 278px;">
						</div>
					</span>

					<span id="block_stat_all" class="block_stat_class" style="display: none;">
						<?php
						$all_date = date("Y-m-d H:i:s", strtotime("-10 years"));
						$get_all_stat = db_query("SELECT count(*) as total, CAST(t_requests.t_add_date AS DATE) AS DATE_PURCHASED FROM t_requests WHERE t_add_date > '$all_date' GROUP BY DATE_PURCHASED");
						$all_array = [];
						$all_count = 0;

						foreach ($get_all_stat as $value) {

              array_push($all_array, [
                "y" => $value['DATE_PURCHASED'],
                "deps" => (int)$value['total']
              ]);

              $all_count = $all_count + (int)$value['total'];
						}

						if($all_count < 1) {
              for($i=0; $i < 5; $i++) {
                array_push($all_array, [
                  "y" => date("Y-m-d"),
                  "deps" => 0
                ]);
              }
              
            }

            $all_array = json_encode($all_array);

            if($all_count > 31) {
            	$today_all_request = (int)$all_count / 31;
            	$today_all_request = (int)$today_all_request;
            } else {
            	$today_all_request = '1 <';
            }

            $get_all_device = db_fetch("SELECT count(*) as total FROM t_requests WHERE (t_add_device = 'Linux' OR t_add_device = 'MacOS' OR t_add_device = 'Windows') AND t_add_date > '$all_date' GROUP BY t_id");
            $all_desktop = (int)$get_all_device['total'];
            $all_mobile = 0;

            $all_desktop_percent = 0;
            $all_mobile_percent = 0;
            if($all_count > 0) {
            	$all_mobile = (int)$all_count - (int)$all_desktop;
            }

            $all_mobile_percent = (($all_count - $all_desktop) * 100) / $all_count;
            $all_mobile_percent = (int)$all_mobile_percent;
            $all_desktop_percent = 100 - (int)$all_mobile_percent;
            

						?>
						<div class="row">
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Новые заявки</h1>
									<p><?=$all_count;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Кол-во заявок в день</h1>
									<p><?=$today_all_request;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Устройство</h1>
									<div class="d-flex justify-content-left align-items-center mt-3">
										<div class="substat"> 
										<?php if($all_mobile_percent > $all_desktop_percent) { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$all_desktop;?><small class="pr-red"><?=$all_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$all_mobile;?><small class="pr-green"><?=$all_mobile_percent;?>%</small></p>
										<?php } else { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$all_desktop;?><small class="pr-green"><?=$all_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$all_mobile;?><small class="pr-red"><?=$all_mobile_percent;?>%</small></p>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center mt-4">
							<h1 class="block-title m-0 p-0">Новые заявки</h1>
							<h1 class="block-title m-0 p-0"><?=$all_count;?></h1>
						</div>
						<span style='display: none;' id='get_all_stat' data-json='<?=$all_array;?>'></span>
						<div id="all_stat" style="background: #F0F2F6;border-radius: 16px;width: 100%; margin-top: 30px; height: 278px;">
						</div>
					</span>

					<span id="block_stat_ned" class="block_stat_class" style="display: none;">
						<?php
						$ned_date = date("Y-m-d H:i:s", strtotime("-7 days"));
						$get_ned_stat = db_query("SELECT count(*) as total, CAST(t_requests.t_add_date AS DATE) AS DATE_PURCHASED FROM t_requests WHERE t_add_date > '$ned_date' GROUP BY DATE_PURCHASED");
						$ned_array = [];
						$ned_count = 0;

						foreach ($get_ned_stat as $value) {

              array_push($ned_array, [
                "y" => $value['DATE_PURCHASED'],
                "deps" => (int)$value['total']
              ]);

              $ned_count = $ned_count + (int)$value['total'];
						}

						if($ned_count < 1) {
              for($i=0; $i < 5; $i++) {
                array_push($ned_array, [
                  "y" => date("Y-m-d"),
                  "deps" => 0
                ]);
              }
              
            }

            $ned_array = json_encode($ned_array);

            if($ned_count > 31) {
            	$today_ned_request = (int)$ned_count / 31;
            	$today_ned_request = (int)$today_ned_request;
            } else {
            	$today_ned_request = '1 <';
            }

            $get_ned_device = db_fetch("SELECT count(*) as total FROM t_requests WHERE (t_add_device = 'Linux' OR t_add_device = 'MacOS' OR t_add_device = 'Windows') AND t_add_date > '$ned_date' GROUP BY t_id");
            $ned_desktop = (int)$get_ned_device['total'];
            $ned_mobile = 0;

            $ned_desktop_percent = 0;
            $ned_mobile_percent = 0;
            if($ned_count > 0) {
            	$ned_mobile = (int)$ned_count - (int)$ned_desktop;
            }

            $ned_mobile_percent = (($ned_count - $ned_desktop) * 100) / $ned_count;
            $ned_mobile_percent = (int)$ned_mobile_percent;
            $ned_desktop_percent = 100 - (int)$ned_mobile_percent;
            

						?>
						<div class="row">
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Новые заявки</h1>
									<p><?=$ned_count;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Кол-во заявок в день</h1>
									<p><?=$today_ned_request;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="block-stat">
									<h1>Устройство</h1>
									<div class="d-flex justify-content-left align-items-center mt-3">
										<div class="substat"> 
										<?php if($ned_mobile_percent > $ned_desktop_percent) { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$ned_desktop;?><small class="pr-red"><?=$ned_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$ned_mobile;?><small class="pr-green"><?=$ned_mobile_percent;?>%</small></p>
										<?php } else { ?>
										<h3>Десктоп</h3>
										<p class="m-0"><?=$ned_desktop;?><small class="pr-green"><?=$ned_desktop_percent;?>%</small></p>
										</div>
										<div class="substat"> 
										<h3>Мобильные</h3>
										<p class="m-0"><?=$ned_mobile;?><small class="pr-red"><?=$ned_mobile_percent;?>%</small></p>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center mt-4">
							<h1 class="block-title m-0 p-0">Новые заявки</h1>
							<h1 class="block-title m-0 p-0"><?=$ned_count;?></h1>
						</div>
						<span style='display: none;' id='get_ned_stat' data-json='<?=$ned_array;?>'></span>
						<div id="ned_stat" style="background: #F0F2F6;border-radius: 16px;width: 100%; margin-top: 30px; height: 278px;">
						</div>
					</span>

				</div>
			</div>
		</div>
	</main>
	
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</body>

</html>

<script type="text/javascript">
	var old_morris = 'month';
	function changeTab(func) {
		$(".tab-time").removeClass('active');
		$("#stat_" + func).addClass("active");
		$(".block_stat_class").css("display", "none");
		$("#block_stat_" + func).css("display", "block");

		if ($('#'+func+'_stat').length) {
			  $("#"+old_morris +"_stat").html("");
		    Morris.Area({
		        element: func+'_stat',
		        data: $('#get_'+func+'_stat').data('json'),
		        xkey: 'y',
		        ykeys: ['deps'],
		        labels: ['Новых заявок'],
		        lineColors: ['#039cfd'],
		        parseTime: false,
		        resize: true
		    });
		    old_morris = func;
		}
	}

	$( document ).ready(function() {

	    if ($('#month_stat').length) {
			    Morris.Area({
			        element: 'month_stat',
			        data: $('#get_month_stat').data('json'),
			        xkey: 'y',
			        ykeys: ['deps'],
			        labels: ['Новых заявок'],
			        lineColors: ['#039cfd'],
			        parseTime: false,
			        resize: true
			    });
			}


	});
</script>

<style type="text/css">
	.morris-hover{
		position: absolute;
    z-index: 1000;
    background: white;
    padding: 4px;
    font-size: 13px;
    border-radius: 5px;
    border: 1px solid silver;
    text-align: center;
	}
</style>