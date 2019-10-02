@extends('layouts.client', ['page_title' => $page->title])

@section('content')

    <section class="mt-32 mb-12 container">
        <h1 class="text-5xl font-thin leading-none text-center title--decorated font-heading">
            <span>{{ $page->title }}</span>

            <div class="title-decoration inset-x-0 mx-auto w-40">
                @foreach(range(1, 5) as $row)
                    <div class="w-full flex justify-center my-2" style="opacity: {{ 1.2 - $loop->iteration * 0.2 }}">
                        @foreach(range(0, rand(6, 12)) as $col)
                            <div class="w-1 h-1 bg-purple-500 mx-1 rounded-full"></div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </h1>

        <div class="page-content mt-8">
            {!! $page->body !!}
        </div>
    </section>

@endsection