@extends("layouts.app")
@section("content")
    @php
        /**
        * @var Illuminate\Support\Collection $comments -  массив, содержащий в себе объекты базовой коллекции,
        *                                                 хранящие информацю о комментариях
        * поля: name, comment, time
        * @var string $storeCommentsRoute - роут записи комментариев в БД
        **/
    @endphp
    <div id="comments">
        <comments   csrf                    = "{{csrf_token()}}"
                    comments                = "{{$comments}}"
                    store-comments-route    = "{{$storeCommentsRoute}}"></comments>
    </div>

@endsection
