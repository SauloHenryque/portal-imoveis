<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\ImovelImagem;
use Illuminate\Http\Request;

class ImovelImagemController extends Controller {
	
	public function index(ImovelImagem $imovel)
	{
		return view('admin::imovel.index');
	}
        
	public function form(Imovel $imovel)
	{
		return view('admin::imovel.form',compact('imovel'));
	}
        
	public function save( ImovelImagem $imovelImagem)
	{
            print 'teste';exit();
            ImovelImagem::create(['imovel_id'=>10,'descricao'=>'bla','url'=>'www']);
            
//            $imovel = $imovel->saveOrUpdate($request->all());
//            dd($imovel);
//               dd($request->all());
//               $imovel->fill($request->all());
//               $imovel->update($request->all());
///		//return view('admin::imovel.form');
//                dd($imovel);
//                
//                return redirect('admin/imovel/'.$imovelImagem->id .'/editar');
	}
	public function edit($id,Imovel $imovel)
	{
                $imovel =$imovel->find($id);
//                $dados = $imovel->find($id)->toarray();
		return view('admin::imovel.form',  compact('imovel'));
	}
	public function delete($id,Imovel $imovel)
	{
                dd($imovel->destroy($id));
		return view('admin::imovel.form');
	}
	
}