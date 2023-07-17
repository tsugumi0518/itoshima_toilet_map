<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<title>糸島釣り場トイレマップ | ITOSHIMA FISHING SPOT TOILET MAP</title>
	</head>
	<body>
		<div class="bg_area">
			<div class="hero_area"> 
				<header>
					<h1 class="hero_area_wrap">
						<span class="hero_area_title_e">ITOSHIMA<br>FISHING SPOT<br>TOILET MAP</span>
						<span class="hero_area_title_j">糸島釣り場<br>トイレマップ</span>
					</h1>
				</header>
				<div class="hero_img">
					<img src="images/top_map.png" alt="トップの地図の画像">
				</div><!--hero_img end-->
				<div class="top_pin_wrap">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
					<img class="top_pin" src="images/top_pin.svg" alt="トップのピンの画像">
				</div>
			</div><!--hero_area end-->
		</div><!--bg_area end-->

		<main>
			<section class="section description"><!-- .re-search end -->
				<div class="desc">
					<h2>釣りの楽しみを途切れさせない<br>
						安心のトイレ情報サイト</h2>
					<p>
						釣り場近くにトイレがない！<br>
						そんなお悩みを解決する釣り場トイレマップサイトです。<br>
						あなたの場所から一番近いトイレをすぐに見つけられます。
					</p>
					<div class="img_toilet">
						<img src="images/Group 173@2x.png" alt="トイレマークの画像">
					</div><!-- img_toilet end -->
				</div><!-- desc end -->
				<!------------波波------------------------------->
					<svg id="sea_animation" class="svg" width="100%" height="50">
							<defs>
						<!-- パス共通（左右に広げている。微調整） -->
						<path id="path_nami22" d="中略">
						<animate id="animate_nami22"
							attributeName="d"
							dur="2s"
							repeatCount="indefinite"
							values="M -40 10 Q -30 20 -20 10 Q -10  0 0 10 Q 10 20 20 10 Q 30  0 40 10 Q 50 20 60 10 Q 70 20 80 10 V 29 H -40 Z;
									M -40 10 Q -30  0 -20 10 Q -10 20 0 10 Q 10  0 20 10 Q 30 20 40 10 Q 50  0 60 10 Q 70  0 80 10 V 29 H -40 Z;
									M -40 10 Q -30 20 -20 10 Q -10  0 0 10 Q 10 20 20 10 Q 30  0 40 10 Q 50 20 60 10 Q 70 20 80 10 V 29 H -40 Z;" />
						</path>
						<!-- 奥（行ったり来たり） -->
						<pattern id="ptn_nami22_a" x="0" y="0" width="40" height="30" patternUnits="userSpaceOnUse" >
						<use href="#path_nami22" fill="#defafa" />
						<animate
							attributeName="x"
							dur="4s"
							repeatCount="indefinite"
							values="0; 40; 0"/>
						</pattern>
						<!-- 中（左に移動） -->
						<pattern id="ptn_nami22_b" x="0" y="10" width="40" height="40" patternUnits="userSpaceOnUse">
						<use href="#path_nami22" fill="#5CE1E6" />
						<animate
							attributeName="x"
							dur="2s"
							repeatCount="indefinite"
							values="0; -40"/>
						</pattern>
						<!-- 手前（右に移動） -->
						<pattern id="ptn_nami22_c" x="0" y="20" width="40" height="50" patternUnits="userSpaceOnUse">
						<use href="#path_nami22" fill="#0067C0" />
						<animate
							attributeName="x"
							dur="2s"
							repeatCount="indefinite"
							values="0; 40"/>
						</pattern>
					</defs>
					<!-- パターンで塗りつぶす、大きさ調整 -->
					<rect x="0" y="0" width="1280" height="30" fill="url(#ptn_nami22_a)"></rect>
					<rect x="0" y="0" width="1280" height="40" fill="url(#ptn_nami22_b)" transform="scale(1.5,1)"></rect>
					<rect x="0" y="0" width="1280" height="50" fill="url(#ptn_nami22_c)" transform="scale(2,1)"></rect>
				</svg>
				<!------------波波　end------------------------------->
			</section>

			<section id="serch_area" class="section sec02">
				<div class="adjust">
					<h2 class="title">Let's TRY!</h2>
					<div class="form_container">
						<div class="form_tab">
							<div class="form_tab_item area active">
								<h3 class="sub_title">エリアで探す</h3>
							</div>
							<div class="form_tab_item fishingspot">
								<h3 class="sub_title">漁港で探す</h3>
							</div>
						</div>

						<div class="area form_wrap"> 
							<form class="area_form" action="index.php#result_area" method="POST">
								<div class="map_container">
									<div class="img">
										<img class="active" src="images/area_whole.png" alt="">
									</div>
									<div class="area_1">
										<input id="area_1" type="checkbox" name="area_id[]" value="a100">
										<label for="area_1"></label>
									</div>
									<div class="area_2">
										<input id="area_2" type="checkbox" name="area_id[]" value="a101">
										<label for="area_2"></label>
									</div>
									<div class="area_3">
										<input id="area_3" type="checkbox" name="area_id[]" value="a102">
										<label for="area_3"></label>
									</div>
								</div>
								<div class="more_serch_container">
									<div class="more_serch_wrap">
										<h3 class="sub_title">さらに絞り込む</h3>
										<div class="more_serch_item">
											<label for="institution">施設で絞り込む</label>
											<div class="check_wrap">
												<div class="input_wrap">
													<input type="checkbox" id="institution" name="institution[]" value="convenience_store"><span>コンビニ</span>
												</div>
												<div class="input_wrap">
													<input type="checkbox" id="institution" name="institution[]" value="public_toilet"><span>公衆トイレ</span>
												</div>
												<div class="input_wrap">
													<input type="checkbox" id="institution" name="institution[]" value="fishing_shop"><span>釣り具店</span>
												</div>
											</div>
										</div>
										<div class="more_serch_item">
											<label for="requirement">条件で絞り込む</label>
											<div class="check_wrap">
												<div class="input_wrap">
													<input type="checkbox" id="requirement" name="requirement[]" value="24hours"><span>24時間営業</span>
												</div>
												<div class="input_wrap">
													<input type="checkbox" id="requirement" name="requirement[]" value="parking"><span>駐車場あり</span>
												</div>
											</div>
										</div>
										<div class="more_serch_item">
											<label for="distance">距離で絞り込む</label>
											<div class="check_wrap">
												<div class="input_wrap">
													<input type="checkbox" id="distance" name="distance[]" value="0.5km"><span>500m</span>
												</div>
												<div class="input_wrap">
													<input type="checkbox" id="distance" name="distance[]" value="1km"><span>1km</span>
												</div>
												<div class="input_wrap">
													<input type="checkbox" id="distance" name="distance[]" value="3km"><span>3km</span>
												</div>
												<div class="input_wrap">
													<input type="checkbox" id="distance" name="distance[]" value="5km"><span>5km</span>
												</div>
											</div>
										</div>
										<input type="submit" name="検索" class="btn submit_btn" value="検索">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php 
				if (!isset($_POST["area_id"])) :?>  
				<p class="form_error">※エリアを選択してください！</p>
			<?php else:?>

			</section>

            <!-- php -->
            <?php 
				$area_id = @$_POST["area_id"]; // エリアの配列を受け取る
				$where = "WHERE t_store.area_id = "; // WHERE句
				$group = "GROUP BY store_name"; // GROUP BY句
				$sql_institution = "";
				$sql_requirement = "";
				$sql_distance = "";

				if (isset($_POST["institution"])) { // もし施設の情報があったら
					$institution = @$_POST["institution"]; 	// 施設の配列を受け取る

					// 配列を一つずつ確認してsql用の変数に文字列として格納する
					foreach ($institution as $institution_value) { 
						switch ($institution_value) {
							case "convenience_store" :
								$sql_institution .= "AND t_store.convenience_store = \"1\"";
							break;
							case "public_toilet" :
								if(strpos($sql_institution,"convenience_store") !== false) {
									$sql_institution .= "OR t_store.public_toilet = \"1\"";
								} else {
									$sql_institution .= "AND t_store.public_toilet = \"1\"";
								}
							break;
							case "fishing_shop" :
								$sql_institution .= ", fishing_shop = \"1\"";
								if(strpos($sql_institution,"convenience_store") !== false || strpos($sql_institution,"public_toilet") !== false) {
									$sql_institution .= "OR t_store.fishing_shop = \"1\"";
								} else {
									$sql_institution .= "AND t_store.fishing_shop = \"1\"";
								}
							break;
						}
					}
				}

				if (isset($_POST["requirement"])) { // もし条件の情報があったら
					$requirement = @$_POST["requirement"]; 	// 条件の配列を受け取る

					// 配列を一つずつ確認してsql用の変数に文字列として格納する
					foreach ($requirement as $requirement_value) { 
						switch ($requirement_value) {
							case "24hours" :
								$sql_requirement .= "AND t_store.24hours = \"1\"";
							break;
							case "parking" :
								if(strpos($sql_requirement,"24hours") !== false) {
									$sql_requirement .= "OR t_store.parking = \"1\"";
								} else {
									$sql_requirement .= "AND t_store.parking = \"1\"";
								}
							break;
						}
					}
				}
				if (isset($_POST["distance"])) { // もし条件の情報があったら
					$distance = @$_POST["distance"]; 	// 条件の配列を受け取る

					// 配列を一つずつ確認してsql用の変数に文字列として格納する
					foreach ($distance as $distance_value) { 
						switch ($distance_value) {
							case "0.5km" :
								$sql_distance .= "AND t_store.24hours <= 0.5";
							break;
							case "1km" :
								if(strpos($sql_distance,"24hours") !== false) {
									$sql_distance .= "OR t_store.parking <= 1";
								} else {
									$sql_distance .= "AND t_store.parking <= 1";
								}
							break;
							case "3km" :
								if(strpos($sql_distance,"24hours") !== false) {
									$sql_distance .= "OR t_store.parking <= 3";
								} else {
									$sql_distance .= "AND t_store.parking <= 3";
								}
							break;
							case "5km" :
								if(strpos($sql_distance,"24hours") !== false) {
									$sql_distance .= "OR t_store.parking <= 5";
								} else {
									$sql_distance .= "AND t_store.parking <= 5";
								}
							break;
						}
					}
				}


				// DBに接続
				// $dsn = "mysql:host=localhost;dbname=tsuri;charset=utf8";
				// $user = "tennisuser_2";
				// $password = "password"; // データベースのuserのパスワード
				include 'includes/db_info.php';
				
			?>
			<section id="result_area"  class="section">
				<div class="adjust">
					<!-- 佐藤追加　ここから↓ -->
					<ul class="logo_desc">
							<li>
								<img src="images/Group 51@2x.png" alt="コンビニロゴ">
								<span>…コンビニ</span>
							</li>
							<li>
								<img src="images/Group 52@2x.png" alt="公衆トイレロゴ">
								<span>…公衆トイレ</span>
							</li>
							<li>
								<img src="images/Group 53@2x.png" alt="釣り具屋ロゴ">
								<span>…釣り具店</span>
							</li>
							<li>
								<img src="images/Group 54@2x.png" alt="駐車場ロゴ">
								<span>…駐車場</span>
							</li>
						</ul>
						<!-- 	佐藤追加　ここまで↑	 -->
					<?php foreach ($area_id as $area_value):
					// echo $area_value;
						switch ($area_value) :
						case "a100": //二見エリアの時の処理
						$sql_area_id = "\"a100\"";
						$sql_left = "SELECT DISTINCT * FROM t_store LEFT JOIN t_area ON t_store.area_id = t_area.area_id $where $sql_area_id $sql_institution $sql_requirement $sql_distance $group";
						$sql_right = "SELECT DISTINCT * FROM t_store RIGHT JOIN t_area ON t_store.area_id = t_area.area_id $where $sql_area_id $sql_institution $sql_requirement $sql_distance $group";
					
						try {
							$db = new PDO($dsn, $user, $password);
							$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
							$stmt = $db->prepare("$sql_left UNION $sql_right");
							$stmt->execute();
						} catch (PDOException $e) {
							exit("エラー:" . $e->getMessage());
						}	
					?>
					<h2 class="title">二見エリアのトイレ</h2>
					
					<ul class="infoall">
						<?php while ($futami = $stmt->fetch()): ?>
						<li class="info">
							<div class="info_top">
								<h3 class="card_title"><?php echo $futami["store"];?><br><?php echo $futami["store_name"];?></h3>
								<dl><!--変更スタート-->
									<dt>&#12304住所&#12305</dt>
									<dd><?php echo $futami["store_ad"];?></dd>
									<dt>&#12304時間&#12305</dt>
									<dd><?php if ($futami["business_hours"] == '24') {
											echo $futami["business_hours"] . '時間';
										} else {
											echo $futami["business_hours"];
										}?>
									</dd>
									<dt>&#12304駐車場&#12305</dt>
									<dd><?php if ($futami["parking"] == '1') {
											echo '有';
										} else {
											echo '無';
										} ?>
									</dd>
									<!-- <dt>&#12304距離&#12305</dt>
									<dd><?php //echo $futami["store_name"];?>から約<?php //echo $futami["distance"];?>km</dd> -->
									<dt>&#12304備考&#12305</dt>
									<dd><?php echo $futami["note"];?></dd>
								</dl><!--変更　ここまで-->
							</div>
							<div class="info_bottom">
							<div class="logo">
								<!--変更した箇所2start:磯村-->
								<div class="color-btn <?php echo $futami["area_id"];?>"><?php echo $futami["area_name"];?>エリア
								</div>
								<!--変更した箇所2end:磯村-->

								<ul class="icon_wrap">
									<li class="icon_item"><!--icon_blue active追記-->
										<span class="icon_white"><img src="images/store_white.svg" alt="コンビニアイコン白"></span>
										<span class="icon_blue active<?php echo $futami["convenience_store"] ?>"><img src="images/store_blue.svg" alt="コンビニアイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/toilet_white.svg" alt="公衆トイレアイコン白"></span>
										<span class="icon_blue active<?php echo $futami["public_toilet"] ?>"><img src="images/toilet_blue.svg" alt="公衆トイレアイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/fishingshop_white.svg" alt="釣り具屋アイコン白"></span>
										<span class="icon_blue active<?php echo $futami["fishing_shop"] ?>"><img src="images/fishingshop_blue.svg" alt="釣り具屋アイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/parking_white.svg" alt="駐車場アイコン白"></span>
										<span class="icon_blue active<?php echo $futami["parking"] ?>"><img src="images/parking_blue.svg" alt="駐車場アイコン青"></span>
									</li>
								</ul>
							</div>
							<div class="map-area">
								<iframe width="300" height="200" style="border:0" loading="lazy" allowfullscreen
									src="https://www.google.com/maps/embed/v1/place?q=<?php echo $futami['store_ad']; ?>&key=AIzaSyDBW7HrNsSKUlYMedXI8h-umPpVzMx2fw8">
								</iframe>
							</div>
							</div>
						</li>
					<?php endwhile;?>   
					</ul><!-- end infoall -->
					<?php break; ?>
	
					<?php case "a101": //芥屋・志摩エリアの時の処理
						$sql_area_id = "\"a101\"";
						$sql_left = "SELECT DISTINCT * FROM t_store LEFT JOIN t_area ON t_store.area_id = t_area.area_id $where $sql_area_id $sql_institution $sql_requirement $sql_distance $group";
						$sql_right = "SELECT DISTINCT * FROM t_store RIGHT JOIN t_area ON t_store.area_id = t_area.area_id $where $sql_area_id $sql_institution $sql_requirement $sql_distance $group";
					
						
						try {
							$db = new PDO($dsn, $user, $password);
							$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
							$stmt = $db->prepare("$sql_left UNION $sql_right");
							$stmt->execute();
						} catch (PDOException $e) {
							exit("エラー:" . $e->getMessage());
						}	
					?>
					<h2 class="title">芥屋・志摩エリアのトイレ</h2>
					<ul class="infoall">
						<?php while ($keya = $stmt->fetch()): ?>
							<li class="info">
							<div class="info_top">
								<h3 class="card_title"><?php echo $keya["store"];?><br><?php echo $keya["store_name"];?></h3>
								<dl><!--変更スタート-->
									<dt>&#12304住所&#12305</dt>
									<dd><?php echo $keya["store_ad"];?></dd>
									<dt>&#12304時間&#12305</dt>
									<dd><?php if ($keya["business_hours"] == '24') {
											echo $keya["business_hours"] . '時間';
										} else {
											echo $keya["business_hours"];
										}?>
									</dd>
									<dt>&#12304駐車場&#12305</dt>
									<dd><?php if ($keya["parking"] == '1') {
											echo '有';
										} else {
											echo '無';
										} ?>
									</dd>
									<!-- <dt>&#12304距離&#12305</dt>
									<dd><?php //echo $keya["store_name"];?>から約<?php //echo $keya["distance"];?>km</dd> -->
									<dt>&#12304備考&#12305</dt>
									<dd><?php echo $keya["note"];?></dd>
								</dl><!--変更　ここまで-->
							</div>
							<div class="info_bottom">
							<div class="logo">
								<!--変更した箇所2start:磯村-->
								<div class="color-btn <?php echo $keya["area_id"];?>"><?php echo $keya["area_name"];?>エリア
								</div>
								<!--変更した箇所2end:磯村-->

								<ul class="icon_wrap">
									<li class="icon_item"><!--icon_blue active追記-->
										<span class="icon_white"><img src="images/store_white.svg" alt="コンビニアイコン白"></span>
										<span class="icon_blue active<?php echo $keya["convenience_store"] ?>"><img src="images/store_blue.svg" alt="コンビニアイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/toilet_white.svg" alt="公衆トイレアイコン白"></span>
										<span class="icon_blue active<?php echo $keya["public_toilet"] ?>"><img src="images/toilet_blue.svg" alt="公衆トイレアイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/fishingshop_white.svg" alt="釣り具屋アイコン白"></span>
										<span class="icon_blue active<?php echo $keya["fishing_shop"] ?>"><img src="images/fishingshop_blue.svg" alt="釣り具屋アイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/parking_white.svg" alt="駐車場アイコン白"></span>
										<span class="icon_blue active<?php echo $keya["parking"] ?>"><img src="images/parking_blue.svg" alt="駐車場アイコン青"></span>
									</li>
								</ul>
							</div>
							<div class="map-area">
								<iframe width="300" height="200" style="border:0" loading="lazy" allowfullscreen
									src="https://www.google.com/maps/embed/v1/place?q=<?php echo $keya['store_ad']; ?>&key=AIzaSyDBW7HrNsSKUlYMedXI8h-umPpVzMx2fw8">
								</iframe>
							</div>
							</div>
						</li>					
						<?php endwhile;?>   
					</ul><!-- end infoall -->
					<?php break; ?>

					<?php case "a102": //西エリアの時の処理
						$sql_area_id = "\"a102\"";
						$sql_left = "SELECT DISTINCT * FROM t_store LEFT JOIN t_area ON t_store.area_id = t_area.area_id $where $sql_area_id $sql_institution $sql_requirement $sql_distance $group";
						$sql_right = "SELECT DISTINCT * FROM t_store RIGHT JOIN t_area ON t_store.area_id = t_area.area_id $where $sql_area_id $sql_institution $sql_requirement $sql_distance $group";
					
						
						try {
							$db = new PDO($dsn, $user, $password);
							$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
							$stmt = $db->prepare("$sql_left UNION $sql_right");
							$stmt->execute();
						} catch (PDOException $e) {
							exit("エラー:" . $e->getMessage());
						}	
					?>
					<h2 class="title">西エリアのトイレ</h2>
					<ul class="infoall">
						<?php while ($nishi = $stmt->fetch()): ?>
<li class="info">
							<div class="info_top">
								<h3 class="card_title"><?php echo $nishi["store"];?><br><?php echo $nishi["store_name"];?></h3>
								<dl><!--変更スタート-->
									<dt>&#12304住所&#12305</dt>
									<dd><?php echo $nishi["store_ad"];?></dd>
									<dt>&#12304時間&#12305</dt>
									<dd><?php if ($nishi["business_hours"] == '24') {
											echo $nishi["business_hours"] . '時間';
										} else {
											echo $nishi["business_hours"];
										}?>
									</dd>
									<dt>&#12304駐車場&#12305</dt>
									<dd><?php if ($nishi["parking"] == '1') {
											echo '有';
										} else {
											echo '無';
										} ?>
									</dd>
									<!-- <dt>&#12304距離&#12305</dt>
									<dd><?php //echo $nishi["store_name"];?>から約<?php //echo $nishi["distance"];?>km</dd> -->
									<dt>&#12304備考&#12305</dt>
									<dd><?php echo $nishi["note"];?></dd>
								</dl><!--変更　ここまで-->
							</div>
							<div class="info_bottom">
							<div class="logo">
								<!--変更した箇所2start:磯村-->
								<div class="color-btn <?php echo $nishi["area_id"];?>"><?php echo $nishi["area_name"];?>エリア
								</div>
								<!--変更した箇所2end:磯村-->

								<ul class="icon_wrap">
									<li class="icon_item"><!--icon_blue active追記-->
										<span class="icon_white"><img src="images/store_white.svg" alt="コンビニアイコン白"></span>
										<span class="icon_blue active<?php echo $nishi["convenience_store"] ?>"><img src="images/store_blue.svg" alt="コンビニアイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/toilet_white.svg" alt="公衆トイレアイコン白"></span>
										<span class="icon_blue active<?php echo $nishi["public_toilet"] ?>"><img src="images/toilet_blue.svg" alt="公衆トイレアイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/fishingshop_white.svg" alt="釣り具屋アイコン白"></span>
										<span class="icon_blue active<?php echo $nishi["fishing_shop"] ?>"><img src="images/fishingshop_blue.svg" alt="釣り具屋アイコン青"></span>
									</li>
									<li class="icon_item">
										<span class="icon_white"><img src="images/parking_white.svg" alt="駐車場アイコン白"></span>
										<span class="icon_blue active<?php echo $nishi["parking"] ?>"><img src="images/parking_blue.svg" alt="駐車場アイコン青"></span>
									</li>
								</ul>
							</div>
							<div class="map-area">
								<iframe width="300" height="200" style="border:0" loading="lazy" allowfullscreen
									src="https://www.google.com/maps/embed/v1/place?q=<?php echo $nishi['store_ad']; ?>&key=AIzaSyDBW7HrNsSKUlYMedXI8h-umPpVzMx2fw8">
								</iframe>
							</div>
							</div>
						</li>					<?php endwhile;?>   
					</ul><!-- end infoall -->
					<?php break; ?>

					<?php endswitch;?>
					<?php endforeach;?>
				</div> <!-- end adjust -->
					</div>
				</section>
				<?php endif;?> <!-- エリア情報を受け取ったかの判定 -->
		</main>

		<div class="re_search">
			<a href="#serch_area">
			<p><div class="arrow_img"></div>もう一度<br>
			検索する</p>
			</a>
		</div><!-- re_search end -->


		<footer>
			<p class="footer_logo">
				<span>糸島釣り場トイレマップ</span>
				ITOSHIMA FISHING SPOT TOILET MAP
			</p>
			<small class="copyright">
				Copyright &copy; 2023 TEAM B All Rights Reserved.
			</small>
		</footer><!-- footer end -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/config.js"></script>
	</body>
</html>
