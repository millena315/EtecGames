<? php

namespace  Config ;

use  CodeIgniter \ Config \ BaseConfig ;

classe  Email  extends  BaseConfig
{
	/ **
	 * @var string
	 * /
	public  $ fromEmail ;

	/ **
	 * @var string
	 * /
	public  $ fromName ;

	/ **
	 * @var string
	 * /
	públicos  $ destinatários ;

	/ **
	 * O "agente de usuário"
	 *
	 * @var string
	 * /
	public  $ userAgent = 'CodeIgniter' ;

	/ **
	 * O protocolo de envio de correio: mail, sendmail, smtp
	 *
	 * @var string
	 * /
	public  $ protocol = 'mail' ;

	/ **
	 * O caminho do servidor para Sendmail.
	 *
	 * @var string
	 * /
	public  $ mailPath = '/ usr / sbin / sendmail' ;

	/ **
	 * Endereço do servidor SMTP
	 *
	 * @var string
	 * /
	public  $ SMTPHost ;

	/ **
	 * Nome de usuário SMTP
	 *
	 * @var string
	 * /
	public  $ SMTPUser ;

	/ **
	 * Senha SMTP
	 *
	 * @var string
	 * /
	public  $ SMTPPass ;

	/ **
	 * Porta SMTP
	 *
	 * @var inteiro
	 * /
	public  $ SMTPPort = 25 ;

	/ **
	 * Tempo limite de SMTP (em segundos)
	 *
	 * @var inteiro
	 * /
	public  $ SMTPTimeout = 5 ;

	/ **
	 * Habilite conexões SMTP persistentes
	 *
	 * @var boolean
	 * /
	public  $ SMTPKeepAlive = false ;

	/ **
	 * Criptografia SMTP. Tls ou ssl
	 *
	 * @var string
	 * /
	public  $ SMTPCrypto = 'tls' ;

	/ **
	 * Habilitar quebra de linha
	 *
	 * @var boolean
	 * /
	public  $ wordWrap = true ;

	/ **
	 * Contagem de caracteres para envolver
	 *
	 * @var inteiro
	 * /
	public  $ wrapChars = 76 ;

	/ **
	 * Tipo de e-mail, 'texto' ou 'html'
	 *
	 * @var string
	 * /
	public  $ mailType = 'text' ;

	/ **
	 * Conjunto de caracteres (utf-8, iso-8859-1, etc.)
	 *
	 * @var string
	 * /
	public  $ charset = 'UTF-8' ;

	/ **
	 * Validar o endereço de e-mail
	 *
	 * @var boolean
	 * /
	public  $ validate = false ;

	/ **
	 * Prioridade de e-mail. 1 = mais alto. 5 = mais baixo. 3 = normal
	 *
	 * @var inteiro
	 * /
	público  $ prioridade = 3 ;

	/ **
	 * Caractere de nova linha. (Use “\ r \ n” para cumprir com RFC 822)
	 *
	 * @var string
	 * /
	public  $ CRLF = "\ r \ n" ;

	/ **
	 * Caractere de nova linha. (Use “\ r \ n” para cumprir com RFC 822)
	 *
	 * @var string
	 * /
	public  $ newline = "\ r \ n" ;

	/ **
	 * Ative o modo de lote BCC.
	 *
	 * @var boolean
	 * /
	public  $ BCCBatchMode = false ;

	/ **
	 * Número de e-mails em cada lote BCC
	 *
	 * @var inteiro
	 * /
	public  $ BCCBatchSize = 200 ;

	/ **
	 * Ativar notificação de mensagem do servidor
	 *
	 * @var boolean
	 * /
	público  $ DSN = falso ;

}
