<? php

namespace  Config ;

use  CodeIgniter \ Cache \ Handlers \ DummyHandler ;
use  CodeIgniter \ Cache \ Handlers \ FileHandler ;
use  CodeIgniter \ Cache \ Handlers \ MemcachedHandler ;
use  CodeIgniter \ Cache \ Handlers \ PredisHandler ;
use  CodeIgniter \ Cache \ Handlers \ RedisHandler ;
use  CodeIgniter \ Cache \ Handlers \ WincacheHandler ;
use  CodeIgniter \ Config \ BaseConfig ;

classe  Cache  extends  BaseConfig
{
	/ **
	 * ------------------------------------------------- -------------------------
	 * Manipulador primário
	 * ------------------------------------------------- -------------------------
	 *
	 * O nome do manipulador preferencial que deve ser usado. Se por algum motivo
	 * não está disponível, o $ backupHandler será usado em seu lugar.
	 *
	 * @var string
	 * /
	public  $ handler = 'arquivo' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Backup Handler
	 * ------------------------------------------------- -------------------------
	 *
	 * O nome do manipulador que será usado caso o primeiro seja
	 * inacessível. Freqüentemente, 'arquivo' é usado aqui, uma vez que o sistema de arquivos é
	 * sempre disponível, embora isso nem sempre seja prático para o aplicativo.
	 *
	 * @var string
	 * /
	public  $ backupHandler = 'dummy' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Caminho do diretório de cache
	 * ------------------------------------------------- -------------------------
	 *
	 * O caminho para onde os arquivos de cache devem ser armazenados, se estiver usando um arquivo baseado em
	 * sistema.
	 *
	 * @var string
	 *
	 * @deprecated Use a variante específica do driver em $ file
	 * /
	public  $ storePath = WRITEPATH . 'cache /' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Cache Inclui Query String
	 * ------------------------------------------------- -------------------------
	 *
	 * Se deve levar em consideração a string de consulta de URL ao gerar
	 * arquivos de cache de saída. As opções válidas são:
	 *
	 * false = Desativado
	 * true = Enabled, leve todos os parâmetros de consulta em consideração.
	 * Esteja ciente de que isso pode resultar em vários cache
	 * arquivos gerados para a mesma página repetidamente.
	 * array ('q') = Ativado, mas leva em consideração apenas a lista especificada
	 * de parâmetros de consulta.
	 *
	 * @var boolean | string []
	 * /
	public  $ cacheQueryString = false ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Prefixo de chave
	 * ------------------------------------------------- -------------------------
	 *
	 * Esta string é adicionada a todos os nomes de itens de cache para ajudar a evitar colisões
	 * se você executar vários aplicativos com o mesmo mecanismo de cache.
	 *
	 * @var string
	 * /
	public  $ prefix = '' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * TTL padrão
	 * ------------------------------------------------- -------------------------
	 *
	 * O número padrão de segundos para salvar itens quando nenhum é especificado.
	 *
	 * AVISO: isso não é usado por gerenciadores de estrutura onde 60 segundos é
	 * embutido em código, mas pode ser útil para projetos e módulos. Isto irá substituir
	 * o valor embutido no código em uma versão futura.
	 *
	 * @var inteiro
	 * /
	public  $ ttl = 60 ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Configurações de arquivo
	 * ------------------------------------------------- -------------------------
	 * Suas preferências de armazenamento de arquivo podem ser especificadas abaixo, se você estiver usando
	 * o driver de arquivo.
	 *
	 * @var array <string, string | int | null>
	 * /
	public  $ file = [
		'storePath' => WRITEPATH . 'cache /' ,
		'modo'       => 0640 ,
	];

	/ **
	 * ------------------------------------------------- ------------------------
	 * Configurações do Memcached
	 * ------------------------------------------------- ------------------------
	 * Seus servidores Memcached podem ser especificados abaixo, se você estiver usando
	 * os drivers do Memcached.
	 *
	 * @ver https://codeigniter.com/user_guide/libraries/caching.html#memcached
	 *
	 * @var array <string, string | int | booleano>
	 * /
	public  $ memcached = [
		'host'    => '127.0.0.1' ,
		'port'    => 11211 ,
		'peso' => 1 ,
		'raw'     => false ,
	];

	/ **
	 * ------------------------------------------------- ------------------------
	 * Configurações do Redis
	 * ------------------------------------------------- ------------------------
	 * Seu servidor Redis pode ser especificado abaixo, se você estiver usando
	 * os drivers Redis ou Predis.
	 *
	 * @var array <string, string | int | null>
	 * /
	public  $ redis = [
		'host'      => '127.0.0.1' ,
		'senha' => nulo ,
		'port'      => 6379 ,
		'tempo limite'   => 0 ,
		'banco de dados' => 0 ,
	];

	/ **
	 * ------------------------------------------------- -------------------------
	 * Manipuladores de cache disponíveis
	 * ------------------------------------------------- -------------------------
	 *
	 * Este é um array de aliases de mecanismo de cache e nomes de classes. Apenas motores
	 * que estão listados aqui podem ser usados.
	 *
	 * @var array <string, string>
	 * /
	public  $ validHandlers = [
		'dummy'      => DummyHandler :: class,
		'file'       => FileHandler :: class,
		'memcached' => MemcachedHandler :: class,
		'predis'     => PredisHandler :: class,
		'redis'      => RedisHandler :: class,
		'wincache'   => WincacheHandler :: class,
	];
}
