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
                                    <p>{{$image->description}}</p>
                                    </td>
                                    <td>
                                        @foreach($comments as $comment)
                                            @if($image->id == $comment->image_id)

                                                <p>{{$comment->user->nick}}  {{$comment->content}}</p>

                                            @endif

                                        @endforeach
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