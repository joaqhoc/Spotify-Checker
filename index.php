<head title="Priv Network">
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