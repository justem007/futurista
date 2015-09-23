@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Adicionar novo titulo</h1>

                        @if ($errors->any())
                            <ul class="alert">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Painel administrativo do Bloco Um - Títulos
                            </div>
                            <div class="panel-body">

                                {!! Form::open(['url'=>'admin/tituloum']) !!}

                                <div class="form-group">
                                    {!! Form::label('nome_titulobloco', 'Nome :') !!}
                                    {!! Form::text('nome_titulobloco', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descricao_titulobloco', 'Description :') !!}
                                    {!! Form::text('descricao_titulobloco', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {!! Form::submit('Adicionar Titulo',['class'=>'btn btn-primary']) !!}
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