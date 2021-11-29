<? php
namespace  App \ Models ;

use  CodeIgniter \ Model ;

classe  FornecedorModel  estende  modelo 
{
    protegido  $ table = 'fornecedor_tb' ;
    protegido  $ primaryKey = 'codForn' ;
    protegido  $ permitidoFields = [ 'nomeForn' , 'emailForn' , 'foneForn' ];
    protegido  $ returnType = 'objeto' ;
}
