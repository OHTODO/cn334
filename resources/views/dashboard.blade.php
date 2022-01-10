<style>
    .action {
    }
    .Header {
        margin:0px:
    }
    .body-task {
        /* background-image: url('https://images.pexels.com/photos/995043/pexels-photo-995043.jpeg?cs=srgb&dl=pexels-ioannis-ritos-995043.jpg&fm=jpg'); */
        background-image: url('https://www.linkpicture.com/q/background_25.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
    #heD {
        font-size: 20px;
    }
    #heaD {
        font-size: 40px;
        margin-bottom: 25px;
    }
</style>

<x-app-layout class="Header">

    <div class="body-task">
        <div class="py-12"  >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5" style="padding:40px;">
                    <div class="flex">
                        <div class="flex-auto text-2xl mb-4" id="heaD">Tasks List📝</div>
                    </div>
                    <table class="w-full text-md rounded mb-4">
                        <thead>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5" id="heD">Task</th>
                            <th class="text-left p-3 px-5" id="heD">Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(auth()->user()->tasks as $task)
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3 px-5">
                                    {{$task->description}}
                                </td>
                                <td class="p-3 px-5">
                                    <a href="/task/{{$task->id}}" name="edit" class="action">Edit ✒️</a>
                                    <form action="/task/{{$task->id}}" class="inline-block">
                                        <button type="submit" name="delete" formmethod="POST" class="action">Delete ❌</button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                            <a href="/task"><image src="https://www.linkpicture.com/q/add_64px.png" style="margin:auto; margin-top:30px;"></a>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>   


