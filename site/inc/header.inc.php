<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Probid</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
/* AddThis Vertical Hover Menu */

.addthis_toolbox .custom_hover {
    position: relative;
}

.addthis_toolbox .custom_hover .custom_button {
    font-weight: bold;
    padding:0;
    color: #9B8F55;
    cursor: pointer;
    -moz-border-radius: 5px 5px 0 0;
    -webkit-border-radius: 5px 5px 0 0;
}

.addthis_toolbox .custom_hover .custom_button.active {
    background-color: #eee;
}

.addthis_toolbox .hover_menu  {
    display: none;
    position: absolute;
    background: #fff;
}

.addthis_toolbox .custom_hover .tower {
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius-topleft: 0;

}
.addthis_toolbox .hover_menu  {
    width: 136px;
    padding: 1px;
    border: 3px solid #eee;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    position: absolute;
    z-index: 99;
}

.addthis_toolbox .hover_menu a {
    position: relative;
    display: block;
    width: 102px;
    padding: 4px 0 4px 34px;
    text-decoration: none;
    color: #9B8F55;
}

.addthis_toolbox .hover_menu a:hover {
    background: #f5f5f5;
    color: #027999;
    text-decoration: none;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
}

.addthis_toolbox .hover_menu span {
    position: absolute;
    left: 14px;
    top: 4px;
    z-index: 99
}

.addthis_toolbox .hover_menu .more {
    border-top: solid 1px #eee;
    padding: 10px 0 0 0;
    margin: 10px 10px 0 10px;
    text-align: center;
}

.addthis_toolbox .hover_menu .more a {
    padding: 4px 0;
    margin: 0;
}

.addthis_toolbox .hover_menu .more a:hover {
    background: none;
}
.addthis_toolbox .hover_menu .more span {
    display: none;
}
</style>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=homewebbing"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript">
$(function() {
    var delay = 400;

    function hideMenu() {
        if (!$('.custom_button').data('in') && !$('.hover_menu').data('in') && !$('.hover_menu').data('hidden')) {
            $('.hover_menu').fadeOut('fast');
            $('.custom_button').removeClass('active');
            $('.hover_menu').data('hidden', true);
        }
    }

    $('.custom_button, .hover_menu').mouseenter(function() {
        $('.hover_menu').fadeIn('fast');
        $('.custom_button').addClass('active');
        $(this).data('in', true);
        $('.hover_menu').data('hidden', false);
    }).mouseleave(function() {
        $(this).data('in', false);
        setTimeout(hideMenu, delay);
    });

});
</script>

</head>
<body>
<div class="wrapper">
  <div class="header"> <a href="?home" title="Probid" class="logo">
    <h1>Probid</h1>
    </a>
    <ul class="menuRight">
      <li><a href="?fale-conosco">Fale conosco</a>|</li>
      <li><a href="?trabalhe-conosco">Trabalhe conosco</a>|</li>
      <li><a href="#">Webmail</a></li>
    </ul>
  </div>
  <ul class="mainMenu">
     <li><a href="?quem-somos" title="Empresa" class="empresa">EMPRESA</a></li>
     <li><a href="?solucoes-e-servicos" title="Solucoes e Servicos" class="solucoeServicos">SOLUÇOES E SERVIÇOS</a></li>
     <li><img src="images/logo-2.jpg" alt=""/></li>
     <li><a href="?projetos" title="Projetos" class="projetos">PROJETOS</a></li>
     <li><a href="?clientes-e-parceiros" title="Clientes e parceiros" class="clientesParceiros">CLIENTES E PARCEIROS</a></li>
  </ul>