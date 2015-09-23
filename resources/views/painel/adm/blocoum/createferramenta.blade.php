@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Adicionar nova ferramenta</h1>

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
                                Painel administrativo da Ferramenta
                            </div>
                            <div class="panel-body">

                                {!! Form::open(['url'=>'admin/ferramenta']) !!}

                                <div class="form-group">
                                    {!! Form::label('nome_ferramenta', 'Nome :') !!}
                                    {!! Form::text('nome_ferramenta', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descricao_ferramenta', 'Description :') !!}
                                    {!! Form::text('descricao_ferramenta', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {!! Form::submit('Adicionar Ferramenta',['class'=>'btn btn-primary']) !!}
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