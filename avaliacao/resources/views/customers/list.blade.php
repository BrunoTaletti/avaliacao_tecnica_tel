@extends('layouts.master')

@section('title', 'Clientes - Awesome Customer')

@section('subtitle', 'Gerencie seus clientes')

@section('content')
    <a href="{{ url('customers/new') }}">
        <button class="button button-purple">
            <em class="fas fa-plus-circle"></em>
            Adicionar cliente
        </button>
    </a>

    <div class="table-responsive">
        <table class="table">
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
                        <a href="customers/{{ $customer->id }}/edit" class="table-button-icon table-button-purple">
                            <em class="fas fa-pen"></em>
                        </a>
                    </td>
                    <td>
                        <form action="customers/delete/{{ $customer->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="table-button table-button-red">
                                <em class="fas fa-trash"></em>
                            </button>
                        </form>
                    </td>
                <tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
