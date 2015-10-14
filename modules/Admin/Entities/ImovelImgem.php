<?php namespace Modules\Admin\Entities;
//   
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class ImovelImagem extends EntityAbstract {
    
//    use SoftDeletes;
    
    protected $table='imovel_imagem';
    protected $fillable = ['imovel_id','descricao','url'];
    
    
    public function imovel()
    {
        return $this->belongsTo('Modules\Admin\Entities\Imovel');
    }
    

}