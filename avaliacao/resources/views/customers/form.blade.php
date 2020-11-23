@extends('layouts.master-small')

@section('title', 'Cadastrar - Awesome Customer')

@section('subtitle', 'Cadastre seus clientes agora mesmo')

@section('content')
    @if( Request::is('*/edit'))
        <form method="POST" action="{{ url('customers/update') }}/{{ $customer_edit_data->id }}">
            @csrf
                <input type="text" name="name" placeholder="Nome" required value="{{ $customer_edit_data->name }}">

                <input type="text" name="cpf" placeholder="CPF" required value="{{ $customer_edit_data->cpf }}">

                <input type="text" name="rg" placeholder="RG" required value="{{ $customer_edit_data->rg }}">

                <input type="date" name="birth_date" placeholder="Aniversário" required value="{{ $customer_edit_data->birth_date }}">

                <input type="text" name="telephone" placeholder="Telefone(s)" multiple required value="{{ $customer_edit_data->telephone }}">

                <select name="birth_place">
                    <option>LOCAL DE NASCIMENTO: {{ $customer_edit_data->birth_place }}</option>
                    <option value="BA">BA</option>
                    <option value="SP">SP</option>
                </select>

                <button type="submit" class="button button-block button-purple">Cadastrar</button>
        </form>
    @else

        <form method="POST" action="{{ url('customers/add') }}">
            @csrf
                <input type="text" name="name" placeholder="Nome" required>

                <input type="text" name="cpf" placeholder="CPF" required>

                <input type="text" name="rg" placeholder="RG" required">

                <input type="date" name="birth_date" placeholder="Aniversário" required>

                <input type="text" name="telephone" placeholder="Telefone(s)" multiple required>

                <select name="birth_place">
                    <option>SELECIONE</option>
                    <option value="BA">BA</option>
                    <option value="SP">SP</option>
                </select>

                <button type="submit" class="button button-block button-purple">Cadastrar</button>
        </form>
    @endif

    <h3>
        <a class="button-link button-link-purple button-center" href="{{ url('customers') }}">
            Voltar
        </a>
    </h3>
@endsection
