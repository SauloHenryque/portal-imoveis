<?php namespace Modules\Admin\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class EntityAbstract extends Model {
    
    use SoftDeletes;
    
    public function saveOrUpdate($dados)
    {
//        dd($dados);
        if(!isset($dados['id']) || !$dados['id']){
            $entity =  $this->create($dados);
//            $entity = static::create($dados);
            return $entity; 
        }
        
        $this->find($dados['id'])->fill($dados)->update();
        return $this->find($dados['id']);
//            unset($dados['_token']);
////            dd($dados);
//            $imovel = static::find($dados['id'])->update($dados);
//            $imovel = $dados['id'];
////            $this->update($dados);
//            return $imovel;
    }
    
    

}