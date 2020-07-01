@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Daftar Mahasiswa</h3>

	 <table class="table">
	 	<thead>
	 		<tr>
	 		<th scope="col"></th>
	 		<th scope="col">NIM</th>
	 		<th scope="col">NAMA</th>
	 		<th scope="col">JURUSAN</th>
	 		<th scope="col">ALAMAT</th>
	 		<th scope="col">AKSI
	 			<td>
	 				
	 			</td>
	 		</th>
	 		<th> <a href="{{ url('mahasiswa/create') }}">Tambah Data</a></th>

	 	</thead>
		</tr>
		<td>
			
		</td>
			
@foreach($rows as $row)
<tr>
	<th></th>
	<th>{{ $row->mhsw_nim }}</th>
	<th>{{ $row->mhsw_nama }}</th>
	<th>{{ $row->mhsw_jurusan }}</th>
	<th>{{ $row->mhsw_alamat }}</th>
	</tr>
@endforeach
	</table>
	</div>


@endsection 
