<h3>Fornecedores</h3>

@php
    /*
    if() {

    } elseif () {

    } else {

    }
    */
@endphp
{{-- @dd($fornecedores) --}}

{{--
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Exitem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10) 
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
--}}

@foreach ($fornecedores as $fornecedor)
        {{ $loop->iteration }}
    <br />
        Nome: {{ $fornecedor['nome'] }}
    <br />
    @if($fornecedor['status'])
        Status: Ativo
    @else
        Status: Inativo
    @endif
    <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'não foi informado'}}
    <br />
        Fone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
    <br />
    @switch($fornecedor['ddd'])
        @case (11)
            São Paulo - SP
            @break
        @case (85)
            Fortaleza - MG
            @break
        @case (61)
            Brasília - DF
            @break
        @default
            Estado não informado
    @endswitch
    <br /><br />
@endforeach