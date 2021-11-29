<? php

namespace  Config ;

use  CodeIgniter \ Config \ BaseConfig ;

/ **
 * Configuração de criptografia.
 *
 * Estas são as configurações usadas para criptografia, se você não passar um parâmetro
 * array para o criptografador para criação / inicialização.
 * /
classe  Encryption  extends  BaseConfig
{
	/ **
	 * ------------------------------------------------- -------------------------
	 * Chave de criptografia inicial
	 * ------------------------------------------------- -------------------------
	 *
	 * Se você usar a classe Encryption, deverá definir uma chave de criptografia (seed).
	 * Você precisa garantir que seja longo o suficiente para a cifra e o modo que planeja usar.
	 * Consulte o guia do usuário para obter mais informações.
	 *
	 * @var string
	 * /
	public  $ key = '' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Driver de criptografia para usar
	 * ------------------------------------------------- -------------------------
	 *
	 * Um dos drivers de criptografia suportados.
	 *
	 * Drivers disponíveis:
	 * - OpenSSL
	 * - Sódio
	 *
	 * @var string
	 * /
	public  $ driver = 'OpenSSL' ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Comprimento do enchimento de SodiumHandler em bytes
	 * ------------------------------------------------- -------------------------
	 *
	 * Este é o número de bytes que serão preenchidos para a mensagem de texto simples
	 * antes de ser criptografado. Este valor deve ser maior que zero.
	 *
	 * Consulte o guia do usuário para obter mais informações sobre preenchimento.
	 *
	 * @var inteiro
	 * /
	public  $ blockSize = 16 ;

	/ **
	 * ------------------------------------------------- -------------------------
	 * Resumo de criptografia
	 * ------------------------------------------------- -------------------------
	 *
	 * Resumo do HMAC a ser usado, por exemplo, 'SHA512' ou 'SHA256'. O valor padrão é 'SHA512'.
	 *
	 * @var string
	 * /
	public  $ digest = 'SHA512' ;
}
