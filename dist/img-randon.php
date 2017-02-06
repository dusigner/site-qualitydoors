<?php

	$imgQD = rand(1,105);

	if( strlen( $imgQD ) == 1 ){
		$imgQD = '00' . $imgQD;
	}elseif( strlen( $imgQD ) == 2 ){
		$imgQD = '0' . $imgQD;
	}
	
	$imgQD2 = rand(1,105);

	if( strlen( $imgQD2 ) == 1 ){
		$imgQD2 = '00' . $imgQD2;
	}elseif( strlen( $imgQD2 ) == 2 ){
		$imgQD2 = '0' . $imgQD2;
	}
	
	$imgQD3 = rand(1,105);

	if( strlen( $imgQD3 ) == 1 ){
		$imgQD3 = '00' . $imgQD3;
	}elseif( strlen( $imgQD3 ) == 2 ){
		$imgQD3 = '0' . $imgQD3;
	}

?> <div class="row"><ul id="itemContainer"><li><div class="span3"><div class="hover_colour"><a href="img/portao-basculante/portao-automatico-qd<?php echo $imgQD; ?>.jpg" title="Portão Automático Basculante - qd<?php echo $imgQD; ?>" data-rel="prettyPhoto[Basculante]"><img src="img/portao-basculante/portao-automatico-qd<?php echo $imgQD; ?>.jpg" alt="Portão Basculante - qd<?php echo $imgQD; ?>"></a></div><h2>Portão Basculante - qd<?php echo $imgQD; ?></h2><a href="envia-orcamento" title="Orçamento" class="btn btn-medium btn-primary btn-rounded">Orçamento</a><div class="pad15"></div></div></li><li><div class="span3"><div class="hover_colour"><a href="img/portao-basculante/portao-automatico-qd<?php echo $imgQD2; ?>.jpg" title="Portão Automático Basculante - qd<?php echo $imgQD2; ?>" data-rel="prettyPhoto[Basculante]"><img src="img/portao-basculante/portao-automatico-qd<?php echo $imgQD2; ?>.jpg" alt="Portão Basculante - qd<?php echo $imgQD2; ?>"></a></div><h2>Portão Basculante - qd<?php echo $imgQD2; ?></h2><a href="envia-orcamento" title="Orçamento" class="btn btn-medium btn-primary btn-rounded">Orçamento</a><div class="pad15"></div></div></li><li><div class="span3"><div class="hover_colour"><a href="img/portao-basculante/portao-automatico-qd<?php echo $imgQD3; ?>.jpg" title="Portão Automático Basculante - qd<?php echo $imgQD3; ?>" data-rel="prettyPhoto[Basculante]"><img src="img/portao-basculante/portao-automatico-qd<?php echo $imgQD3; ?>.jpg" alt="Portão Basculante - qd<?php echo $imgQD3; ?>"></a></div><h2>Portão Basculante - qd<?php echo $imgQD3; ?></h2><a href="envia-orcamento" title="Orçamento" class="btn btn-medium btn-primary btn-rounded">Orçamento</a><div class="pad15"></div></div></li></ul></div>