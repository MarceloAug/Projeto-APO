@extends('site.principal')
@section('conteudo')


@if(!empty($pousadas))	
<div class="main main-raised">
	<div class="section section-basic">	
		<div class="container">
			<div class="row justify-content-around">					 
				@foreach ($pousadas as $e)
					<div class="col-lg-3 col-md-6 col-sm-12">  
						<div class="card">
							<img src="{{asset('storage/imagens/'.$e->imagem)}}" class="card-img-top" alt="...">
							<div class="card-body" >
								<h5 class="card-title">{{$e->nome}}</h5>
								<p class="card-text">{{$e->observacoes}}</p>
									<i class="icon-location-pin icons font-2xl d-block mt-4"></i>{{$e->cidade}},{{$e->estado}},{{$e->endereco}}
									<p class="text-primary">Diarias a partir de</p>
									<h2 class="text-success">{{$e->valor}}R$</h2>
									
								<a href="/index/dadosCompra/{{$e->id}}" class="btn btn-success">Reservar</a>
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
