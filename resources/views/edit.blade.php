<style>
    .fill-text{
        padding: 20px;
    }
    .Head {
        font-size: 40px;
    }
</style>

<x-app-layout>
<x-slot name="header">
    <h2 class="Head">
        {{ __('Edit Task📑') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/task/{{ $task->id }}" class="fill-text">

                <div class="form-group">
                    <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>	
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="button">
                    <button type="submit" name="update"><image src="https://www.linkpicture.com/q/Check-Circle_40px.png" style="margin:auto; margin-top:30px;"></button>
                </div>
            {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>