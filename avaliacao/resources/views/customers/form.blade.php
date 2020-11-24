@extends('layouts.master-small')

@section('title', 'Cadastrar - Awesome Customer')

@section('subtitle', 'Cadastre seus clientes agora mesmo')

@section('content')
    @if( Request::is('*/edit'))
        <form method="POST" action="{{ url('customers/update') }}/{{ $editFormularyData->id }}">
            @csrf
                <input type="text" name="name" placeholder="Nome" value="{{ $editFormularyData->name }}">

                <input type="text" name="cpf" placeholder="CPF" value="{{ $editFormularyData->cpf }}">

                <input type="text" name="rg" placeholder="RG" value="{{ $editFormularyData->rg }}">
                @error('rg') 
                    <span>{{ $message }}</span>
                @enderror

                <input type="date" name="birthDate" placeholder="Aniversário" value="{{ $editFormularyData->birth_date }}">
                @error('birthDate') 
                    <span>{{ $message }}</span>
                @enderror

                <input type="text" name="telephone" placeholder="Telefone(s)" value="{{ $editFormularyData->telephone }}">

                <select name="birthPlace">
                    <option>{{ $editFormularyData->birth_place }}</option>
                    <option value="BA">BA</option>
                    <option value="SP">SP</option>
                </select>

                <button type="submit" class="button button-block button-purple">Atualizar dados</button>
        </form>
    @else

        <form method="POST" action="{{ url('customers/add') }}">
            @csrf
                <input type="text" name="name" placeholder="Nome">

                <input type="text" name="cpf" placeholder="CPF">

                <input type="text" name="rg" placeholder="RG">
                @error('rg') 
                    <span>{{ $message }}</span>
                @enderror

                <input type="date" name="birthDate" placeholder="Aniversário">
                @error('birthDate') 
                    <span>{{ $message }}</span>
                @enderror

                <input type="text" name="telephone" placeholder="Telefone(s)">

                <select name="birthPlace">
                    <option value="BA">BA</option>
                    <option value="SP">SP</option>
                </select>

                <button type="submit" class="button button-block button-purple">Cadastrar cliente</button>
        </form>
    @endif
@endsection
