@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Menu plataforma</h1>
                        <p><a href="{!! route('menucriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar novo menu</button></p></a>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo do Menu
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
                                                        <th>Link</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($menuModel as $menu)
                                                    <tr>
                                                        <td>{{ $menu->id }}</td>
                                                        <td>{{ $menu->nome_menu }}</td>
                                                        <td>{{ $menu->descricao_menu }}</td>
                                                        <td>{{ $menu->link_menu }}</td>
                                                        <td><a href="{!! route('menu.edit',['id'=>$menu->id]) !!}"> Editar</a> |
                                                            <a href="{!! route('menu.destroy',['id'=>$menu->id]) !!}">Destroy</a></td>
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