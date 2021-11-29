<? php

namespace  Config ;

use  CodeIgniter \ Config \ BaseConfig ;
use  DateTimeInterface ;

classe  Cookie  estende  BaseConfig
{
	/ **
	 * ------------------------------------------------- -------------------------
	 * Prefixo do cookie
	 * ------------------------------------------------- -------------------------
	 *
	 * Defina um prefixo de nome de cookie se precisar evitar colisões.
	 *
	 * @var string
	 * /
	public  $ prefix = '' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Registro de data e hora de validade do cookie
	 * ------------------------------------------------- -------------------------
	 *
	 * O carimbo de data / hora padrão expira para cookies. Definir isso como `0` significará que o
	 * cookie não terá o atributo `Expires` e se comportará como uma sessão
	 * biscoito.
	 *
	 * @var DateTimeInterface | integer | string
	 * /
	public  $ expira = 0 ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Caminho do Cookie
	 * ------------------------------------------------- -------------------------
	 *
	 * Normalmente será uma barra.
	 *
	 * @var string
	 * /
	public  $ path = '/' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Domínio do Cookie
	 * ------------------------------------------------- -------------------------
	 *
	 * Defina como `.seu-dominio.com` para cookies em todo o site.
	 *
	 * @var string
	 * /
	public  $ domain = '' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Cookie Secure
	 * ------------------------------------------------- -------------------------
	 *
	 * O cookie só será definido se houver uma conexão HTTPS segura.
	 *
	 * @var boolean
	 * /
	public  $ secure = false ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Cookie HTTPOnly
	 * ------------------------------------------------- -------------------------
	 *
	 * O cookie só estará acessível via HTTP (S) (sem JavaScript).
	 *
	 * @var boolean
	 * /
	public  $ httponly = true ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Cookie SameSite
	 * ------------------------------------------------- -------------------------
	 *
	 * Configure a configuração de cookie SameSite. Os valores permitidos são:
	 * - Nenhum
	 * - Relaxado
	 * - Rigoroso
	 * - ''
	 *
	 * Como alternativa, você pode usar os nomes de constantes:
	 * - `Cookie :: SAMESITE_NONE`
	 * - `Cookie :: SAMESITE_LAX`
	 * - `Cookie :: SAMESITE_STRICT`
	 *
	 * O padrão é `Lax` para compatibilidade com navegadores modernos. Configuração `''`
	 * (string vazia) significa o atributo SameSite padrão definido pelos navegadores (`Lax`)
	 * será definido em cookies. Se definido como `Nenhum`,` $ secure` também deve ser definido.
	 *
	 * @var string
	 * /
	public  $ samesite = 'Lax' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Cookie Raw
	 * ------------------------------------------------- -------------------------
	 *
	 * Este sinalizador permite definir um cookie "bruto", ou seja, seu nome e valor são
	 * não é codificado em URL usando `rawurlencode ()`.
	 *
	 * Se for definido como `true`, os nomes dos cookies devem ser compatíveis com o RFC 2616
	 * lista de caracteres permitidos.
	 *
	 * @var boolean
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes
	 * @see https://tools.ietf.org/html/rfc2616#section-2.2
	 * /
	public  $ raw = false ;
}
