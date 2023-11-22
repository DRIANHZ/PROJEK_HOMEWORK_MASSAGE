@extends('master')


@section('content')
<table class="border">
    @foreach($pr as $pr)
    <tr>
        <td>{{$pr->id_pr}}</td>
        <td>{{$pr->id_mapel}}</td>
        <td>{{$pr->id_guru}}</td>
        <td>{{$pr->title}}</td>
        <td>{{$pr->content}}</td>
        <td>{{$pr->massage}}</td>
        <td>{{$pr->uploded_time}}</td>
    </tr>
    @endforeach
</table>

@endsection
