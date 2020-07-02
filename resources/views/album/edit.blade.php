@extends('layouts.app')

@section('content')

<div class="container">
<center>
<h3>Edit Data Album</h3>
<a href="{{ url('album') }}">Data Album</a></center>
<form action="{{url('/album/'.$row->album_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
@csrf
<table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor= "CCFFFF" align="center">
	<tr >
		<td> ID ARTIST </td>
		<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
	</tr>
	<tr>
		<td> NAMA ALBUM</td>
		<td><input type="text" name="album_name" value="{{$row->album_name}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="UPDATE"></td>
	</tr>
</table>
</form>
</div>

@endsection