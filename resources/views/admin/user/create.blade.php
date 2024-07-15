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
                    @if( isset($data))
                        <form action="{{ route($params['main_route'].'.update',$data->id)  }}" method="post">
                        @method('PUT')
                    @else
                        <form action="{{ route($params['main_route'].'.store')  }}" method="post">
                    @endif
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') {{ 'is-invalid' }} @enderror" placeholder="Nome" value="{{ (isset($data)) ? $data['name'] : old('name') }}" aria-describedby="nameFeedback">
                                @error('name')
                                <div id="nameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control @error('email') {{ 'is-invalid' }} @enderror" placeholder="E-mail" value="{{ (isset($data)) ? $data['email'] : old('email') }}">
                                @error('email')
                                <div id="nameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role_id">Papel</label>
                                <select name="role_id" id="role_id" class="form-control @error('role_id') {{ 'is-invalid' }} @enderror">
                                    <option value="" > Selecione</option>
                                    @foreach ($preload['roles'] as $roles)
                                        <option value="{{ $roles->id }}" {{ (isset($data) && ($data['role_id'] == $roles->id)) ? 'selected' : '' }}> {{ $roles->name }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <div id="nameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- OCULTA SE FOR EDITAR --}}
                            @if( ! isset($data))

                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror" placeholder="Senha" name="password" id="password">
                                @error('password')
                                <div id="nameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar Senha</label>
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') {{ 'is-invalid' }} @enderror" placeholder="Confirmar Senha" id="password_confirmation">
                                @error('password_confirmation')
                                <div id="nameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            @endif
                            {{-- ATÉ AQUI OCULTA SE FOR EDITAR --}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.card-body -->
              </div>

           </div>
       </div>
    </section>
@stop



@section('js')

@stop
