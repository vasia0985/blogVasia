@extends('layouts.main')

@section('content')
    <table>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{ $post->user->name }}</td>    {{-- виводимо ім'я користувача і назву категорії зі зв'язаних таблиць --}}
                <td>{{ $post->category->title }}</td>
            </tr>
        @endforeach
    </table>
@endsection
