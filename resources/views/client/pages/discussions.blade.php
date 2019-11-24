@extends('layouts.client', ['page_title' => $page->title])

@section('content')
    @if($page->hasMedia('cover'))
        <section class="lozad page-header" data-background-image="{{ $page->getFirstMediaUrl('cover') }}"></section>
    @endif
    <section class="mt-32 mb-12 container">
        <h1 class="text-5xl font-thin leading-none text-center  font-heading">
            <span>{{ $page->title }}</span>
        </h1>
        <div class="page-content mt-8">
            {!! $page->body !!}
        </div>
        <div class="text-center mt-8 mb-8">
            <button class="button button--primary modal-btn" data-modal-open="discussion">
                @lang('pages.discussion.btn')
            </button>
        </div>
        @if($discussions->count() >1)
            <div class="flex flex-wrap justify-center ">
                @foreach($discussions as $discuss)
                    <article class="teaser-wrapper w-full lg:w-1/3 mb-6">
                        <a class="grid-item__content block" data-fancybox="gallery{{$loop->index}}"
                           href="{{ $discuss->getFirstMediaUrl('uploads') }}">
                            <img src="{{ $discuss->getBanner('uploads') }}" alt="">
                            @foreach($discuss->getMedia('uploads')->slice(1) as $media)
                                <a data-fancybox="gallery{{$loop->parent->index}}"
                                   href="{{ $media->getFullUrl() }}">
                                </a>
                            @endforeach
                            <div class="p-6 lg:p-10">
                                <div class="teaser__title">
                                    <h4 class="text-2xl title title--striped">
                                        <span>{{ $discuss->title }}</span>
                                    </h4>
                                    @if ($discuss->description)
                                        <div class="mt-3 font-serif italic">{{ $discuss->description }}</div>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
        @endif
        @include('client.pages.discussion_modal')
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush
