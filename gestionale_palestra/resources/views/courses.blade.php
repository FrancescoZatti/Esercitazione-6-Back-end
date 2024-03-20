<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Corsi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table align-middle mt-4">
                        <thead class="table-light align-middle text-center">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Info</th>
                            <th scope="col">When</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-center">
                            @if($courses)
                                @foreach($courses as $key => $value)
                                    <tr>
                                        <!-- <th scope="row">{{$value->id}}</th> -->
                                        <td  class="text-center fw-bold fs-5 text-uppercase">{{ $value->title }}</td>
                                        <td>{{$value->description}}</td>
                                        <td>{{ $value->date }}</td>
                                        <td>{{ \Carbon\Carbon::parse($value->start_time)->format('H') }}:00</td>
                                        <td>{{ \Carbon\Carbon::parse($value->end_time)->format('H') }}:00</td>
                                        <td>
                                            <!-- <a type="button" class="btn btn-outline-info w-100" href="/courses/{{$value->id}}">Info</a> -->
                                            @if ($user && $user->admin == 0)
                                                    <a type="button" class="btn btn-outline-warning my-2 w-100" href="/courses/{{$value->id}}">Iscriviti</a>
                                                @else
                                                    <a type="button" class="btn btn-outline-info my-2 w-100" href="/courses/{{$value->id}}">Dettagli</a>
                                                    <a type="button" class="btn btn-outline-danger my-2 w-100" href="/courses/{{$value->id}}">Elimina</a>
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