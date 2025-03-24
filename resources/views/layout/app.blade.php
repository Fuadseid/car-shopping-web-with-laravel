@props(['title'=>'','footerlink'=>''])

<x-base-layout title={{$title}}>
  <x-layouts.header>


  </x-layouts.header>
  {{$slot}}
  <footer>
    <footer>
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
   {{$footerlink}}
 
    </footer>
</x-base-layout>




 

    





























