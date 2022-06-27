@extends('layouts.app')

@section('content')
    <div>
        @include('inc.messages')
    </div>
    <table class="border-4 rounded-md w-72 mt-6 mr-4 ml-2">
        <thead>
            <tr class="border-b-4">
                <th class="grid gap-4">Номер</th>
                <th class="grid gap-4">Заголовок</th>
                <th class="grid gap-4">Категория</th>
                <th class="grid gap-4">Дата создания</th>
                <th class="grid gap-4">Дата изменения</th>
                <th> </th>
            </tr>
        </thead>
    @foreach($data as $elem)
        <tbody>
            <tr class="border-b-4">
                <td class="grid gap-4">{{ $elem->id }}</td>
                <td class="grid gap-4">{{ $elem->title }}</td>
                <td class="grid gap-4">{{ $elem->category->name }}</td>
                <td class="grid gap-4">{{ $elem->created_at }}</td>
                <td class="grid gap-4">{{ $elem->updated_at }}</td>
                <td class="grid gap-4"><a class="bg-green-600 text-center text-white mt-6 w-32 rounded-md text-xl h-7" href="{{route('viewblog',$elem->id)}}"><button class="btn-outline-info">Прочитать</button></a></td>
            </tr>
        </tbody>
        @endforeach
            </table>
@endsection
