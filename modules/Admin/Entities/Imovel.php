<?php namespace Modules\Admin\Entities;
//   
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Imovel extends EntityAbstract {
    
//    use SoftDeletes;
    
    protected $table='imovel';
    protected $fillable = ['nome','data_cadastro','uf','valor','quartos','vagas','negociacao','endereco','bairro','cidade','cep','numero','responsavel','publicado'];
    
    public function imovelImagem()
    {
        return $this->hasMany('Modules\Admin\Entities\ImovelImagem');
    }

}