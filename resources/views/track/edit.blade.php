@extends('layouts.app')

@section('content')

<div class="container">
<center>
<h3>Edit Data Track</h3>
<a href="{{ url('track') }}">Data Track</a></center>
<form action="{{url('/track/'.$row->track_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
@csrf
<table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor= "CCFFFF" align="center">
	<tr>
		<td> NAMA TRACK </td>
		<td><input type="text" name="track_name" value="{{$row->track_name}}"></td>
	</tr>
	<tr>
		<td> ID ARTIST </td>
		<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
	</tr>
	<tr>
		<td> ID ALBUM </td>
		<td><input type="text" name="album_id" value="{{$row->album_id}}"></td>
	</tr>
	<tr>
		<td> TIME </td>
		<td><input type="text" name="time" value="{{$row->time}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="UPDATE"></td>
	</tr>
</table>
</form>
</div>

@endsection