@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<<<<<<< HEAD
			<h3>Nueva Cliente</h3>
=======
			<h3>Nueva Artículo</h3>
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

<<<<<<< HEAD
			{!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off'))!!}
=======
			{!!Form::open(array('url'=>'cgv/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			{{Form::token()}}
	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
<<<<<<< HEAD
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Dirección">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="tipo_documento">Documento</label>
				<select name="tipo_documento" class="form-control">
					<option value="CI">CI</option>
					<option value="RUC">RUC</option>
					<option value="Pasaporte">Pasaporte</option>
				</select>
=======
				<label>Categoria</label>
				<select name="idcategoria" class="form-control">
					@foreach ($categorias as $cat)
						<option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="codigo">Código</label>
				<input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Código del producto">
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
<<<<<<< HEAD
				<label for="num_documento">Número Documento</label>
				<input type="text" name="num_documento"  value="{{old('num_documento')}}" class="form-control" placeholder="Número del documento">
=======
				<label for="stock">Stock</label>
				<input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="Stock del producto">
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
<<<<<<< HEAD
				<label for="telefono">Teléfono</label>
				<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Teléfono">
=======
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Descripción del producto">
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
<<<<<<< HEAD
				<label for="email">Email</label>
				<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
=======
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen"  class="form-control" >
>>>>>>> afaa1ffcd9d2a747cac428670c1eceba4829a809
			</div>
		</div>
	
		<dir class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>
			{!!Form::close()!!}

@endsection