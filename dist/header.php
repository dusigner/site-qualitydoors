<?php
	$_GET['cont'] .= ".php";

	if( !file_exists( $_GET['cont'] ) ){

		$_GET['cont'] = "home.php";
	}

    $home = $_GET['cont'];
?> <!DOCTYPE html><html lang="pt-br"><head><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="utf-8"><meta name="google-site-verification" content="-jN3WdFf_gaIg6-hgHvJtAMLeo32aL7LSa-U_xbiQL4"> <?php include "metatags.php"; ?> <meta name="viewport" content="width=device-width,initial-scale=1"><meta name="geo.region" content="BR-SP"><meta name="geo.placename" content="S&atilde;o Paulo"><meta name="geo.position" content="-23.6232340;-46.6239710"><meta name="ICBM" content="-23.6232340,-46.6239710"><meta name="author" content="@dusigner"><meta name="revisit-after" content="45 days"></head> <?php if ($home === "home.php"): ?> <body> <?php else: ?> <body> <?php endif ?> <div class="header"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="fa fa-bars"></i></button><div class="logo"><a href="index.php" title="Quality Doors Portões"><img src="img/logotipo-quality-doors.png" alt="Portão Basculante" class="animated bounceInDown"></a></div><div class="tel"><span>Portões Automáticos</span><p>Ligue Já: <a href="tel:+1123096000" title="Telefone">11 2309-6000</a> / <a href="tel:+1123096006" title="Telefone">2309-6006</a></p></div> <?php include ("menu.php"); ?> </div></div></body></body></html>