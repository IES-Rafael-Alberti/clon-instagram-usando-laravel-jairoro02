<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(Auth::user()->nick) }}
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
                                    @if($image->user_id == Auth::user()->id)
                                        <td>
                                            
                                                <img style="width: 30%" src={{$image->image_path}}>
                                            
                                        </td>
                                        <td><p>{{$image->description}}</p></td>
                                        <td>
                                            
                                            @foreach($comments as $comment)
                                                @if($image->id == $comment->image_id)

                                                    <p>{{$comment->user->nick}}  {{$comment->content}}</p>

                                                @endif

                                            @endforeach
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>