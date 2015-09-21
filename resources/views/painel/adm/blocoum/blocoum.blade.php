@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">BlocoUm plataforma</h1>
                        <p><a href="{!! route('blocoumcriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar novo bloco</button></p></a>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo do Bloco Um
                            </div>
                            <div class="panel-body">

                                         <div class="panel-body">
                                            <div class="table-responsive">

                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nome</th>
                                                        <th>Descrição</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($blocoumModel as $blocoum)
                                                    <tr>
                                                        <td>{{ $blocoum->id }}</td>
                                                        <td>{{ $blocoum->nome_blocoum }}</td>
                                                        <td>{{ $blocoum->descricao_blocoum }}</td>
                                                        <td><a href="{!! route('blocoum.edit',['id'=>$blocoum->id]) !!}"> Editar</a> |
                                                            <a href="{!! route('blocoum.destroy',['id'=>$blocoum->id]) !!}">Destroy</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                     </div>
                                 <!-- /.col-lg-4 -->
                               <!-- /.col-lg-12 -->
                             </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection