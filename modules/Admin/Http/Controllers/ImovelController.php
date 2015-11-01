<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller {

    public function index(Imovel $imovel) {
//                $imovel::all()->toArray();
//        print 'teste';exit();
//        $imovel = $imovel->all()->toArray();
//                dd($imovel);
//                dd(Imovel::create(['nome'=>'Novo Imovel','descricao'=>'teste descricao']));
//                $imovel= Imovel::find(10);
//                dd($imovel);
        return view('admin::imovel.index', compact('imovel'));
    }

    public function form(Imovel $imovel) {
            print 'teste';exit();
//        return view('admin::imovel.form', compact('imovel'));
    }

    public function save(Request $request, Imovel $imovel) {

//        dd($request);
        $imovel = $imovel->saveOrUpdate($request->all());
//            dd($imovel);
//               dd($request->all());
//               $imovel->fill($request->all());
//               $imovel->update($request->all());
///		//return view('admin::imovel.form');
//                dd($imovel);
//                
        return redirect('admin/imovel/' . $imovel->id . '/editar');
    }

    public function edit($id, Imovel $imovel) {
        $imovel = $imovel->find($id);
//                $dados = $imovel->find($id)->toarray();
        return view('admin::imovel.form', compact('imovel'));
    }

    public function delete($id, Imovel $imovel) {
        dd($imovel->destroy($id));
        return view('admin::imovel.form');
    }

}
