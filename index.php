<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	
	<script src="./js/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="./js/main.js"></script>
	<title>Düğün Buketi</title>
</head>
<body>
	
	<header>
		<div class="container">
			<div class="row p-2">
				<div class="col-4 col-sm-3 col-md-2 align-self-center">
					<div class="logo">
						<a href="index.php"><img class="img-fluid animated tada" src="img/web-logo-dugunbuketi.svg" alt="Düğün Buketi"/></a>
					</div>
				</div>
				<div class="col">
					<div class="row justify-content-end align-items-center" style="height: 100%">
						<div class="col-auto ml-auto">
							<div id="nav-icon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="menuToggle">
	
		<input type="checkbox" />
		
		<ul id="menu">
			<li><a href="comment.php">AÇIKLAMA</a></li>
		</ul>

	</div>
	
	<div class="container">
		<div class="row">
		
			<div class="col-12 search-container">
				
				<h2 class="text-center pt-5 pb-3">DÜĞÜNÜNÜZ İÇİN EN UYGUN YERİ BULUN</h2>
				
				<form>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control search-text" placeholder="Ara">
						</div>
						<div class="col-auto">
							<button class="btn btn-danger search-button"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
				
				<div class="search-state"></div>

			</div>
		
		</div>
	</div>

	
</body>
</html>