<style>
.formulario select{
	background: none repeat scroll 0 0 #F8EFDC;
    border: 1px solid #CDC5B4;
    color: #666666;
    margin-top: 10px;
    width: 266px;}
</style>
<div class="internalContent">
    <div class="contentLeft">
        <table width="722" cellspacing="0" cellpadding="0">
            <tr>
                <td width="21" height="30"><img src="images/border-top-left.gif" alt="" width="21" height="30" /></td>
                <td bgcolor="#ffffff" width="672" height=""></td>
                <td width="21" height="30"><img src="images/border-top-right.gif" alt="" width="21" height="30" /></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">&nbsp;</td>
                <td bgcolor="#ffffff"><h2 class="ttInternas">FALE CONOSCO</h2><span style="width:80%" class="detalhe"></span>
                    <p class="txtParceiros">Nossa estrutura de consultoria está permanentemente envolvida em novas iniciativas e projetos, voltados à ampliação de nosso portfólio de soluções e serviços. Fale conosco e fique atualizado sobre o que a<strong> ProBid </strong>está desenvolvendo e executando para o Setor Público.</p>
                    <form name="form1" method="post" action="http://homewebbingsistemas.com.br/clientes/probid/internas/enviaMail.php">
                    <div class="contentFormulario"><div class="formulario">
                            <label title="Nome" for="nome">Nome</label>
                            <input class="texto" id="nome" type="text" name="nome" />
                        </div>


                        <div class="formulario">
                            <label title="E-mail" for="confirmaemail">E-mail</label>
                            <input class="texto" id="confirmaemail" type="text" name="confirmaemail" />
                        </div>
                        <div class="formulario">
                            <label title="Telefone" for="ddd">Telefone</label>
                            <input type="text" maxlenght="2" class="texto" id="ddd" title="DDD" name="ddd" >
                            <input class="texto" id="telefone" type="text" name="telefone" />

                        </div>
                        <div class="formulario">
                            <label title="Assunto" for="assunto">Assunto</label>
                            <select name="assunto" id="assunto">
                                <option>Contato</option>
                                <option>Sugestões</option>
                                <option>Perguntas</option>
                                <option>Comentários em geral </option>
                             </select>
                        </div>
                        <div  class="formulario">
                            <label title="Mensagem" for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="5" cols="30"></textarea>
                        </div>
                        <div class="contentButton">
                            <!--<input type="reset" value="Limpar" src="images/t.gif" title="Limpar" class="btnDefault">-->
                            <input type="submit" value="Enviar" src="images/t.gif" title="Enviar mensagem" class="btnDefault"></div>

                    </div>
                    </form>
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
    <a href="?quem-somos">
        <div class="contentRight"></div>
    </a>
</div>
    