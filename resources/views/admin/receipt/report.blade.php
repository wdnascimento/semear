@extends('adminlte::page')

@section('title', config('admin.title'))

@section('content_header')
    @include('admin.layouts.header')
@stop

@section('content')
    <section class="content" >
        <div id="app" class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="card-title">{{$params['subtitulo']}}</h3>
                            </div>
                        </div>
                        <form id="formBusca" action="{{ route($params['main_route'].'.report') }}" method="get" class="form">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-5">
                                    <label for="begin">Data Início</label>
                                    <input type="date" name="begin" value="{{  (isset($searchFields['begin']) ? $searchFields['begin'] : old('begin')) }}" class="form-control date" placeholder="" autofocus >
                                </div>
                                <div class="col-xs-12 col-sm-4 col-lg-5">
                                    <label for="end">Data Fim</label>
                                    <input type="date" name="end" value="{{  (isset($searchFields['end']) ? $searchFields['end'] : old('end')) }}" class="form-control date" placeholder="" autofocus >
                                </div>
                                <div class="p-1 col-xs-12 col-sm-2 col-lg-2 d-flex justify-content-initial align-items-end">
                                    <button type="submit" class="btn btn-success btn-sm">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        @if ($errors->any())
                            <div class="form-group">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if($data->count())
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <!-- id, payer, reference, value, created_at, updated_at-->
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th>Pagador (Sacado)</th>
                                            <th>Valor</th>
                                            <th>Referência</th>
                                            <th class="text-center">Imprimir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sum= 0;
                                        @endphp
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->payer }}</td>
                                            <td>R$ {{ number_format($item->value, 2, ',', '.') }}</td>
                                            <td>{{ $item->reference }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="javascript: printReceipt('{{ route($params['main_route'].'.print', $item->id)}}')" class="btn btn-info btn-xs"><span class="fa fa-print"></span> Imprimir</a>
                                            </td>
                                            @php
                                                $sum= $sum + $item->value;
                                            @endphp

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" class="text-right text-white bg-dark">
                                                <strong>TOTAL NESTA PÁGINA: R$ {{ number_format ($sum,2, ',', '.')}}</strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="card-footer d-flex pb-0 bg-white justify-content-center">
                                {{ $data->withQueryString()->links('pagination::bootstrap-4') }}
                            </div>

                        @else
                            <div class="alert alert-danger">
                                Nenhuma informação encontrada com os parâmetros informados.
                            </div>
                        @endif

                    </div>
                </div>
            </div>
       </div>
    </section>
@stop
@section('js')
    <script>
        function sendBusca(value){
            document.getElementById('formBusca').submit();
        }

        function printReceipt(url){
            window.open(url, 'Recibo', 'width=820,height=500');
        }
    </script>
@stop
