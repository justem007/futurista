@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">slide banner principal</h1>
                        <p><a href="{!! route('slidecriar') !!}"> <button type="button" class="btn btn-danger btn-block">Adicionar Novo</button></p></a>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo do slide
                            </div>
                            <div class="panel-body">

                                         <div class="panel-body">
                                            <div class="table-responsive">

                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nome</th>
                                                        <th>Descrição</th>
                                                        <th>Link</th>
                                                        <th>Imagem</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($slides as $slide)
                                                    <tr>
                                                        <td><% $slide->id %></td>
                                                        <td><% $slide->nome_slide %></td>
                                                        <td><% $slide->descricao_slide %></td>
                                                        <td><% $slide->link_slide %></td>
                                                        <td>Imagem</td>
                                                        <td><a href="<% route('slide.edit',['id'=>$slide->id]) %>"> Editar</a> |
                                                            <a href="<% route('slide.destroy',['id'=>$slide->id]) %>">Destroy |</a></td>
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