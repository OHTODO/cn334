<style>
    .fill-text {
        padding: 20px;
    }
    .Head {
        font-size: 40px;
        backgroung-color:transparent;
    }
    .column {
        column-count: 3;
        margin-top: 30px;
    }
    .text-box {
        padding:40px;
        height: 30%;
        width: 100%;
        border-radius: 30px;
    }
    .py-12 {
        background-image: url('https://www.linkpicture.com/q/background_25.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
    .fill-text {
        
    }
    #headerna {
        font-size: 40px;
        margin-bottom: 25px;
    }
    #button {
        display: block;
        text-align: center;
        margin: auto;
        /* margin-top: 30px; */
    }

    #calendar {
        size: 300px;
        border-radius: 15px;
        margin:auto;
        margin-top: 10px;
        height: 50px;
    }

</style>

<x-app-layout>
    
    <div class="py-12" >
        <h2 class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="headerna">
            {{ __('Add Task✒️') }}
        </h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5" style="border-radius: 50px;">
            
                <form method="POST" action="/task" class="fill-text">

                    <div class="text-bar">
                        <textarea name="description" class="text-box"  placeholder='Enter your task'></textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    
                    <div class="column">
                        <input type="date" name="goal" value="" id="calendar"/>

                        <button type="submit" id="button"><image src="https://www.linkpicture.com/q/add_64px.png"></button>
                    </div>

                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>