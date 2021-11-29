<? php

/ *
| -------------------------------------------------- ------------------
| Namespace do aplicativo
| -------------------------------------------------- ------------------
 |
| Isso define o namespace padrão que é usado em todo
| CodeIgniter para se referir ao diretório do aplicativo. Mudar
| esta constante para alterar o namespace que todos os aplicativos
| classes devem usar.
 |
| NOTA: mudar isso exigirá a modificação manual do
| namespaces existentes de App \ * namespaces-classes.
 * /
definido ( 'APP_NAMESPACE' ) || define ( 'APP_NAMESPACE' , 'App' );

/ *
| -------------------------------------------------- ------------------------
| Caminho do compositor
| -------------------------------------------------- ------------------------
 |
| O caminho em que o arquivo de carregamento automático do Composer deve viver. Por padrão,
| a pasta do fornecedor está no diretório raiz, mas você pode personalizá-la aqui.
 * /
definido ( 'COMPOSER_PATH' ) || define ( 'COMPOSER_PATH' , ROOTPATH . 'vendor / autoload.php' );

/ *
 | ------------------------------------------------- -------------------------
| Constantes de tempo
 | ------------------------------------------------- -------------------------
 |
| Fornece maneiras simples de trabalhar com a miríade de funções PHP que
| requer que a informação esteja em segundos.
 * /
definido ( 'SEGUNDO' ) || define ( 'SEGUNDO' , 1 );
definido ( 'MINUTE' ) || define ( 'MINUTO' , 60 );
definido ( 'HORA' ) || define ( 'HORA' , 3600 );
definido ( 'DIA' ) || define ( 'DIA' , 86400 );
definido ( 'SEMANA' ) || define ( 'SEMANA' , 604800 );
definido ( 'MÊS' ) || define ( 'MÊS' , 2592000 );
definido ( 'ANO' ) || define ( 'ANO' , 31536000 );
definido ( 'DÉCADA' ) || define ( ' DECADE ' , 315360000 );

/ *
| -------------------------------------------------- ------------------------
| Códigos de status de saída
| -------------------------------------------------- ------------------------
 |
| Usado para indicar as condições sob as quais o script é exit () ing.
| Embora não haja um padrão universal para códigos de erro, existem alguns
| convenções amplas. Três dessas convenções são mencionadas abaixo, para
| aqueles que desejam fazer uso deles. Os padrões do CodeIgniter eram
| escolhido para a menor sobreposição com essas convenções, embora ainda
| deixando espaço para que outros sejam definidos em versões futuras e pelo usuário
| formulários.
 |
| As três principais convenções usadas para determinar os códigos de status de saída
| são como segue:
 |
| Biblioteca C / C ++ padrão (stdlibc):
| http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
| (Este link também contém outras convenções específicas do GNU)
| BSD sysexits.h:
| http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
| Scripts Bash:
| http://tldp.org/LDP/abs/html/exitcodes.html
 |
 * /
definido ( 'EXIT_SUCCESS' ) || define ( 'EXIT_SUCCESS' , 0 ); // Sem erros
definido ( 'EXIT_ERROR' ) || define ( 'EXIT_ERROR' , 1 ); // erro genérico
definido ( 'EXIT_CONFIG' ) || define ( 'EXIT_CONFIG' , 3 ); // erro de configuração
definido ( 'EXIT_UNKNOWN_FILE' ) || define ( 'EXIT_UNKNOWN_FILE' , 4 ); // arquivo não encontrado
definido ( 'EXIT_UNKNOWN_CLASS' ) || define ( 'EXIT_UNKNOWN_CLASS' , 5 ); // classe desconhecida
definido ( 'EXIT_UNKNOWN_METHOD' ) || define ( 'EXIT_UNKNOWN_METHOD' , 6 ); // membro da classe desconhecido
definido ( 'EXIT_USER_INPUT' ) || define ( 'EXIT_USER_INPUT' , 7 ); // entrada de usuário inválida
definido ( 'EXIT_DATABASE' ) || define ( 'EXIT_DATABASE' , 8 ); // erro de banco de dados
definido ( 'EXIT__AUTO_MIN' ) || define ( 'EXIT__AUTO_MIN' , 9 ); // menor código de erro atribuído automaticamente
definido ( 'EXIT__AUTO_MAX' ) || define ( 'EXIT__AUTO_MAX' , 125 ); // maior código de erro atribuído automaticamente
