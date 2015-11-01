@extends('app')

@section('content')
	
	
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class='panel-title'>Listagem Imoveis</h3>
            </div>

            <div class="panel-body">
                <div class="col-xs-12">
        
                    <div class="box-body">
                        
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th>DATA CADASTRO</th>
                                    <th>UF</th>
                                    <th>VALOR</th>
                                    <th>QUARTOS</th>
                                    <th>VAGAS</th>
                            </tr>
                            <?php //  echo $imovel->nome; exit(); ?>
                             <?php foreach($imovel as $imoveis ): ?>
                            <tr>
                                <td>
                                    <!--admin/imovel/1/editar-->
                                    <a href="{{asset('admin/imovel/'.$imoveis['id']. '/editar')}}" style="text-decoration:none; color:#000; font-weight: bold;">
                                    <?php echo $imoveis['id']?>
                                </td>
                                <td><?php echo $imoveis['nome']?></td>
                                <td><?php echo $imoveis['data_cadastro']?></td>
                                <td><?php echo $imoveis['uf']?></td>
                                <td><?php echo $imoveis['valor']?></td>
                                <td><?php echo $imoveis['quartos']?></td>
                                <td><?php echo $imoveis['vagas']?></td>
                            </tr>
                            <?php endforeach; ?>
                        
                        </table>
            
                    </div>
        
                <div class='form-actions'>
                        <a class="btn btn-danger delete_all" href=''><i class='fa fa-times-circle'></i>Excluir selecionados</a>
                        <a class="btn btn-primary" href="{{asset('admin/imovel/novo')}}"><i class='fa fa-book'></i>Novo Registro</a>
                    </div>
                </div>
            </div>
        </div>

@stop