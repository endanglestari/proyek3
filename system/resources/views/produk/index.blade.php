@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
					 Data Produk Sayur
					 <a href="{{url('produk/create')}}" class="btn btn-dark float-right"><i class="mdi mdi-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<hr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Berat</th>
								<th>Stok</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('produk', $produk->id)}}" class="btn btn-dark"><span class="mdi mdi-information-variant"></span></a>
										<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"><span class="mdi mdi-border-color"></span></a>
										@include('template.utils.delete', ['url' => url('produk', $produk->id)])
									</div>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->berat}}</td>
									<td>{{$produk->stok}}</td>	
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</div>


@endsection