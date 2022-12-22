<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <table class="table">

    @if (Auth::user())

    <a class="btn btn-primary" href={{route("task.create")}}>ajouter</a>
    @endif
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Tasks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($task as $item)
                            <tr>
                                <td>{{$item->id}} </td>
                                <td>{{$item->Task}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
