# cnpjdf
Consulta de CNPJ para empresas do DF sem captcha

```php
<?php
require "vendor/autoload.php";

use Yarkhan\CNPJDF;

print_r(CNPJDF::consulta('00001172001402'));
/**
  * Array
  * (
  *     [cnpj] => 00001172001402
  *     [razao_social] => SA CORREIO BRAZILIENSE
  *     [cfdf] => 0730227101037
  *     [nome_fantasia] => DEPOSITO FECHADO
  *     [regime_tributario] => XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
  *     [cnae] => 
  *     [uf] => DF
  *     [cidade] => BRASILIA
  *     [bairro] => ASA SUL
  *     [logradouro] => SIG/SUL QD 08 NR. 2175 PARTE A
  *     [cep] => 70610200
  * )
 */
```

Aceito doações. Tô f*dido da vida.
