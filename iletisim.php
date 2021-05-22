<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0 shrink-to-fit=no">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <title>Mirasımız</title>
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
					<li class="nav-item">
						<a class="nav-link px-3" href="iletisim.html">İletişim</a>
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
				<form class="d-flex">
					<input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn  btn-sm btn-info" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
    
    <div class="adminIletisim">
        <div class="row">
            <div class="col adminIletisimTablo">
                <table>
                    <tr>
                        <th>
                            İsim Soyisim
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["isim"]." ".$_POST["soyisim"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Telefon Numarası
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["telefon"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Cinsiyet
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["cinsiyet"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Amaç
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php $amaclar=$_POST['amaç']; foreach($amaclar as $amac){echo" ".$amac.",";}?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Konu
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["konu"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kime
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["kime"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mesaj
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["mesaj"]?>
                        </td>
                    </tr>
                </table>
            <h2></h2>
            </div>
        </div>
    </div>

    <div id="footer"><!-- footer cubugu -->
      <h1>Footer</h1>
    </div>

  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>