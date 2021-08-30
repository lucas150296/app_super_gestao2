<h3>fornecedor</h3>

@php

@endphp


@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
    fornecedor: {{ $fornecedor['nome']}}
    <br>
    status: {{ $fornecedor['status']}}
    <br>
    cnpj: {{ $fornecedor['cnpj'] ?? 'dado nao foi preenchido'}}
    <br>
    telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? '' }}
    <hr>
    @empty
        nao existem fornecedores cadastrados !   
    
    @endforelse
        
       

@endisset

<br>


