<? php

namespace  Config ;

use  CodeIgniter \ Config \ BaseConfig ;

/ **
 * Armazena as configurações padrão para a ContentSecurityPolicy, se você
* escolha usá-lo. Os valores aqui serão lidos e definidos como padrões
* para o site. Se necessário, eles podem ser substituídos página a página.
 *
 * Referência sugerida para explicações:
 *
 * @see https://www.html5rocks.com/en/tutorials/security/content-security-policy/
 * /
classe  ContentSecurityPolicy  estende  BaseConfig
{
	// ------------------------------------------------ -------------------------
	// Gerenciamento de CSP Broadbrush
	// ------------------------------------------------ -------------------------

	/ **
	 * Contexto de relatório CSP padrão
	 *
	 * @var boolean
	 * /
	public  $ reportOnly = false ;

	/ **
	 * Especifica um URL para onde um navegador enviará relatórios
	 * quando uma política de segurança de conteúdo é violada.
	 *
	 * @var string | null
	 * /
	public  $ reportURI = null ;

	/ **
	 * Instrui os agentes de usuário a reescrever esquemas de URL, mudando
	 * HTTP para HTTPS. Esta diretiva é para sites com
	 * grande número de URLs antigos que precisam ser reescritos.
	 *
	 * @var boolean
	 * /
	public  $ upgradeInsecureRequests = false ;

	// ------------------------------------------------ -------------------------
	// Fontes permitidas
	// Observação: depois de definir uma política como 'nenhuma', ela não pode ser mais restrita
	// ------------------------------------------------ -------------------------

	/ **
	 * Irá assumir o valor próprio se não for substituído
	 *
	 * @var string | string [] | null
	 * /
	public  $ defaultSrc = null ;

	/ **
	 * Lista os URLs dos scripts permitidos.
	 *
	 * @var string | string []
	 * /
	public  $ scriptSrc = 'self' ;

	/ **
	 * Lista os URLs permitidos das folhas de estilo.
	 *
	 * @var string | string []
	 * /
	public  $ styleSrc = 'self' ;

	/ **
	 * Define as origens de onde as imagens podem ser carregadas.
	 *
	 * @var string | string []
	 * /
	public  $ imageSrc = 'self' ;

	/ **
	 * Restringe os URLs que podem aparecer no elemento `<base>` de uma página.
	 *
	 * Irá assumir o valor próprio se não for substituído
	 *
	 * @var string | string [] | null
	 * /
	public  $ baseURI = null ;

	/ **
	 * Lista os URLs para trabalhadores e conteúdos de frames incorporados
	 *
	 * @var string | string []
	 * /
	public  $ childSrc = 'self' ;

	/ **
	 * Limita as origens às quais você pode se conectar (via XHR,
	 * WebSockets e EventSource).
	 *
	 * @var string | string []
	 * /
	public  $ connectSrc = 'self' ;

	/ **
	 * Especifica as origens que podem servir a fontes da web.
	 *
	 * @var string | string []
	 * /
	public  $ fontSrc = null ;

	/ **
	 * Lista pontos de extremidade válidos para envio de tags `<form>`.
	 *
	 * @var string | string []
	 * /
	public  $ formAction = 'self' ;

	/ **
	 * Especifica as fontes que podem incorporar a página atual.
	 * Esta diretiva se aplica a `<frame>`, `<iframe>`, `<embed>`,
	 tags * e `<applet>`. Esta diretiva não pode ser usada em
	 * `<meta>` e se aplica apenas a recursos não HTML.
	 *
	 * @var string | string [] | null
	 * /
	public  $ frameAncestors = null ;

	/ **
	 * A diretiva frame-src restringe os URLs que podem
	 * ser carregado em contextos de navegação aninhados.
	 *
	 * @var array | string | null
	 * /
	public  $ frameSrc = null ;

	/ **
	 * Restringe as origens permitidas para fornecer vídeo e áudio.
	 *
	 * @var string | string [] | null
	 * /
	public  $ mediaSrc = null ;

	/ **
	 * Permite o controle sobre o Flash e outros plug-ins.
	 *
	 * @var string | string []
	 * /
	public  $ objectSrc = 'self' ;

	/ **
	 * @var string | string [] | null
	 * /
	public  $ manifestSrc = null ;

	/ **
	 * Limita os tipos de plug-ins que uma página pode invocar.
	 *
	 * @var string | string [] | null
	 * /
	public  $ pluginTypes = null ;

	/ **
	 * Lista de ações permitidas.
	 *
	 * @var string | string [] | null
	 * /
	public  $ sandbox = null ;
}
