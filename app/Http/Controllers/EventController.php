<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projecto;
use App\Models\Aluno;
use App\Models\Admini;
use App\Models\Areaact;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Support\Facades\DB;           
    
class EventController extends Controller
{
    

    public function index(){
        $curso = Curso::all();
            $aluno = Aluno::all();
            $area = Areaact::all();
            $projecto = Projecto::all();

                


            if (!is_null(auth()->user())) {
                $user = auth()->user();
                $username = strtoupper($user->username);

                 $search = request('search');

        if ($search) {
            $projecto2 = Projecto::where([
                ['nome_projecto', 'like', '%'.$search.'%']])->get();

             return view('/home', ['aluno' => $aluno, 
                                    'projecto'=>$projecto,
                                    'area' => $area,
                                    'curso' => $curso, 'search' => $search, 'projecto2' => $projecto2, 'username' => $username]);

        }else{
         return view('/home', ['aluno' => $aluno, 
                                'projecto'=>$projecto,
                                'area' => $area,
                                'curso' => $curso, 'search' => $search, 'username' => $username]);
    }
            
           
            

       }else{
        $search = request('search');

        if ($search) {
            $projecto2 =  Projecto::where([
                ['nome_projecto', 'like', '%'.$search.'%']])->get();

             if ($projecto2 == "[]") {
                 $projecto2 = "Não há nenhum projecto com o nome de: ".$search;
                  return view('/home', ['aluno' => $aluno, 
                                    'projecto'=>$projecto,
                                    'area' => $area,
                                    'curso' => $curso, 'search' => $search, 'projecto2' => $projecto2]);
             }else{
         return view('/home', ['aluno' => $aluno, 
                                'projecto'=>$projecto,
                                'area' => $area,
                                'curso' => $curso, 'search' => $search, 'projecto2' => $projecto2]);
             }
           

            

        }
    }

    return view('/home', ['aluno' => $aluno, 
                                'projecto'=>$projecto,
                                'area' => $area,
                                'curso' => $curso, 'search' => $search]);

       }
      
         



    
    
    

    public function SobreNos(){
         $user = auth()->user();
            $username = strtoupper($user->username);
          return view('SobreNos', ['username' => $username]);
    }
    public function adminRe(){
      $user = auth()->user();
         if (!is_null($user)) {
           return redirect('dashboard');
       }else{
        return view('auth/login');
       }
       
        
    }
    public function dashboard(){
         

            $aluno = Aluno::all();
           

            $area = Areaact::all();
           

            $projecto = Projecto::all();
           


        $user = auth()->user();
        $username = strtoupper($user->username);

       if (is_null($user)) {
           return redirect('admin-itel-reproject');
       }else{

        $admin = new Admini;
             if (is_null($admin)) {
         $admin->nome_admin = $user->username;
        $admin->password = $user->password;
        $admin->coordenacao = $user->coordenacao;
        $admin->email = $user->email;
        $admin->save();


        return view('dashboard', ['projecto' => $projecto, 'aluno' => $aluno, 'area' => $area, 'admin' => $admin, 'username' => $username]);
             }else{
                 return view('dashboard',['projecto' => $projecto, 'aluno' => $aluno, 'area' => $area, 'admin' => $admin, 'username' => $username]);
             }
        
       
        
       }
        
    }
    public function cadastro(){
    $user = auth()->user();
            $username = strtoupper($user->username);
        return view('cadastro-projectos', ['username' => $username]);
       
    }
     public function cadastro2(){
    $user = auth()->user();
            $username = strtoupper($user->username);
        return view('cadastro-projectos2', ['username' => $username]);
       
    }
    public function store(Request $request){
        

         $user = auth()->user();
            $username = strtoupper($user->username);
          $projecto_nome = $request->nome_projecto;
            $projecto_descricao = $request->descricao;
            $date = $request->date;
            $projecto = new Projecto;
            $projecto->data_cadastro = date("Y-m-d");
            $projecto->nome_projecto = $projecto_nome;
            $projecto->descricao_projecto = $projecto_descricao;
            $projecto->Data_Criacao = $date;
            if (strtotime($projecto->Data_Criacao) > strtotime(date("Y-m-d"))) { 
                    return redirect('cadastro-projectos')->with('msg', 'Data de criação incorrecta. Não pode ser maior que o dia de hoje');
            }else{
                    $allowedMimeTypes = ['image/jpeg','image/gif','image/png'];
$contentType = $request->image->getClientMimeType();

        

if(!in_array($contentType, $allowedMimeTypes) ){
  return redirect('cadastro-projectos')->with('msg', 'Nao e uma imagem');
    }else{
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;

               $extension = $requestImage->extension();

               $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;

               $requestImage->move(public_path('img/imagens'), $imageName);

               $projecto->image = $imageName;
}
 //Imagem
 }

   //arquivo rar

$projecto_arquivo = $request->file;

if(is_null($projecto_arquivo)) {
    $projecto_arquivo = NULL;
     $projecto->save();
   return redirect('cadastro-projectos2')->with('msg', 'Sucesso!');
}else{
    $allowedMimeTypes = 'application/octet-stream';
$contentType = $request->file->getClientMimeType();
if($contentType === $allowedMimeTypes){

    $requestFile = $request->file;

               $extension = $requestFile->extension();

               $fileName = md5($requestFile->getClientOriginalName(). strtotime("now")) . "." . $extension;

               $requestFile->move(public_path('img/Arquivos'), $fileName);

               $projecto->arquivos = $fileName;

                $projecto->save();
              

                    return redirect('cadastro-projectos2')->with('msg', 'Sucesso!');
}else{
    return redirect('cadastro-projectos')->with('msg', 'Nao e um arquivo zip ou rar');
}
}
}
}
//arquivo rar


public function store2(Request $request){
    $user = auth()->user();
    $username = strtoupper($user->username);
    $projecto = Projecto::all();

    $aluno_nome = $request->nome_aluno1;
    $aluno_curso = $request->curso1;
    $area_projecto = $request->area;

    $aluno = new Aluno;
    $area = new Areaact;
   
    $aluno->nome_aluno = $aluno_nome;
    $aluno->curso = $aluno_curso;
    $area->nome_area = $area_projecto;

    

  $projecto = Projecto::all();
    $projecto = DB::table('projectos')
    ->select('id')
    ->orderByDesc('id')
    ->limit(1)
    ->get();
        foreach ($projecto as $key => $value) {
            $area->projectos_id = $projecto[$key]->id;
        }

    $aluno->save();
    $area->save();

      return redirect('/dashboard')->with('msg', 'Cadastro Concluido!');
    
            }


public function destroy($id){


}

public function show($id_projecto = null){
     $user = auth()->user();
    if (is_null($user)) {
         $projecto = Projecto::findOrFail($id_projecto);
         echo $projecto;
            return view('/projecto',['projecto'=> $projecto]);
    }else{
       $username = strtoupper($user->username);
         $projecto = Projecto::findOrFail($id_projecto);
            echo $projecto;
            return view('/projecto',['projecto'=> $projecto, 'username' => $username]);  
    }
    
    
           

           

}

}
