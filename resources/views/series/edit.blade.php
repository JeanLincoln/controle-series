<x-layout title="Editar Series {{ $Series->nome }}">
   <x-Series.form :action="route('Series.update', $Series->id)" :nome="$Series->nome" method="put"/>
</x-layout>