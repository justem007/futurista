@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Editar categorias</h1>

                        @if ($errors->any())
                            <ul class="alert">
                                @foreach($errors->all() as $error)
                                    <li><% $error %></li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo das categorias
                            </div>
                            <div class="panel-body">

                                {!! Form::open(['route'=>['categoria.update', $categoriaModel->id, 'method'=>'post']]) !!}

                                <div class="form-group">
                                    {!! Form::label('nome_categoria', 'Nome :') !!}
                                    {!! Form::text('nome_categoria', $categoriaModel->nome_categoria, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descricao_categoria', 'Descrição :') !!}
                                    {!! Form::text('descricao_categoria', $categoriaModel->descricao_categoria, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="_token" value="<% csrf_token() %>">
                                    {!! Form::submit('Editar categoria',['class'=>'btn btn-primary']) !!}
                                </div>

                                {!! Form::close() !!}

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
