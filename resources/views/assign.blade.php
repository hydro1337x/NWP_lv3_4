<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign team member') }}
        </h2>
    </x-slot>

<body>
    <div>
        <div>
            <form action="/assign" method="post">
                @csrf
                <div>
                    <label for="sel" >Users</label>
                    <input type="hidden" id="sel" name="projectId" value="{{$projectId}}">
                    <select name="userId">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit">Assign</button>
            </form>
        </div>
    </div>
</body>

</x-app-layout>