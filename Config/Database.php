<? php

namespace  Config ;

use  CodeIgniter \ Database \ Config ;

/ **
 * Configuração de banco de dados
 * /
classe  Database  extends  Config
{
	/ **
	 * O diretório que contém as migrações
	 * e diretórios Seeds.
	 *
	 * @var string
	 * /
	public  $ filesPath = APPPATH . 'Banco de dados' . DIRECTORY_SEPARATOR ;

	/ **
	 * Permite escolher a qual grupo de conexão
	 * use se nenhum outro for especificado.
	 *
	 * @var string
	 * /
	public  $ defaultGroup = 'default' ;

	/ **
	 * A conexão de banco de dados padrão.
	 *
	 * @var array
	 * /
	public  $ default = [
		'DSN'       => '' ,
		'hostname' => 'localhost' ,
		'username' => '' ,
		'senha' => '' ,
		'banco de dados' => '' ,
		'DBDriver' => 'MySQLi' ,
		'DBPrefix' => '' ,
		'pConnect' => falso ,
		'DBDebug'   => ( AMBIENTE ! == 'produção' ),
		'charset'   => 'utf8' ,
		'DBCollat' => 'utf8_general_ci' ,
		'swapPre'   => '' ,
		'criptografar'   => falso ,
		'compress' => falso ,
		'strictOn' => falso ,
		'failover' => [],
		'port'      => 3306 ,
	];

	/ **
	 * Esta conexão de banco de dados é usada quando
	 * executando testes de banco de dados PHPUnit.
	 *
	 * @var array
	 * /
	public  $ tests = [
		'DSN'       => '' ,
		'hostname' => '127.0.0.1' ,
		'username' => '' ,
		'senha' => '' ,
		'banco de dados' => ': memória:' ,
		'DBDriver' => 'SQLite3' ,
		'DBPrefix' => 'db_' ,   // Necessário para garantir que estamos trabalhando corretamente com prefixos ativos . NÃO REMOVA PARA DISPOSITIVOS CI
		'pConnect' => falso ,
		'DBDebug'   => ( AMBIENTE ! == 'produção' ),
		'charset'   => 'utf8' ,
		'DBCollat' => 'utf8_general_ci' ,
		'swapPre'   => '' ,
		'criptografar'   => falso ,
		'compress' => falso ,
		'strictOn' => falso ,
		'failover' => [],
		'port'      => 3306 ,
	];

	// ------------------------------------------------ --------------------

	 função  pública __construct ()
	{
		pai :: __construct ();

		// Certifique-se de sempre definir o grupo de banco de dados para 'testes' se
		// atualmente estamos executando um conjunto de testes automatizados, para que
		// não sobrescrevemos dados ativos em caso de acidente.
		if ( AMBIENTE === 'teste' )
		{
			$ this -> defaultGroup = 'testes' ;
		}
	}

	// ------------------------------------------------ --------------------

}
