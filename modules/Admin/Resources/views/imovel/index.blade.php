@extends('app')

@section('content')
	
	
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class='panel-title'>Listagem Imoveis</h3>
            </div>

            <div class="panel-body">
                <div class="col-xs-12">
        
                    <div class="box-body">
                        
                        <canvas id="pieChar" style="height: 300px; width: 647px;" width="647" height="323"></canvas>
            
<!--                        <table class="table table-bordered text-center">
                
                            {!! Form:: open(array('url'=>'admin/imovel/salvar'))!!}
            
        
                            {!! Form:: close()!!}
            
                        </table>-->
            
                    </div>
        
                <div class='form-actions'>
                        <a class="btn btn-danger delete_all" href=''><i class='fa fa-times-circle'></i>Excluir selecionados</a>
                        <a class="btn btn-primary" href="{{asset('admin/imovel/novo')}}"><i class='fa fa-book'></i>Novo Registro</a>
                    </div>
                </div>
            </div>
        </div>

@stop