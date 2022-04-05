@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-16 border-b border-gray-200">
        <h1 class="text-5xl uppercase font-bold">
            Manage Tags
        </h1>
    </div>
</div>



<table class="w-4/5 m-auto">
    <thead class="bg-white border-b">
        <tr>
        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
            #
        </th>
        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
            Tag title
        </th>
        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
        </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($tags as $tag) 

            @if ($loop->odd)
            <tr class="bg-gray-100 border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $tag->tag_id }}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $tag->title }} 
                </td>
                <td class="text-sm text-gray-900 font-light py-4 ">
                    <a href="" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">Edit<i class= "ml-2 bi bi-pencil-square"></i></a>
                    <a href="" class="ml-5 text-red-500" >Delete<i class= "ml-2 bi bi-trash"></i></a>
                </td>
            </tr>
            @elseif ($loop->even)
            <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $tag->tag_id }}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $tag->title }} 
                </td>
                <td class="text-sm text-gray-900 font-light py-4">
                    <a href=""><i class=""></i></a>
                    <a href=""><i class=""></i></a>
                </td>
            </tr>

            @endif
        @endforeach
        
        

    </tbody>
</table>

@endsection
