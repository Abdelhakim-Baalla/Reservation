@extends('layouts.navbar-footer')

@section('title')
Salles
@endsection

@section('content')
<a href="/salles/creesalle" class="bg-white py-2 px-4 rounded-lg">Crée Salle</a>
<section class="flex flex-wrap gap-4 justify-center">
    @foreach($salles as $salle)
    
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 flex">
        <a href="#" class= "">
            <img class="rounded-t-lg h-full" src='{{$salle->image}}' alt="" />
        </a>
        <div class="p-2">
            <div class='flex justify-between'>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$salle->nom}}</h5>
                </a>
                <p class='flex items-center text-white'>{{$salle->prix}} MAD</p>
            </div>
            <small>{{$salle->localisation}}</small>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$salle->description}}</p>
            <div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$salle->date}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$salle->time}}</p>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Resérver
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    @endforeach
</section>
@endsection
