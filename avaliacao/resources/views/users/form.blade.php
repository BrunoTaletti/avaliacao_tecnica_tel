@extends('layouts.master-small')

@section('title', 'Ajustes - Awesome Customer')

@section('subtitle', 'Alterar configurações da conta')

@section('content')
    <form method="POST" action="{{ url('user/update') }}/{{ $user_data->id }}">
        @csrf
        
        <input type="text" name="name" placeholder="Nome" value="{{ $user_data->name }}">
        @error('name') 
            <span>{{ $message }}</span>
        @enderror        
        
        <input type="email" name="email" placeholder="Email" value="{{ $user_data->email }}">
        @error('email') 
            <span>{{ $message }}</span>
        @enderror
        
        <input type="password" name="password" placeholder="Password">

        <button type="submit" class="button button-block button-purple">Atualizar</button>
    </form>
    
    <a href="{{ url('user/delete') }}/{{ $user_data->id }}" class="button-link">
        <button class="button button-block button-red">
            Deletar minha conta
        </button>
    </a>
@endsection