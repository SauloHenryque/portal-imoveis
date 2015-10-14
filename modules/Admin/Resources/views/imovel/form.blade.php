@extends('app')

@section('content')
	
	<h1>Novo Imovel</h1>
        
        <div class="box-body">
            {!! Form:: open(array('url'=>'admin/imovel/salvar'))!!}
            
            {!! Form:: label('nome','Nome')!!}
            {!! Form:: text('nome', $imovel->nome,['class'=>'form-control']) !!}
           
            {!! Form:: label('descricao','Descrição')!!}
            {!! Form:: textarea('descricao',$imovel->descricao,['class'=>'form-control'])!!}
            
            {!! Form:: hidden('id',$imovel->id)!!}
           
            
            
            {!! Form:: submit('Salvar',['class'=>'btn btn-success glyphicon glyphicon-ok','style'=>'float: right'])!!}
            
            
            
            {!! Form:: close()!!}
            
            
        </div>
        
        <div class='form-actions'>
            <a class="btn btn-primary" href='{{asset('admin/imovel')}}'><i class='fa fa-reply fa-only'></i>Voltar</a>
            <a class="btn btn-primary" href="{{asset('admin/imovel/novo')}}"><i class='fa fa-book'></i>Novo Registro</a>
        </div>


@stop