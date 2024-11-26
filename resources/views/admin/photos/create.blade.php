@extends('adminlte::page')

@section('title', config('admin.title'))

@section('content_header')
    @include('admin.layouts.header')
@stop

@section('content')
    <section class="content" >
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="card-title">{{$params['subtitulo']}}</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route($params['main_route'].'.index')}}" class="btn btn-primary btn-xs"><span class="fas fa-arrow-left"></span>  Voltar</a>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <form action="{{ route($params['main_route'].'.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div id="app">
                                <multiple-image-upload id="url" field_name="url" container_class="form-group col-lg-4 col-md-6 col-sm-12" old_image="{{  (isset($data['url'])) ? asset(str_replace('app/public/','storage/',$data['url']) ) : '' }}"></multiple-image-upload>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                            </div>
                        </form>
                        </div><!-- /.card-body -->
                    </div>
           </div>
       </div>
    </section>
@stop



@section('js')
    @vite('resources/js/app.js')
@stop
