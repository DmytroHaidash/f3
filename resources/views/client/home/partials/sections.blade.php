<section>
    @foreach($sections as $section)
        <h2 class="text-center text-3xl my-12 relative z-20 relative font-heading">
            <span>{{ $section->title }}</span>

            <div class="title-decoration inset-x-0 mx-auto w-40">
                @foreach(range(1, 5) as $row)
                    <div class="w-full flex justify-center my-2" style="opacity: {{ 1.2 - $loop->iteration * 0.2 }}">
                        @foreach(range(0, rand(6, 12)) as $col)
                            <div class="w-1 h-1 bg-{{ $section->color }}-500 mx-1 rounded-full"></div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </h2>

        @if ($section->children->count())
            <div class="flex flex-wrap">

                @foreach($section->children as $child)
                    @if((request()->route()->getName() == 'client.index') && $loop->index < 4 )
                        <div class="teaser-wrapper w-full lg:flex-1">
                            <article class="teaser section-teaser">
                                <figure class="lozad teaser__thumbnail"
                                        data-background-image="{{ $child->getBanner() }}"></figure>

                                <a class="teaser__link p-6 lg:p-10"
                                   href="{{ route('client.collection.index', [$section, $child]) }}">
                                    <div class="teaser__title">
                                        <h4 class="text-3xl title title--striped">
                                            <span>{{ $child->title }}</span>
                                        </h4>
                                    </div>

                                    @if ($child->hasTranslation('description'))
                                        <div class="teaser__description mt-3 px-6 lg:px-10">
                                            {{ Str::limit($child->description, 150) }}
                                        </div>
                                    @endif
                                </a>
                            </article>
                        </div>
                    @elseif(request()->route()->getName() != 'client.index')
                        <div class="teaser-wrapper w-full lg:flex-1">
                            <article class="teaser section-teaser">
                                <figure class="lozad teaser__thumbnail"
                                        data-background-image="{{ $child->getBanner() }}"></figure>

                                <a class="teaser__link p-6 lg:p-10"
                                   href="{{ route('client.collection.index', [$section, $child]) }}">
                                    <div class="teaser__title">
                                        <h4 class="text-3xl title title--striped">
                                            <span>{{ $child->title }}</span>
                                        </h4>
                                    </div>

                                    @if ($child->hasTranslation('description'))
                                        <div class="teaser__description mt-3 px-6 lg:px-10">
                                            {{ Str::limit($child->description, 150) }}
                                        </div>
                                    @endif
                                </a>
                            </article>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    @endforeach
</section>