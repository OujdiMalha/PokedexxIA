<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">Liste des Pokémons</h1>
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($pokemon as $poke) <!-- Renommé l'itérateur de boucle -->
            <li>
                <a class="flex bg-white rounded-md shadow-md p-2 w-full hover:shadow-lg hover:scale-105 transition" href="#">
                    {{ $poke->nom }}
                </a>
            </li>
        @endforeach
    </ul>
</x-guest-layout>

