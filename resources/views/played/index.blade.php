@extends('layouts.app')

@section('content')

<div class="container">
<center>
	<h3>Daftar Played</h3>
	<a href="{{ url('played/create') }}">Tambah Data Played</a></center>
	<table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor= "CCFFFF" align="center">
		<tr bgcolor= "48D1CC">
			<td> ARTIS ID </td>
			<td> ALBUM ID </td>
			<td> TRACK ID </td>
			<td> PLAYED </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td> {{ $row->artist_id }} </td>
			<td> {{ $row->album_id }} </td>
			<td> {{ $row->track_id }} </td>
			<td> {{ $row->played }} </td>
			<td><a href="{{url('played/'.$row->played_id.'/edit')}}"> EDIT </a></td>
			<td>
				<form action="{{url('played/'.$row->played_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button> HAPUS </button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection