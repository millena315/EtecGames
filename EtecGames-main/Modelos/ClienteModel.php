<? php
namespace  App \ Models ;

use  CodeIgniter \ Model ;

classe  ClienteModel  extends  Model 
{
    protegido  $ table = 'cliente_tb' ;
   // protegido $ primaryKey = 'CpfCli';
    protegido  $ allowedFields = [ 'CpfCli' , 'codusu_FK' , 'nomeCli' , 'foneCli' ];
    protegido  $ returnType = 'objeto' ;
    // protegido $ autoIncrement = false;
}
