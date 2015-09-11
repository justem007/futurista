@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Categorias plataforma</h1>
                        <p><a href="{!! route('categoriascriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar nova categoria</button></p></a>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo das categorias
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
                                                    @foreach($categoriaModel as $categoria)
                                                    <tr>
                                                        <td><% $categoria->id %></td>
                                                        <td><% $categoria->nome_categoria %></td>
                                                        <td><% $categoria->descricao_categoria %></td>
                                                        <td><a href="<% route('categoria.edit',['id'=>$categoria->id]) %>"> Editar</a> |
                                                            <a href="<% route('categoria.destroy',['id'=>$categoria->id]) %>">Destroy</a></td>
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