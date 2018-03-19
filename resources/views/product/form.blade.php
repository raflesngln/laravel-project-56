@extends('layouts.home')
@section('content')
	<section class="content">
		<div class="row ">
			<div class="col-12">
				<form class="form-horizontal" method="POST" action="/product/{{ $action }}{{($action!='store')? '/'.$product['id'] : ''}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-header">
						<h3>Form {{ ucwords($action) }}</h3>
					</div>
					<!-- for validation form inoput -->
					@if (count($errors) > 0)
							<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
							</ul>
							</div>
					@endif
					<div class="modal-body">
						@if($action=="delete")
							<div class="alert alert-danger">
	  							<strong>Perhatian!</strong> Menekan tombol delete akan menghapus data secara permanen dari database.
							</div>
						@endif
						<div class="form-group">
							<label class="col-sm-4 control-label">Nama Produk</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nama" placeholder="Nama Produk" value="{{ ($action!='store') ? $product['nama'] : '' }}">
								<input type="hidden" class="form-control" name="id" value="{{ ($action!='store') ? $product['id'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Jumlah Produk</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="{{ ($action!='store') ? $product['stok'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Satuan Produk</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="satuan" placeholder="Satuan Produk" value="{{ ($action!='store') ? $product['satuan'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Harga Produk</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="harga" placeholder="Harga Produk" value="{{ ($action!='store') ? $product['harga'] : '' }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">deskripsi</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="deskripsi" placeholder="deskripsi Produk" value="{{ ($action!='store') ? $product['deskripsi'] : '' }}">
							</div>
						</div>
						<div class="form-group">
						<input type="file" name="gambar">
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" onclick="window.history.back();">Cancel</button>
						<button type="submit" class="btn {{($action!='delete')? 'btn-success' : 'btn-danger' }} pull-right" >{{ ucwords($action) }}</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
@endsection