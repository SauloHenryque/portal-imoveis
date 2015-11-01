<?php namespace Modules\Admin\Entities;
//   
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Caracteristica extends EntityAbstract {
    
//    use SoftDeletes;
    
    protected $table='caracteristica';
    protected $fillable = ['nome'];
    
    public function imovelCaracteristica()
    {
        return $this->hasMany('Modules\Admin\Entities\ImovelCaracteristica');
    }

}