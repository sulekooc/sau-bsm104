<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0 shrink-to-fit=no">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <title>Admin</title>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand px-3" href="https://www.sakarya.edu.tr/" target="_blank">SAU</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.html">Home</a>
					</li>
					<li class="nav-item px-3">
						<a class="nav-link px-3" href="sehrim.html">Şehrim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-3" href="mirasımız.html">Mirasımız</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-3" href="ozgecmis.html">Özgeçmiş</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							İlgi Alanlarım
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Spor</a></li>
							<li><a class="dropdown-item" href="#">Film</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
				</ul>
        <li class="nav-item">
				<a class="nav-link px-3" href="iletisim.html">İletişim</a>
			</li>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="login.html">Login</a>
				</li>
			</ul>
				<form class="d-flex">
					<input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn  btn-sm btn-info" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
  <div class="container py-5">
    <div class="row">
      <div class="col loginMesaj">
    <?php if($_POST["mail"]=="sulekooc@gmail.com" && $_POST["sifre"]=="b201210093")
			{
        echo"Hoşgeldiniz ".$_POST["mail"];
        echo"<br>Girişiniz onaylandı.";
      }
      else{
        echo "Girdiğiniz e-posta veya şifre hatalı.";
        header("refresh:3; login.html");
      }    
        ?>
        </div>
      </div>
    </div>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
