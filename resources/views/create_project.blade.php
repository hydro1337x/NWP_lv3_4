
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create project') }}
        </h2>
    </x-slot>

<body>
    <div>
        <div>
            <form action="/create" method="post">
                @csrf
                <div>
                    <label for="nameInput">Name</label>
                    <input type="text" id="nameInput" placeholder="Name" name="name" />
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" id="description" placeholder="Description" name="description" />
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="text" id="price" placeholder="Price" name="price" />
                </div>
                <div>
                    <label for="start">Started at</label>
                    <input type="date" id="start" placeholder="Started at" name="started_at" />
                </div>
                <div>
                    <label for="end">Finished at</label>
                    <input type="date" id="end" placeholder="Finished at" name="finished_at" />
                </div>
                <div">
                    <label for="tasks_done">Completed tasks</label>
                    <textarea name="tasks_done" id="tasks_done">
                </textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</x-app-layout>