$(document).ready(function(){$(".google-maps2").gmap3({map:{options:{center:[-23.55052,-46.633309],zoom:10}},marker:{values:[{address:"Rua Vitor Costa, 681",data:"R. Pêssego de Heliópolis<br>teste"},{address:"R. Marquês de lager",data:"<img src='img/obras/small/qdc052-portoes-automaticos-sp-sao-paulo-capital.jpg' alt='Portão Automático São Paulo' /> "},{address:"R. São João Clímaco",data:"R. Pêssego de Heliópolis<br>teste"},{address:"R. Santa Cruz",data:"R. Pêssego de Heliópolis<br>teste"},{address:"R. Pêssego de Heliópolis",data:"R. Pêssego de Heliópolis<br>teste"}],options:{draggable:!1},events:{mouseover:function(a,b,c){var d=$(this).gmap3("get"),e=$(this).gmap3({get:{name:"infowindow"}});e?(e.open(d,a),e.setContent(c.data)):$(this).gmap3({infowindow:{anchor:a,options:{content:c.data}}})},mouseout:function(){var a=$(this).gmap3({get:{name:"infowindow"}});a&&a.close()}}}})});