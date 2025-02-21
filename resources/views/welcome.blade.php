@extends('layouts.navbar-footer')

@section('title')
Acceuil
@endsection

@section('content')
<div class="h-screen flex items-center bg-gray-500">
<main class="relative w-full">
        <img src="./assets/src/Images/Home-background.jpg" alt="Background image of a Setup of a freelancer" class="w-full h-screen object-cover">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex flex-col justify-center items-center text-center text-white px-4">
            <div class="mb-4">
                <i class="fas fa-laptop text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Nous connectons les gens pour donner vie à des projets</h1>
            <p class="text-lg mb-6">Trouvez des talents de haute qualité ou des emplois ouverts à l'aide d'outils d'IA qui vous permettent de garder le contrôle.</p>
            <div class="flex space-x-4">
                <a href="#" class="bg-teal-500 text-white px-6 py-3 rounded-md shadow hover:bg-teal-600">En Savoir Plus</a>
                <a href="#" class="bg-white text-gray-800 px-6 py-3 rounded-md shadow hover:bg-gray-200">Rejoignez-Nous</a>
            </div>
        </div>
    </main>
</div>
@endsection
