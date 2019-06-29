<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ProBid</title>
        <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
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

            $(document).ready(function(){
                $('a:contains("Home")').attr('href','?home');
            });
        </script>
        <!--[if IE]>
            <style>
            div.sub_menu2 > ul li{margin: -4px 0 0 !important;}
            </style>
        <![endif]-->
   </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <ul class="menuRight">
                    <li><a href="?fale-conosco">Fale conosco</a>|</li>
                    <li><a href="?trabalhe-conosco">Trabalhe conosco</a>|</li>
                    <li><a href="?login">Intranet</a></li>
                </ul>
            </div>
            <ul id="menu_principal">
                <a href="?home">
                    <img src="images/logo.png" id="logo" />
                </a>
                
                <li class="item_menu" id="link_empresa">
                    <a class="link_principal" href="?quem-somos">Empresa</a>
                </li>

                <li class="item_menu" id="link_solucoes_servicos">
                    <a class="link_principal" href="javascript:void(0);">Soluções e Serviços</a>
                    <div class="sub_menu sub_menu2">
                            <ul>
                                <li><a href="?diagnostico">Diagnóstico, Alinhamento e Gestão de TI</a></li>
                                <li><a href="?analise">Análise, Mapeamento e Adequação de Processos de Negócio</a></li>
                                <li><a href="?desenvolvimento">Desenvolvimento, Integração e Gerenciamento de Projetos de TI</a></li>
                                <li><a href="?modernizacao-gestao">Modernização da Gestão de Pessoas</a></li>
                                <li><a href="?sistemas-de-identificacao">Sistemas de Identificação Biométrica (AFIS)</a></li>
                            </ul>
                    </div>
                </li>

                <li class="item_menu" id="link_projetos">
                    <a class="link_principal" href="javascript:void(0);">Projetos</a>
                    <div class="sub_menu sub_menu3">
							<ul>
                                <li><a href="?gestao-rh">Diagnóstico e Mapeamento de Processos de Gestão de RH</a></li>
                                <li><a href="?diagnostico-ti">Diagnostico Estratégico de TI e Adequação ao Modelo de Negócios</a></li>
                                <li><a href="?identidade-funcional" style="padding-top:10px!important;">Identidade Funcional de Servidores Públicos</a></li>
                            </ul>
                    </div>
                </li>

                <li class="item_menu" id="link_clientes_parceiros">
                    <a class="link_principal" href="?clientes-e-parceiros">Clientes e Parceiros</a>
                </li>
				<li class="item_menu" id="link_responsabilidade">
                    <a class="link_principal" href="javascript:void(0);">Responsabilidade</a>
					<div class="sub_menu sub_menu4">
							<ul>
                                <li><a href="?codigos" style="padding-top:10px!important;" >Códigos de Ética e Conduta</a></li>
								<li><a href="https://probid.meritum.online/denouncements" TARGET="blank" style="padding-top:10px!important;">Canal Direto</a></li>
								<li><a href="?treinamentos"  style="padding-top:10px!important;">Treinamentos</a></li>
                            </ul>
                    </div>
                </li>
            </ul>