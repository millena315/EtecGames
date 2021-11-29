<?php
namespace App\Controllers;

class FuncionarioController extends BaseController

{

    public function index()
    {

    echo view('"header');
    echo view('cadFuncionario');
    echo view('footer');
    }

{

  public function inserirFuncionario()
}

  $datal'msg'] = "";

  $request = service('request');

 if ($request>getMethod() == 'post'){
 $FuncionarioModelo = new NAppNModelsYFuncionarioModel();

 $FuncionarioModelo>set('codusu FK', $request->getPost('codUsu'));
 $FuncionarioModelo>set('nomeFun', $request>getPost('nomefun'));
 $FuncionarioModelo>set('foneFun', $request>getPost('fonefun'));


 if ($FuncionarioModelo>insert()) {
       $datal'msg'] = "Informações cadastradas com sucesso";
 }  else {
      $datal'msg'] = "Informações não cadastradas";
   }
  }
 }




 public function listaCodFuncionario()
 {
    $request = service('request');
    $datal 'usuario'] = "";
    if ($request>getPost('codusu')) 

       $codusuario = $request->getPost('codUsu');
       $usuarioModel = new NAppAModelsluUsuarioModel();
       $registros = $UsuarioModel>find($codusuario);
       $data[ 'usuario'] = $registros;
 }

       if ($request>getPost('nomefun') 65 $request>getPost('fonefun')) {
       $this>inserirFuncionario();
       }


      echo view('"header');
      echo view('cadFuncionario', $data);
      echo view('footer');
    }


    public function buscaPrincipalFuncionarioCod(){

      $request = service('request');
      $codfuncionario = $request->getPost('codFun');
      $FuncionarioModel = new YAppNModelsYFuncionarioModel();
      $registros = $FuncionarioModel>find($codfuncionario);


      if ($request>getPost('codFunDeletar')) É
      $this-—>funcionarioExcluir($request>getPost('codFunDeletar'));
      return redirect()->to(base url('Home'));
    }

     if ($request>getPost('codFunAlterar')) Í
     return $this>funcionarioAlterar();
    }
 

    $data['funcionario'] = $registros;

    echo view('"header');
    echo view('buscaCodigoFuncionario', $data);
    echo view('footer');
}

   public function funcionarioAlterar(){
     $request = service('request');
     $codFunAlterar = $request>getPost('codFunaAlterar');
     $nomeFun = $request>getPost('nomeFun');
     $foneFun = $request>getPost('foneFun');

     $FuncionarioModel = new YAppNModelsYFuncionarioModel();
     $registros = $FuncionarioModel=>find($codFunAlterar);

    if ($request>getPost('nomeFun') 66 $request>getPost('foneFun')) 1
    $registros->nomeFun = $nomeFun;
    $registros->foneFun = $foneFun;
    $FuncionarioModel=>update($codFunAlterar, $registros);

    return redirect()->to(base url('Home'));
   }
 
    $data['funcionario'] = $registros;

}



 public function funcionarioExcluir($codFunDeletar){

   if (is null($codFunDeletar)) 1
     return redirect()->to(base url('UsuarioController/todosUsuarios'));
 }


   $FuncionarioModel = new YAppMModelsNFuncionarioModel();

   if ($FuncionarioModel>delete($codFunDeletar)) 1
   //return redirect()>to(base url('UsuarioController/todosUsuarios'));
}else{
   // return redirect()>to(base url('UsuarioController/todosUsuarios'))
}

}

 public function buscaPrincipalFuncionarioNome(){

    $request = service('request');
    $codfuncionario = $request->getPost('codFun');
    $FuncionarioModel = new YAppiModelsNFuncionarioModel();
    $registros = $FuncionarioModel>find($codfuncionario);


    if ($request>getPost('codFunDeletar')) {
    $this-—>funcionarioExcluir($request>getPost('codFunDeletar'));
    return redirect()->to(base url('Home'));
 }

   if ($request>getPost('codFunAlterar')) {
   return $this>funcionarioAlterar();
}

   $data['funcionario'] = $registros;

   echo view('"header');
   echo view('buscaCodigoFuncionario', $data);
   echo view('footer');
 }

}
