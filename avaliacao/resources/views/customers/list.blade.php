@extends('layouts.master')

@section('title', 'Clientes - Awesome Customer')

@section('subtitle', 'Gerencie seus clientes')

@section('content')
    <a href="{{ url('customers/new-customer') }}">
        Adicionar cliente
    </a>
    
    <table class="customers-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Data de nascimento</th>
                <th>Telefones</th>
                <th>Local de nascimento</th>
                <th>Cadastrado por</th>
                <th>Cadastrado em</th>
                <th>Editado por</th>
                <th>Editado em</th>
                <th>Ações</th>
            </tr>   
        </thead>
        <tbody>
            @foreach ( $customers_data as $customer )
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->cpf }}</td>
                <td>{{ $customer->rg }}</td>
                <td>{{ $customer->birth_date }}</td>
                <td>{{ $customer->telephone }}</td>
                <td>{{ $customer->birth_place }}</td>
                <td>{{ $customer->created_by }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->updated_by }}</td>
                <td>{{ $customer->updated_at }}</td>
                <td>
                    <a href="customers/{{ $customer->id }}/edit">Editar</a>
                    
                    <form method="POST" action="customers/delete/{{ $customer->id }}">
                        @csrf
                        @method('delete')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            <tr>
            @endforeach
        </tbody>
    </table>
@endsection