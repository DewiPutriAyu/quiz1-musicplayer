@extends('layouts.app')

@section('content')

<div class="container">
<center>
<h3>Tambah Data Artist</h3>
<a href="{{ url('artist') }}">Data Artist</a></center>
<form action="{{ url('/artist') }}" method="POST">
@csrf
<table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor= "CCFFFF" align="center">
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="artist_name"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
	</tr>
</table>
</form>
</div>

@endsection