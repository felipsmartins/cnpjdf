<?php 

namespace Yarkhan;
use DOMDocument;
class CNPJDF{
	static function consulta($cnpj = '24504336000150'){
		// $ch = curl_init('http://publica.agencianet.fazenda.df.gov.br/publica/ImprimirDIF.asp?CFDF=24504336000150');
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$str = <<<HTML
<BODY >
<HTML>
<HEAD>
<title>::. Agênci@Net - Serviços</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../agencianet.css" rel="stylesheet" type="text/css">
</HEAD>
<!-- Início da página-->
<BODY>
<FORM name="form1" action="#" method="post">
<TR> 
<TD valign="top"> 
<TABLE width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="fonte">
<TR> 
<TD width="11%" rowspan="2" valign="top">
<B>
<img src="figuras/LogoGDF.gif" width="80" height="80">
</B>
<BR>
<BR>
</TD>
<TD width="40%" rowspan="2" valign="middle">
<SPAN class="fonte">
GOVERNO DO DISTRITO FEDERAL<BR>
SECRETARIA DE ESTADO DE FAZENDA<BR>
CADASTRO FISCAL DO DISTRITO FEDERAL<BR>
<B>
COMPROVANTE DE INSCRIÇÃO E DE SITUAÇÃO NO CADASTRO FISCAL DO DISTRITO FEDERAL - DIF
</B>
</SPAN>
</TD>
<TD width="23%" align="right" valign="top" style="BORDER-RIGHT: black 1px; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<DIV align="left">
<FONT size="1">
CF/DF
<BR>
<BR>
<B>
&nbsp;&nbsp;07.762.133/001-70
</B>
</FONT>
</DIV>
</TD>
<TD colspan="2" align="right" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<DIV align="left">
<FONT size="1">
CPF/CNPJ
<BR>
<BR>
<B>
&nbsp;&nbsp;24.504.336/0001-50
</B>
</FONT>
</DIV>
</TD>
</TR>

<TR> 
<TD align="right" valign="top" style="BORDER-RIGHT: black 1px; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px"> 
<DIV align="left">
<FONT size="1">
Data da Concessão da Inscrição
<BR>
<BR>
<B>
&nbsp;&nbsp;01/04/2016 
</B>
</FONT>
</DIV>
</TD>
<TD colspan="2" align="right" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: black 1px"> 
<DIV align="left">
<BR>
<BR>
&nbsp;&nbsp;
</FONT>
</DIV>
</TD>
</TR>

<TR> 
<TD colspan="5" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Denominação social
<BR>
<BR>
<B>
&nbsp;&nbsp;CPMARRA TECNOLOGIA LTDA
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="5" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Título do Estabelecimento - Nome Fantasia
<B>
<BR>
<BR>
&nbsp;&nbsp;CPMARRA TIC
</B>
</FONT>
</TD>
</TR>
<TR> 
<TD colspan="5" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Natureza Jurídica/Tipo de Contribuinte
<BR>
<BR>
<B>
&nbsp;&nbsp;SOCIEDADE EMPRESARIA LIMITADA
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="3" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Qualificação do Contribuinte
<BR>
<BR>
<B>
&nbsp;&nbsp;ISS EMPRESA
</B>
</FONT>
</TD>
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
FAC - Número do Protocolo
<BR>
<BR>
<B>
&nbsp;&nbsp;969-77984/55
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Regime de Tributação do ISS
</FONT>
<BR>
<BR>
<FONT size="2">
<B>
&nbsp;&nbsp;SIMPLES NACIONAL
</B>
</FONT>
</TD>
<TD valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Faixa do ISS
</FONT>
<BR>
<BR>
<FONT size="1">
&nbsp;<center><strong>XX</strong></center>
</FONT>
</TD>
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">Data de enquadramento no ISS</FONT><BR>
<BR>
<FONT size="1">
<B>
&nbsp;&nbsp;01/04/2016
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Regime de Tributação do ICMS
</FONT>
<BR>
<BR>
<FONT size="2">
<B>
&nbsp;&nbsp;XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
</B>
</FONT>
</TD>
<TD valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Faixa do ICMS
</FONT>
<BR>
<BR>
<FONT size="1">
&nbsp;<center><strong>XX</strong></center>
</FONT>
</TD>
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Data de enquadramento no ICMS
</FONT>
<BR>
<BR>
<FONT size="1">
<B>
&nbsp;&nbsp;XXXXXXXXXX
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Descrição Atividade Econômica do ISS
<BR>
<BR>
<B>
&nbsp;&nbsp;DESENVOLVIMENTO E LICENCIAMENTO DE PROGRAMAS DE COMPUTADOR CUSTOMIZAVEIS
</B>
</FONT>
</TD>
<TD valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Código da Atividade - ISS
<BR>
<BR>
<B>
&nbsp;&nbsp;J6202-3/00-00
</B>
</FONT>
</TD>
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Data de Início de Atividade - ISS
<BR>
<BR>
<B>
&nbsp;&nbsp;01/04/2016
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Descrição da Atividade Econômica do ICMS
<BR>
<BR>
<B>
&nbsp;&nbsp;XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
</B>
</FONT>
</TD>
<TD valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Código da Atividade - ICMS
<BR>
<BR>
<B>
&nbsp;&nbsp;XXXXXXXXXX
</B>
</FONT>
</TD>
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
Data de Início de Atividade - ICMS
<BR>
<BR>
<B>
&nbsp;&nbsp;XXXXXXXXXX
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="5" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Endereço
<BR>
<BR>
<B>
&nbsp;&nbsp;QUADRA QE 11 AREA ESPECIAL L SALA 133 EDIFICIO GUARA OFFICE
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px">
<FONT size="1">
Bairro
<BR>
<BR>
<B>
&nbsp;&nbsp;GUARA I
</B>
</FONT>
</TD>
<TD valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">Cidade<BR>
<BR>
<B>
&nbsp;&nbsp;BRASILIA
</B>
</FONT>
</TD>
<TD width="10%" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">UF<BR>
<BR>
<B>
&nbsp;&nbsp;DF
</B>
</FONT>
</TD>
<TD width="16%" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px; BORDER-BOTTOM: black 1px">
<FONT size="1">
CEP
<BR>
<BR>
<B>
&nbsp;&nbsp;71.020-721
</B>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black solid 1px">
<FONT size="1">
Situação Cadastral
<BR>
<BR>
<B>
<FONT size="2">
&nbsp;&nbsp;ATIVA
</FONT>
</B>
</FONT>
</TD>
<TD colspan="3" valign="top" style="BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: black solid 1px">
<FONT size="1">
Data
</FONT>
<BR>
<BR>
<FONT size="1">
<B>
&nbsp;&nbsp;06/10/2016
</b>
</FONT>
</TD>
</TR>

<TR> 
<TD colspan="2" valign="top"></TD>
<TD valign="top"></TD>
<TD colspan="2" valign="top"></TD>
</TR>

<TR> 
<TD colspan="5"></TD>
</TR>

<TR> 
<TD colspan="6">
<B>
Este documento foi emitido no dia 06/10/2016 às 21:35:49 na Internet pelo portal Agênci@Net<br>
e poderá ser reimpresso no endereço http://www.fazenda.df.gov.br/agencianet/publica/LoginImprimirdif.asp
</BBR>
</TD>
</TR>
</TABLE>
</TD>
</TR> 
</FORM>
</BODY>
</HTML>
HTML;
	// var_dump($str);
		$doc = new DOMDocument();
		$doc->loadHTML($str);
		$xpath = new \DOMXpath($doc);
		$data = [];

		#/html/body/form/table/tbody/tr[3]/td/font/b
		$data['razao_social'] = $xpath->query("/html/body/form/tr/td/table/tr[3]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[4]/td/font/b
		$data['nome_fantasia'] = $xpath->query("/html/body/form/tr/td/table/tr[4]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[7]/td[1]/font[2]/b
		$data['regime_tributario'] = $xpath->query("/html/body/form/tr/td/table/tr[7]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[7]/td[1]/font[2]/b
		$data['regime_tributario'] = $xpath->query("/html/body/form/tr/td/table/tr[7]/td/font/b")[0]->textContent;
		print_r($data);
	}
}