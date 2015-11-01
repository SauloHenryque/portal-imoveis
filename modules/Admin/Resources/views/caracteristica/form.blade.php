@extends('app')

@section('content')

<!--<h1>Novo Imovel</h1>-->

<div class="form-group col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Imovel</h3>
        </div>

        <ul class="nav nav-tabs" role="tablist">
            <li class="active" data-type="main">
                <a href="#dados" data-form="dados" role="tab" data-toggle="tab" >Dados</a>
            </li>
            <li class>
                <a href="#imagem" role="tab" data-toggle="tab" >Dados</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="panel-body">

                <div class="tab-pane active" id="dados" data-type="main" >
                    {!! Form:: open(array('url'=>'admin/imovel/salvar'))!!}

                    <div class="form-group col-sm-12">
                        {!! Form:: label('nome','Nome')!!}
                        {!! Form:: text('nome', $imovel->nome,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('data_cadastro','Data Cadastro')!!}
                        {!! Form:: date('data_cadastro', $imovel->data_cadastro,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('uf','UF')!!}
                        {!! Form:: text('uf', $imovel->uf,['class'=>'form-control','size'=>2]) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('valor','Valor')!!}
                        {!! Form:: text('valor', $imovel->valor,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('quartos','Quartos')!!}
                        {!! Form:: text('quartos', $imovel->quartos,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('vagas','Vagas')!!}
                        {!! Form:: text('vagas', $imovel->vagas,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-9">
                        {!! Form:: label('negociacao','Negociação')!!}
                        {!! Form:: text('negociacao', $imovel->negociacao,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form:: label('endereco','Endereço')!!}
                        {!! Form:: text('endereco', $imovel->endereco,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('bairro','Bairro')!!}
                        {!! Form:: text('bairro', $imovel->bairro,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('cidade','Cidade')!!}
                        {!! Form:: text('cidade', $imovel->cidade,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('cep','CEP')!!}
                        {!! Form:: text('cep', $imovel->cep,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('numero','Numero')!!}
                        {!! Form:: text('numero', $imovel->numero,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                        {!! Form:: label('responsavel','Responsavel')!!}
                        {!! Form:: text('responsavel', $imovel->responsavel,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group col-sm-3">
                        {!! Form:: label('publicado','Publicado')!!}
                        {!! Form:: checkbox('publicado', $imovel->publicado,true,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12"> 
                        {!! Form:: label('observacao','Observação')!!}
                        {!! Form:: textarea('observacao',$imovel->observacao,['class'=>'form-control'])!!}
                    </div>

                    {!! Form:: hidden('id',$imovel->id)!!}

                    {!! Form:: submit('Salvar',['class'=>'btn btn-success glyphicon glyphicon-ok','style'=>'float: right'])!!}

                    {!! Form:: close()!!}
                </div>
                <div class="panel-body">
                    <div class="tab-pane" id="imagem" data-type="tab" >
                        {!! Form:: open(array('url'=>'admin/imovel/salvar'))!!}

                        <div class="form-group col-sm-12">
                            {!! Form:: label('nome','Nome')!!}
                            {!! Form:: text('nome', $imovel->nome,['class'=>'form-control']) !!}
                        </div>

                        {!! Form:: hidden('id',$imovel->id)!!}

                        {!! Form:: submit('Salvar',['class'=>'btn btn-success glyphicon glyphicon-ok','style'=>'float: right'])!!}

                        {!! Form:: close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='form-actions'>
    <a class="btn btn-primary" href='{{asset('admin/imovel')}}'><i class='fa fa-reply fa-only'></i>Voltar</a>
    <a class="btn btn-primary" href="{{asset('admin/imovel/novo')}}"><i class='fa fa-book'></i>Novo Registro</a>
</div>

<script type="text/javascript" charset="utf-8">
    $(document).on('click', '.paginationControl a', function () {
        $.post(this.href, function (response) {
            if (response) {
                $('.tab-content').empty().html(response);
            }
            return false;
        });
        return false;
    });
</script>

@stop