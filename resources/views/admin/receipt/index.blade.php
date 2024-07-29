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
                        @can('admin')
                        <div class="col-6 text-right">
                            <a href="{{ route($params['main_route'].'.create')}}" class="btn btn-primary btn-xs"><span class="fas fa-plus"></span> Novo Cadastro</a>
                        </div>
                        @endcan
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    @if(isset($data) && count($data))
                        <table class="table table-hover">
                            {{-- id, payer, reference, value, created_at, updated_at --}}
                            <thead>
                            <tr>
                                <th>Pagador (Sacado)</th>
                                <th>Valor</th>
                                <th>Referência</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->payer }}</td>
                                    <td>R$ {{ number_format($item->value, 2, ',', '.') }}</td>
                                    <td>{{ $item->reference }}</td>
                                    <td>
                                        <a href="javascript: printReceipt('{{ route($params['main_route'].'.print', $item->id)}}')" class="btn btn-info btn-xs"><span class="fa fa-print"></span> Imprimir</a>
                                        <a href="{{ route($params['main_route'].'.edit', $item->id) }}" class="btn btn-info btn-xs"><span class="fas fa-edit"></span> Editar</a>
                                        <a href="{{ route($params['main_route'].'.show', $item->id) }}" class="btn btn-danger btn-xs"><span class="fas fa-trash"></span> Deletar</a>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-success m-2" role="alert">
                            Nenhuma informação cadastrada.
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
              </div>


           </div>
       </div>
    </section>
@stop
@section('js')
<script>
    function printReceipt(url){
        window.open(url, 'Recibo', 'width=820,height=500');
    }
</script>
@stop
