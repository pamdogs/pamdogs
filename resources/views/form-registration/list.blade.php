@extends('form-registration.template')

@section('content')
	<div class="clearfix grpelem panel-lista" id="pu488">
		<div class="clip_frame colelem" id="u488"><!-- image -->
		 	<a href="{{ url('previa') }}"><img class="block" id="u488_img" src="{{ url('images/pamdogs_ta1-cb-sf.png') }}" alt="" width="259" height="259"/></a>
		</div>
		<div class="clearfix colelem" id="pu632">
			<div class="shadow rgba-background grpelem" id="u632" style="height: auto">
				<div id="reportUsers" class="container">
					<table id="listUsers">
						<thead>
							<th>Nombre</th>
							<th>Email</th>
							<th>Localidad</th>
							<th>Fecha</th>
						</thead>
						<tbody>
						@foreach ($interesados as $interesado)
							<tr>
								<td>{{ $interesado->name }}</td>
								<td>{{ $interesado->email }}</td>
								<td>{{ $interesado->place }}</td>
								<td>{{ $interesado->created_at }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					
					{!! $interesados->render() !!}
				</div>
			</div>
		</div>
	</div>
@endsection