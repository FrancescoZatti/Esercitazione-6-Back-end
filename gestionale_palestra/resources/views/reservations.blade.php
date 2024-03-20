<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prenotazioni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table table-striped table-hover">
                    <thead class="table-light align-middle text-center">
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">User ID</th>
                                <th scope="col">is_pending</th>
                                <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider text-center align-middle">
                                @if($reservations)
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <td>{{ $reservation->id }}</td>
                                            <td>{{ $reservation->course-> title}}</td>
                                            <td>{{ $reservation->user-> name}}</td>
                                            <td>{{ $reservation->is_pending }}</td>
                                           
                                            <td>
                                                @if ($user && $user->admin == 0)
                                                    <a type="button" class="btn btn-outline-dark my-2" href="/reservations/{{$reservation->id}}">Annulla iscrizione</a>
                                                @else
                                                    <a type="button" class="btn btn-outline-success my-2 w-100" href="/reservations/{{$reservation->id}}">Conferma</a>
                                                    <a type="button" class="btn btn-outline-danger my-2 w-100" href="/reservations/{{$reservation->id}}">Elimina</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>