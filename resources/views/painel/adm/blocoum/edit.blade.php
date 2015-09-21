@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Editar bloco</h1>

                        @if ($errors->any())
                            <ul class="alert">
                                @foreach($errors->all() as $error)
                                    <li><{{ $error  }}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo do Bloco Um
                            </div>
                            <div class="panel-body">

                                {!! Form::open(['route'=>['blocoum.update', $blocoumModel->id, 'method'=>'post']]) !!}

                                <div class="form-group">
                                    {!! Form::label('nome_blocoum', 'Nome :') !!}
                                    {!! Form::text('nome_blocoum', $blocoumModel->nome_blocoum, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descricao_blocoum', 'Descrição :') !!}
                                    {!! Form::text('descricao_blocoum', $blocoumModel->descricao_blocoum, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Editar bloco',['class'=>'btn btn-primary']) !!}
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
