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
                                <th>Image</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $item->url) }}" alt="Photo" width="100px" height="auto"></td>
                                    <td>
                                        <form id="formDelete_{{ $item->id }}" action="{{ route($params['main_route'].'.destroy',$item->id)  }}" method="post">
                                            @method('DELETE')
                                            <button type="button" onclick="btnDelete(this.event, {{ $item->id }})" class="btn btn-danger btn-sm">Deletar</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                        <div class="card-footer d-flex pb-0 bg-white justify-content-center">
                            {{ $data->withQueryString()->links('pagination::bootstrap-4') }}
                        </div>

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
<script >
    function btnDelete(e, value){
        Swal.fire({
            title: 'Deseja Deletar?',
            text: 'Deseja deletar esta imagem',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não',
        })
        .then((result) => {
            if (result.isConfirmed) {
                $('#formDelete_'+value).submit();
            }
        });
    };
</script>
@stop
