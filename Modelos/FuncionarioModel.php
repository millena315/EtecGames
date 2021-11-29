<? php
namespace  App \ Models ;

use  CodeIgniter \ Model ;

classe  FuncionarioModel  extends  Model 
{
    protegido  $ table = 'funcionario_tb' ;
    protegido  $ primaryKey = 'codFun' ;
    protegido  $ allowedFields = [ 'codusu_FK' , 'nomeFun' , 'foneFun' ];
    protegido  $ returnType = 'objeto' ;
}
