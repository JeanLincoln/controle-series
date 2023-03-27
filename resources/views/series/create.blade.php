<x-layout title="Nova Série">
     <x-Series.form :action="route('Series.store')" :nome="old('nome')" method="post"/>
</x-layout>