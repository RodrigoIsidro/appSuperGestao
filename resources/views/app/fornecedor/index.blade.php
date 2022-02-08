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
    Nome: {{ $fornecedor['nome'] }}
    <br />
    @if($fornecedor['status'])
        Status: Ativo
    @else
        Status: Inativo
    @endif
    <br />
    @if(isset($fornecedor['cnpj']))
        Cnpj: {{$fornecedor['cnpj']}}
    @else
        Cnpj não foi informado
    @endif
    <br /><br />
@endforeach