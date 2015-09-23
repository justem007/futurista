@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">BlocoUm plataforma</h1>
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

                                                <p><a href="{!! route('tituloumcriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar novo titulo</button></a></p>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Titulo do Bloco</th>
                                                        <th>Descrição do Bloco</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($tituloBloco as $titulo)
                                                        <tr>
                                                            <td>{{ $titulo->id }}</td>
                                                            <td>{{ $titulo->nome_titulobloco }}</td>
                                                            <td>{{ $titulo->descricao_titulobloco }}</td>
                                                            <td><a href="{!! route('tituloum.edit',['id'=>$titulo->id]) !!}"> Editar</a> |
                                                                <a href="{!! route('tituloum.destroy',['id'=>$titulo->id]) !!}">Destroy</a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                                <p><a href="{!! route('blocoumcriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar novo bloco</button></a></p>
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

                                                <p><a href="{!! route('ferramentacriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar nova ferramenta</button></a></p>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Titulo da Ferramenta</th>
                                                        <th>Descrição da Ferramenta</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($ferModel as $fer)
                                                        <tr>
                                                            <td>{{ $fer->id }}</td>
                                                            <td>{{ $fer->nome_ferramenta }}</td>
                                                            <td>{{ $fer->descricao_ferramenta }}</td>
                                                            <td><a href="{!! route('ferramenta.edit',['id'=>$fer->id]) !!}"> Editar</a> |
                                                                <a href="{!! route('ferramenta.destroy',['id'=>$fer->id]) !!}">Destroy</a></td>
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