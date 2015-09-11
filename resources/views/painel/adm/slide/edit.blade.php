@extends('painel.pages.template')

@section('slide')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Editar banner</h1>

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
                                Painel administrativo do slide
                            </div>
                            <div class="panel-body">

                                {!! Form::open(['route'=>['slide.update', $slideEditar->id, 'method'=>'post']]) !!}

                                <div class="form-group">
                                    {!! Form::label('nome_slide', 'Nome :') !!}
                                    {!! Form::text('nome_slide', $slideEditar->nome_slide, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descricao_slide', 'Descrição :') !!}
                                    {!! Form::text('descricao_slide', $slideEditar->descricao_slide, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('link_slide', 'Link :') !!}
                                    {!! Form::text('link_slide', $slideEditar->link_slide, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Editar Banner',['class'=>'btn btn-primary']) !!}
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
