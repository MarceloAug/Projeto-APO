@extends('site.principal')
@section('conteudo')


@if(!empty($pousadas))	
<div class="main main-raised">
	<div class="section section-basic">	
		<div class="container">
			<h3 class="title">Listagem de pousadas</h3>
			<div class="row justify-content-around">					 
				@foreach ($pousadas as $e)
					<div class="col-lg-3 col-md-6 col-sm-12">  
						<div class="card">
							<img src="{{asset('storage/imagens/'.$e->imagem)}}" class="card-img-top" alt="pousada{{$e->nome}}">
							<div class="card-body" >
								<h5><span class="tim-note text-warning" style="text-transform: uppercase;">{{$e->nome}}</span></h5>
								<p class="card-text">{{$e->observacoes}}</p>
									<i class="icon-location-pin icons font-2xl d-block mt-4"></i>{{$e->cidade}},{{$e->estado}},{{$e->endereco}}
									<p class="text-warning">Diarias a partir de:</p>
									<h2 class="text-muted">{{$e->valor}}R$</h2>
									
								<a href="/index/dadosCompra/{{$e->id}}" class="btn btn-primary">Reservar</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>	
</div>
@endif
@stop		
