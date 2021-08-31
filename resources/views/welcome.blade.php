<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Finances VDC!</title>
  </head>
  <body>
  	<!-- Start Landing Page-->
	<div class="landing">
		<div class="container-fluid p-5">
			<div class="row justify-content-center p-5">

				<div class="col-12 text-center">
					<p class="lead text-light">Sistema de uso interno</p>					
				</div>

                <a href="/login"><button class="btn btn-light">Acessar</button></a>

			</div>
		</div>
	</div>
  </body>
</html>

<style>
    .landing {
        height: 120vh;
        width: 100%;
        background: rgb(52,156,255);
        background: linear-gradient(180deg, rgba(52,156,255,1) 0%, rgba(29,101,254,1) 100%);
    }
    img {
        max-width: 100%;
    }
    p.lead {
        font-size: 2rem;
    }
    p.h5 {
        font-weight: 300;
    }
    img,
    a.btn {
        transition: all .8s ease;
    }
    img:hover,
    a.btn:hover {
        transform: scale(1.05);
        cursor: pointer!important;
    }

</style>