<?php
if (!empty($_POST)) {
    require_once('class/phpmailer.php');

    //inicia a classe para envio
    $mail = new PHPMailer();
    $mail->SetLanguage("br");
    $mail->IsSMTP();

    $mail->Host = "smtp.homewebbingsistemas.com.br";
    $mail->SMTPAuth = true;
    $mail->Username = "sys@homewebbingsistemas.com.br";
    $mail->Password = "984hdj";

    $mail->From = "Trabalhe Conosco - Probid <probid@probid.com.br>";
    $mail->FromName = $_POST['seuemail'];

    $mail->AddCC('migueleliasweb@gmail.com', 'Probid');

    $mail->IsHTML(true);
    $mail->Subject = "Trabalhe Conosco";
    $mail->Body = $mensagem;

    $mail->Send();
}
?>

<div class="internalContent">
    <form method="post" enctype="multipart/form-data">
        <div class="contentLeft">
            <table width="722" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="21" height="30">
                        <img src="images/border-top-left.gif" alt="" width="21" height="30" />
                    </td>
                    <td bgcolor="#ffffff" width="672" height=""></td>
                    <td width="21" height="30">
                        <img src="images/border-top-right.gif" alt="" width="21" height="30" />
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff">&nbsp;</td>
                    <td bgcolor="#ffffff">
                        <h2 class="ttInternas">TRABALHE CONOSCO</h2>
                        <span style="width:70%" class="detalhe"></span>
                        <p class="txtParceiros">
                            A <strong>ProBid </strong>mantém um quadro permanente de profissionais e
                            busca talentos que possam cooperar em nossos projetos e
                            no aprimoramento de nossas atividades empresariais. Se
                            você busca uma oportunidade de trabalho em ambiente de
                            inovação, crescimento profissional e desafios permanentes,
                            complete o formulário abaixo, envie e candidate-se a fazer
                            parte da nossa equipe.
                        </p>
                        <div class="contentFormulario">
                            <div class="formulario">
                                <label title="Nome" for="nome">Nome</label>
                                <input class="texto" id="nome" type="text" name="nome" />
                            </div>

                            <div class="formulario">
                                <label for="seuemail"> E-mail</label>
                                <input class="texto" id="seuemail" type="text" name="seuemail" />
                            </div>

                            <div class="formulario">
                                <label for="assunto" style="margin-top:3px">Área de interesse</label>
                                <select class="texto" name="area_de_interesse">
                                    <option selected value="selecione">Selecione</option>
                                </select>
                            </div>
                            <div class="formulario">
                                <label for="curriculo"> Currículo</label>
                                <input class="texto" id="curriculo" type="file" name="curriculo" />
                            </div>
                            <div  class="formulario">
                                <label for="mensagem">Mensagem</label>
                                <textarea id="mensagem" name="mensagem" rows="5" cols="30"></textarea>
                            </div>
                            <div class="contentButton">
                                <input type="submit" value="Enviar" src="images/t.gif" title="Enviar" class="btnDefault">
                            </div>

                        </div>
                        <?php include 'inc/linknav.php'; ?>
                    </td>
                    <td bgcolor="#ffffff">&nbsp;</td>
                </tr>
                <tr>
                    <td width="21" height="30"><img src="images/border-botom-left.gif" alt="" width="21" height="30" /></td>
                    <td bgcolor="#ffffff">&nbsp;</td>
                    <td width="21" height="30"><img src="images/border-bottom-right.gif" alt="" width="21" height="30" /></td>
                </tr>
            </table>
        </div>
    </form>
    <a href="?quem-somos">
        <div class="contentRight"></div>
    </a>
</div>