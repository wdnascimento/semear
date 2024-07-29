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

                    @if ($errors->any())
                        <div class="form-group">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if( isset($data))
                        <div class="form-group">
                            <label for="payer">Pagador (Sacado)</label>
                            <input type="text" name="payer" id="payer" class="form-control @error('payer') {{ 'is-invalid' }} @enderror" readonly placeholder="Pagador (Sacado)" value="{{ (isset($data)) ? $data['payer'] : old('payer') }}" aria-describedby="payerFeedback">
                            @error('payer')
                            <div id="payerFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="reference">Referência</label>
                            <input type="text" name="reference" id="reference" class="form-control @error('reference') {{ 'is-invalid' }} @enderror" readonly placeholder="Referência" value="{{ (isset($data)) ? $data['reference'] : old('reference') }}" aria-describedby="referenceFeedback">
                            @error('reference')
                            <div id="referenceFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="value">Valor R$ </label>
                            <input type="text" name="value" id="value" class="form-control value @error('value') {{ 'is-invalid' }}  @enderror" readonly placeholder="0,00"
                            value="{{ (isset($data)) ? $data['value'] : old('value') }}">
                            @error('value')
                            <div id="nameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <form action="{{ route($params['main_route'].'.destroy',$data->id)  }}" method="post">
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            @csrf
                        </form>
                    @else
                        <div class="alert alert-danger" role="alert">
                            Informação não encontrada
                        </div>
                    @endif
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
