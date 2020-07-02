@extends('layouts.app')

@section('content')

<div class="container">
<center>
<h3>Edit Data Played</h3>
<a href="{{ url('played') }}">Data Played</a></center>
<form action="{{url('/played/'.$row->played_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
@csrf
<table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor= "CCFFFF" align="center">
	<tr>
		<td> ID ARTIST </td>
		<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
	</tr>
	<tr>
		<td> ID ALBUM </td>
		<td><input type="text" name="album_id" value="{{$row->album_id}}"></td>
	</tr>
	<tr>
		<td> ID TRACK </td>
		<td><input type="text" name="track_id" value="{{$row->track_id}}"></td>
	</tr>
	<tr>
		<td> PLAYED </td>
		<td><input type="text" name="played" value="{{$row->played}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="UPDATE"></td>
	</tr>
</table>
</form>
</div>

@endsection