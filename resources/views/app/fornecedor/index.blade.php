<h3>Fornecedor</h3>


@php

@endphp

@isset($fornecedores)


    @forelse($fornecedores as $indice => $fornecedor)
        @dd($loop)
       Interação atual:  {{$loop->iteration}}
       <br>
    Fornecedor: {{$fornecedor['nome']}}
    <br>
    Status: {{$fornecedor['status']}}
    <br>
    CNPJ: {{$fornecedor['cnpj'] ?? ''}}
    <br>
       @if($loop->first)
           Primeira interação do loop
       @endif
       @if($loop->last)
           Ultima interação do loop

           <br>
           Total de registros: {{$loop->count}}
           @endif
    <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse

    @endisset



