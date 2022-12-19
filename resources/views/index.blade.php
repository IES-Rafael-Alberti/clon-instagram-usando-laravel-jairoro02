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
                                <tr class="mt-4">
                                    <h1>{{$image->user->nick}}<h1>
                                    <a href="{{route('images.show', ['image'=>$image->id])}}"><img src={{$image->image_path}}></a>
                                    <p>{{$image->description }}</p>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>