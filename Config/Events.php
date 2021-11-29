<? php

namespace  Config ;

use  CodeIgniter \ Events \ Events ;
use  CodeIgniter \ Exceptions \ FrameworkException ;

/ *
 * ------------------------------------------------- -------------------
 * Eventos de aplicativos
 * ------------------------------------------------- -------------------
 * Os eventos permitem que você aproveite a execução do programa sem
* modificar ou estender os arquivos principais. Este arquivo fornece uma central
 * local para definir seus eventos, embora eles sempre possam ser adicionados
 * em tempo de execução, também, se necessário.
 *
 * Você cria um código que pode ser executado ao se inscrever em eventos com
* o método 'on ()'. Aceita qualquer forma de chamada, incluindo
 * Fechamentos, que serão executados quando o evento for acionado.
 *
 * Exemplo:
 * Eventos :: on ('criar', [$ minhaInstância, 'meuMétodo']);
 * /

Eventos :: on ( 'pre_system' , function () {
	if ( AMBIENTE ! == 'testando' )
	{
		if ( ini_get ( 'zlib.output_compression' ))
		{
			lance  FrameworkException :: forEnabledZlibOutputCompression ();
		}

		while ( ob_get_level ()> 0 )
		{
			ob_end_flush ();
		}

		ob_start ( function ( $ buffer ) {
			return  $ buffer ;
		});
	}

	/ *
	 * ------------------------------------------------- -------------------
	 * Ouvintes da barra de ferramentas de depuração.
	 * ------------------------------------------------- -------------------
	 * Se você excluir, eles não serão mais coletados.
	 * /
	if ( CI_DEBUG &&! is_cli ())
	{
		Events :: on ( 'DBQuery' , 'CodeIgniter \ Debug \ Toolbar \ Collectors \ Database :: collect' );
		Serviços :: barra de ferramentas () -> responder ();
	}
});
