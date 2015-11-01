<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Caracteristica;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller {
	
	public function index()
	{
//                dd($imovel::all()->toArray());
//                dd(Imovel::create(['nome'=>'Novo Imovel','descricao'=>'teste descricao']));
//                $imovel= Caracteristica::find(10);
//                dd($imovel);
		return view('admin::caracteristica.index',  compact('caracteristica'));
	}
        
	public function form(Caracteristica $caracteristica)
	{
                
		return view('admin::caracteristica.form',compact('caracteristica'));
	}
        
	public function save(Request $request, Caracteristica $caracteristica)
	{
            
            $caracteristica = $caracteristica->saveOrUpdate($request->all());
//            dd($imovel);
//               dd($request->all());
//               $imovel->fill($request->all());
//               $imovel->update($request->all());
///		//return view('admin::imovel.form');
//                dd($imovel);
//                
                return redirect('admin/caracteristica/'.$caracteristica->id .'/editar');
	}
	public function edit($id,Caracteristica $caracteristica)
	{
                $caracteristica =$caracteristica->find($id);
//                $dados = $imovel->find($id)->toarray();
		return view('admin::caracteristica.form',  compact('caracteristica'));
	}
	public function delete($id,Caracteristica $caracteristica)
	{
                dd($imovel->destroy($id));
		return view('admin::caracteristica.form');
	}
	
}