@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
					 Data Kategori
					 <a href="{{url('kategori/create')}}" class="btn btn-dark float-right"><i class="mdi mdi-plus"></i> Tambah Data Kategori</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<hr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
							</thead>
							<tbody>
								@foreach($list_kategori as $kategori)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('kategori', $kategori->id)}}" class="btn btn-dark"><span class="mdi mdi-information-variant"></span></a>
										<a href="{{url('kategori', $kategori->id)}}/edit" class="btn btn-warning"><span class="mdi mdi-border-color"></span></a>
										@include('template.utils.delete', ['url' => url('kategori', $kategori->id)])
									</div>
									</td>
									<td>{{$kategori->nama}}</td>	
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