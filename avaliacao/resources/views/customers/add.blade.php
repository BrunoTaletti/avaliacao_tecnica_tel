@extends('layouts.master')

@section('title', 'Cadastrar - Awesome Customer')

@section('subtitle', 'Cadastre seus clientes agora mesmo')

@section('content')
    <form method="POST" action="#">
        <input type="text" name="name" placeholder="Nome" required>

        <input type="text" name="cpf" placeholder="CPF" required>

        <input type="text" name="rg" placeholder="RG" required>

        <input type="text" name="birth_date" placeholder="Aniversário" required>

        <input type="text" name="telephone" placeholder="Telefone(s)" multiple required>

        <select name="birth_place">
            <option value="BA">Bahia</option>
            <option value="SP">São Paulo</option>
        </select>

        <button type="submit" class="button button-purple">Cadastrar</button>
    </form>
@endsection