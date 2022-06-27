@extends('layouts.app')

@section('title-block')Написать блог@endsection

@section('content')
    <form action="{{ route('submitblog-form') }}" method="post">
        @csrf

            <div>
                <div>
                    <h3 class="text-center font-bold text-4xl">Ваш блог</h3>
                    <div class="border-4 rounded-md mt-6 mr-4 ml-2">
                        <div>
                            <label for="title-input" class="ml-2 text-xl">Заголовок</label></br>
                            <input class="text-xl ml-2 border-4 rounded-md w-64" id="title-input" type="text" name="title">
                        </div>
                        <div>
                            <label for="category-input" class="ml-2 text-xl">Категория</label></br>
                            <select class="ml-2 text-xl ml-2 border-4 rounded-md" id="category-input" name="category_id">
                                @foreach($data as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="text-input" class="ml-2 text-xl">Текст</label></br>
                            <textarea class="text-xl ml-2 border-4 rounded-md w-64" id="text-input" name="text"></textarea>
                        </div>
                        <div>
                            <button class="bg-green-600 text-white ml-2 my-8 w-40 rounded-md text-xl h-7" type="submit">Опубликовать</button>
                        </div>
                        <div class="text-xl font-bold">
                            @include('inc.messages')
                        </div>
                    </div>
                </div>
            </div>
    </form>
@endsection
