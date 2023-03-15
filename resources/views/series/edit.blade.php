<x-layout title="Editar Serie {{ $serie->nome }}">
   <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" method="put"/>
</x-layout>