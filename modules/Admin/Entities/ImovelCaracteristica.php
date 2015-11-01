<?php namespace Modules\Admin\Entities;
//   
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class ImovelCaracteristica extends EntityAbstract {
    
//    use SoftDeletes;
    
    protected $table='imovel_caracteristica';
    protected $fillable = ['imovel_id','caracteristica_id'];
    
    
    public function imovel()
    {
        return $this->belongsTo('Modules\Admin\Entities\Imovel');
    }
    

}