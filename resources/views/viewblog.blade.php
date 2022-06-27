@extends('layouts.app')

@section('content')
    <div>
        <div class="border-4 rounded-md w-72 mt-6 mr-4 ml-2">
                <h3 class="text-center font-bold text-3xl">{{$data->title}}</h3>
                <div>
                    <p class="ml-2 text-xl" name="category_id">{{$data->category->name}}</p>
                </div>
                <div class="border-b-4">
                    <p class="ml-2 text-xl" name="text">{{$data->text}}</p>
                </div>
                <div>
                    <div>
                        <form action="{{route('updateblog-form',$data->id)}}" method="get">
                            @csrf
                            <button class="bg-green-600 text-white ml-2 mt-6 w-40 rounded-md text-xl h-7">Редактировать</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{route('deleteblog-form',['articles'=>$data->id])}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="bg-green-600 text-white ml-2 my-8 w-32 rounded-md text-xl h-7" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </div>
@endsection
