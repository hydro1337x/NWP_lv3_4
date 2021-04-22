<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <header>
        <navigation >
            <a href="/create">Create new project </a>
        </navigation>
    </header>
    <div>
        <table>
            <caption>Owned projects</caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Tasks done</th>
                    <th>Started at</th>
                    <th>Finished at</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ownedProjects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->price}}</td>
                    <td>{{$project->tasks_done}}</td>
                    <td>{{$project->started_at}}</td>
                    <td>{{$project->finished_at}}</td>
                    <td>
                        <a href="/assign/{{$project->id}}">Assign member</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table>
        <caption>Assigned projects</caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Tasks done</th>
                    <th>Started at</th>
                    <th>Finished at</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assignedProjects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->price}}</td>
                    <td>{{$project->tasks_done}}</td>
                    <td>{{$project->started_at}}</td>
                    <td>{{$project->finished_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
