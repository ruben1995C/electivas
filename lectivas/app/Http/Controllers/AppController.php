<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Auth;

 USE App\User;
use App\Http\Requests;
use App\lectivas;
use DB;
use  App\Users_Lectivas;
class AppController extends Controller
{
  public function crearle(Request $request){

  



$datos=["nombre"=>$request->nombre,
"descripcion"=>$request->descripcion,
"profesor"=>$request->profesor,
"cupos"=>$request->cupos];
            
  Lectivas::create($datos);
            return redirect('crear')->with('message','¡Lectiva agregada con exito!');
 











}

 public function seleccionar(){

  $lectivas=db::table('lectivas')->select('id','nombre','descripcion','cupos','profesor')->get();

 return view('lectivas.seleccionarl', ["lectivas" => $lectivas] );

 }

public function inscribir($id){

$cupos=db::table('lectivas')->select(['cupos'])->where('id','=',$id)->first();
$yainscrito=db::table('Users-Lectivas')->select(DB::raw('count(*) c'))->where('id_users','=',Auth::user()->id)->where('id_lectiva','=',$id)->first();
if($yainscrito->c<=0){
if ($cupos->cupos>0) {
	$lectivas=["id_users"=> Auth::user()->id,"id_lectiva"=>$id];
Users_Lectivas::create($lectivas);


$resta=$cupos->cupos-1;
Lectivas::where('id', $id)->update(['cupos' => $resta]);
 return redirect('seleccionar');
}else{return redirect('aplicasion');}


}else{return redirect('aplicasion');}

}


public function eliminar($id){

Users_Lectivas::where('id_lectiva',$id)->delete();
Lectivas::where('id',$id)->delete();
 return redirect('seleccionar');
}



public function iractualizar($id){

	$lectivas=db::table('lectivas')->select('id','nombre','descripcion','cupos','profesor')->where('id',$id)->get();

 return view('lectivas.actualizar', ["lectivas" => $lectivas] );
}


public function irupdate(Request $request,$id_lectiva){

Lectivas::where('id',$id_lectiva )->update(['nombre' => $request->nombre,'profesor'=>$request->profesor,'cupos'=>$request->cupos,"descripcion"=>$request->descripcion]);
 return redirect('seleccionar');
}




 public function iralumnos($id){

  $alumnos=db::table('lectivas')->select('lectivas.nombre','users.name')->join('users-lectivas', 'users-lectivas.id_lectiva', '=', 'lectivas.id')->
join('users', 'users.id', '=', 'users-lectivas.id_users')->where('lectivas.id',$id)->
  get();

 return view('lectivas.alumnos', ["alumnos" => $alumnos] );

 }

}