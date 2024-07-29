@extends('adminlte::page')

@section('title', config('admin.title'))

@section('content_header')
    @include('admin.layouts.header')
@stop

@section('content')
    <section class="content" >
        <!-- Small boxes (Stat box) -->
	      <div class="row">

            <div class="col-lg-6 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-info">
	            <div class="inner">
                    <h3>{{ $data['receipt'] }}</h3>
                    <p>Recibos Emitidos</p>
	            </div>
	            <div class="icon">
	              <i class="fas fa-fw fa-receipt"></i>
	            </div>
	            <a href="{{ route('admin.receipt.index') }}" class="small-box-footer">Ver Todas <i class="fa fa-plus"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-green">
	            <div class="inner">
                    <h3>R$ {{ number_format($data['sum_receipt'], 2, ',', '.') }}</h3>
	                <p>Total de Emitidos</p>
	            </div>
	            <div class="icon">
	              <i class="fas fa-chart-bar "></i>
	            </div>
                <a href="{{ route('admin.receipt.report') }}" class="small-box-footer">Ver Todas <i class="fa fa-plus"></i></a>
	          </div>
	        </div>
	        {{-- <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-gray">
	            <div class="inner">
                        <h3>0</h3>

	              <p>Dependentes</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-user-plus"></i>
	            </div>
	            <a href="#" class="small-box-footer">Ver Todas <i class="fa fa-plus"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-yellow">
	            <div class="inner">
                        <h3>0</h3>

	              <p>Planos</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-file"></i>
	            </div>
	            <a href="#" class="small-box-footer">Ver Todas <i class="fa fa-plus "></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-red">
	            <div class="inner">
                        <h3>0</h3>
	              <p>Socios com Pagamentos Vencidos</p>
	            </div>
	            <div class="icon">
	              <i class="fas fa-file-invoice-dollar"></i>
	            </div>
	            <a href="#" class="small-box-footer">Ver Todas <i class="fa fa-plus"></i></a>
	          </div>
	        </div> --}}
	        <!-- ./col -->
      	</div>
      <!-- /.row -->
    </section>
@stop


@section('js')
@stop
