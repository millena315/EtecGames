<? php
namespace  App \ Models ;

use  CodeIgniter \ Model ;

classe  UsuarioModel  extends  Model 
{
    protegido  $ table = 'usuario_tb' ;
    protegido  $ primaryKey = 'codusu' ;
    protegido  $ allowedFields = [ 'emailUsu' , 'SenhaUsu' ];
    protegido  $ returnType = 'objeto' ;
}
