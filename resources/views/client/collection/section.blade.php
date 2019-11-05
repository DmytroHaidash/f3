@extends('layouts.client', ['page_title' => $section->title])

@section('content')

    <section class="lozad page-header" data-background-image="{{ $section->getBanner() }}"></section>

    <section class="-mt-24 mb-12">
        <div class="container text-center">
            <h1 class="text-5xl leading-none  font-heading">
                <span>{{ $section->title }}</span>

                <div class="title-decoration inset-x-0 mx-auto w-40">
                    @foreach(range(1, 5) as $row)
                        <div class="w-full flex justify-center my-2"
                             style="opacity: {{ 1.2 - $loop->iteration * 0.2 }}">
                            @foreach(range(0, rand(6, 12)) as $col)
                                <div class="w-1 h-1 bg-yellow-500 mx-1 rounded-full"></div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </h1>

            @if ($section->hasTranslation('description'))
                <p class="text-2xl font-serif italic max-w-3xl mx-auto mt-4">
                    {!! $section->description !!}
                </p>
            @endif
        </div>
    </section>

    <section class="my-12">
        <div class="exhibits {{ $exhibits->count() ? 'grid' : '' }}">
            @each('partials.client.exhibits.teaser', $exhibits, 'exhibit', 'partials.client.layout.not-found')
        </div>

        @if ($exhibits->total() > 1)
            <div class="container mt-10">
                {{ $exhibits->links() }}
            </div>
        @endif
    </section>

    @if ($section->hasTranslation('body'))
        <section class="my-12 container max-w-5xl">
            {!! $section->body !!}
        </section>
    @endif

@endsection