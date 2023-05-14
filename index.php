<!-- 
                                                _
                                                \`*-.
                                                 )  _`-.
                                                .  : `. .
                                                : _   '  \\
                                                ; *` _.   `*-._
                                                `-.-'          `-.
                                                  ;       `       `.
                                                  :.       .        \\
                                                  . \  .   :   .-'   .
                                                  '  `+.;  ;  '      :
                                                  :  '  |    ;       ;-.
                                                  ; '   : :`-:     _.`* ;
                                               .*' /  .*' ; .*`- +'  `*'
                                               `*-*   `*-*  `*-*' Cam
=========================================================================
=========================================================================
==================== ✨ Faça sempre uma boa ação 😊 ====================
=========================================================================
=========================================================================
======================== vvv vvv DxnDxn vvv vvv =========================
=========================================================================
======================== Thanks for your visit! =========================
=========================================================================
>>--->
<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Motivation</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="text-center float-center" style="background-color: #E6E6E6; background-image: url(assets/background.png); background-position: center;  background-repeat: no-repeat;">
	<section class="content">
		<div class="container">
			<div class="rows">
				<?php
				$url = "cookies.json";
				$conselhos = json_decode(file_get_contents($url));
				if (count($conselhos->collection)) {
					$i = 0;
					foreach ($conselhos->collection as $collection) {
						$i++;
						if ($i - 1 == date("d")) {
				?>
							<div class="col-md-12" style="margin-top: 400px">
								<div class="text-center">
									<h1 style="font-weight: bold; color: black"><?= $collection->phrase ?></h1>
									<h3 style="font-weight: bold; font-size: 24px;  color: red"><?= $collection->author ?></h3>
								</div>
							</div>
					<?php
						}
					}
				} else { ?>
					<strong>Nenhum conselho retornado pela API</strong>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	<script>
		var contador = <?php echo strtotime(date('Y-m-d H:i:s', strtotime(date('Y-m-d') . ' +1 day'))) ?> * 1000;
		var agora = <?php echo time() ?> * 1000;

		var x = setInterval(function() {
			agora = agora + 1000;
			var distancia = contador - agora;
			var dias = Math.floor(distancia / (1000 * 60 * 60 * 24));
			var horas = Math.floor((distancia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
			var segundos = Math.floor((distancia % (1000 * 60)) / 1000);
			document.getElementById("timer").innerHTML = dias + "d " + horas + "h " +
				minutos + "m " + segundos + "s ";
			if (distancia < 0) {
				clearInterval(x);
				document.getElementById("timer").innerHTML = "EXPIRADO";
			}
		}, 1000);
	</script>
	<br>
	<br>
	<small class="text-uppercase">PRÓXIMA FRASE EM:
		<p id="timer"></p>
	</small>
</body>



</html>
