@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

@include('site.layouts._partials.topo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('site.layouts._componentes.from_contato', ['classe' => 'borda-preta'])
               <p>A nossa equipe analisara a sua mensagem e retornaremos o mais brevemente possivel!</p>
               <p>nosso tempo medio de resposta e de 48 horas.</p> 
            @endcomponent
        </div>
    </div>  
</div>


@endsection
