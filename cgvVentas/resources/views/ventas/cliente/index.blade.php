@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<<<<<<< HEAD
			<h3>Listado de Clientes <a href="cliente/create"><button class="btn btn-success">Nuevo</button></a></h3>
=======
			<h3>Listado de Clientes <a href="articulo/create"><button class="btn btn-success">Nuevo</button></a></h3>
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			@include('ventas.cliente.search')
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-condensed table-hover">
							<thead>
								<th>Id</th>
								<th>Nombre</th>
<<<<<<< HEAD
								<th>Tipo Dod</th>
								<th>Número de Doc</th>
								<th>Teléfono</th>
=======
								<th>Tipo_Doc</th>
								<th>Número_Doc</th>
								<th>Telefono</th>
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
								<th>Email</th>
								<th>Opciones</th>
							</thead>

							@foreach($personas as $per)
							<tr>
								<td>{{ $per->idpersona}}</td>
								<td>{{ $per->nombre}}</td>
								<td>{{ $per->tipo_documento}}</td>
								<td>{{ $per->num_documento}}</td>
								<td>{{ $per->telefono}}</td>
<<<<<<< HEAD
								<td>{{ $per->email}}</td>
								<td> <a href="{{URL::action('ClienteController@edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
									<a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
=======
						
								<td>{{ $art->email}}</td>
								<td> <a href="{{URL::action('ClienteController@edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
									<a href="" data-target="#modal-delete-{{$art->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
								</td>
							</tr>
							@include('ventas.cliente.modal')
							@endforeach
						</table>
					</div>
					{{$personas->render()}}
				</div>
			</div>
		</div>
	</div>
@endsection