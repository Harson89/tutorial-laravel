@extends('layouts.app')
@section('content')

<h1> Podaci o korisnicima </h1>
<br />

<table border="1">
    <tr>
        <td>Id</td>
        <td>Ime</td>
        <td>Email</td>
        <td>Aktivan</td>
        <td>Pozicija</td>
        <td>Ustvarjen</td>
    </tr>

    @if($users)
@foreach($users as $user)

<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->ime}}</td>
    <td>{{$user->email}}</td>

    <td>
         @if(!empty($user->is_active))
         @if($user->is_active)
         Aktiven
         @else
         Ni aktiven
         @endif

         @else
         Ni podatka
         @endif
    </td>

    <td>{{$user->role->name}}</td>
    <td>{{$user->created_at->diffForHumans()}}</td>
</tr>

@endforeach
@endif

</table>

@endsection
