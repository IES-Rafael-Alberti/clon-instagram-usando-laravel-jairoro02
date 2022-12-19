<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <tbody>
                            @foreach ( $images as $image )
                                <tr>
                                    <td>
                                        <h1>{{$image->user->nick}}<h1>
                                        <img src={{$image->image_path}}>
                                    </td>
                                    <td>
                                    <p>{{$image->description }}</p>
                                    @if(Auth::user()->id == $image->user->id )
                                    <form action="{{route('images.destroy', ['image'=>$image->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="this.closest('form').submit(); return false;">
                                                <div class="flex items-center gap-4">
                                                    <x-primary-button style="color:red">{{ __('Borrar') }}</x-primary-button>
                                                </div>
                                        </a>
                                    </form>
                                    @endif
                                    </td>
                                    <td>
                                        @foreach($comments as $comment)
                                            @if($image->id == $comment->image_id)

                                                <p>{{$comment->user->nick}}  {{$comment->content}}</p>

                                            @endif
                                            <div class="p-6 text-gray-900">
                                            

                                        @endforeach
                                        <section>

                                            <form method="POST" action="{{ route('comments.store',['image'=> $image->id]) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                                                @csrf
                                                @method('post')

                                                <div>
                                                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu comentario</label>
                                                    <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Añade tu comentario aquí"></textarea>
                                                </div>

                                                <div class="flex items-center gap-4">
                                                    <x-primary-button>{{ __('Añadir') }}</x-primary-button>
                                                </div>
                                            </form>
                                        </section>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>