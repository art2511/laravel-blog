@extends('layouts.app')

@section('title-block')Редактирование блога@endsection

@section('content')
    <form action="{{route('updateblogsubmit-form',$data->id)}}" method="put">
        @csrf

        {{ method_field('PUT') }}
        <div>
            <div class="border-4 rounded-md mt-6 mr-4 ml-2">
                <div>
                    <label for="title-input" class="ml-2 text-xl">Заголовок</label></br>
                    <input class="text-xl ml-2 border-4 rounded-md w-64" id="title-input" type="text" name="title" value="{{$data->title}}">
                </div>
                <div>
                    <label for="category-input" class="ml-2 text-xl">Категория</label></br>
                    <select class="ml-2 text-xl ml-2 border-4 rounded-md" id="category-input" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="text-input" class="ml-2 text-xl">Текст</label></br>
                    <textarea class="text-xl ml-2 border-4 rounded-md w-64" id="text-input" name="text">{{$data->text}}</textarea>
                </div>
                <div>
                        <button class="bg-green-600 text-white ml-2 my-8 w-32 rounded-md text-xl h-7" type="submit">Изменить</button>
                </div>
                <div  class="text-xl font-bold">
                    @include('inc.messages')
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
