<?php

namespace Yarkhan;
use DOMDocument;
class CNPJDF{

	static function rawData($cnpj){
		return file_get_contents("http://publica.agencianet.fazenda.df.gov.br/publica/ImprimirDIF.asp?CFDF=$cnpj");
	}

	static function consulta($cnpj){
		$doc = new DOMDocument();
		// @$doc->loadHTML(file_get_contents(__DIR__.'/test.html'));
		@$doc->loadHTML(self::rawData($cnpj));

		$xpath = new \DOMXpath($doc);
		$data = [];

		$data['cnpj'] = $cnpj;

		#/html/body/form/table/tbody/tr[3]/td/font/b
		$data['razao_social'] = $xpath->query("/html/body/form/tr/td/table/tr[3]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[1]/td[3]/div/font/b
		$data['cfdf'] = self::cleanNumber($xpath->query("/html/body/form/tr/td/table/tr[1]/td[3]/div/font/b")[0]->textContent);

		#/html/body/form/table/tbody/tr[4]/td/font/b
		$data['nome_fantasia'] = $xpath->query("/html/body/form/tr/td/table/tr[4]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[7]/td[1]/font[2]/b
		$data['regime_tributario'] = $xpath->query("/html/body/form/tr/td/table/tr[7]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[9]/td[2]/font/b
		$data['cnae'] = substr(self::cleanNumber($xpath->query("/html/body/form/tr/td/table/tr[9]/td[2]/font/b")[0]->textContent),0,-2);

		#/html/body/form/table/tbody/tr[12]/td[3]/font/b
		$data['uf'] = $xpath->query("/html/body/form/tr/td/table/tr[12]/td[3]/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[12]/td[12]/font/b
		$data['cidade'] = $xpath->query("/html/body/form/tr/td/table/tr[12]/td[2]/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[12]/td[1]/font/b
		$data['bairro'] = $xpath->query("/html/body/form/tr/td/table/tr[12]/td[1]/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[12]/td[0]/font/b
		$data['logradouro'] = $xpath->query("/html/body/form/tr/td/table/tr[11]/td/font/b")[0]->textContent;

		#/html/body/form/table/tbody/tr[12]/td[4]/font/b
		$data['cep'] = self::cleanNumber($xpath->query("/html/body/form/tr/td/table/tr[12]/td[4]/font/b")[0]->textContent);

		$data =  array_map('self::cleanStr',$data);

		return $data;

	}

	static function cleanStr(&$str){
		$str = trim(html_entity_decode($str), " \t\n\r\0\x0B\xC2\xA0");
		$str = strip_tags($str);
		return $str;
	}

	static function cleanNumber(&$str){
		$str = trim($str);
		$str = preg_replace('/\D/', '', $str);
		return $str;
	}
}
