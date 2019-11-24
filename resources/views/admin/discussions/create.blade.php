@extends('layouts.admin', ['page_title' => 'Новый предмет'])

@section('content')

    <section>
        <form action="{{ route('admin.discussions.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <block-editor title="Новый предмет">
                @foreach(config('app.locales') as $lang)

                    <fieldset slot="{{ $lang }}">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input id="title" type="text" name="{{$lang}}[title]"
                                   class="form-control{{ $errors->has($lang.'.title') ? ' is-invalid' : '' }}"
                                   value="{{ old($lang.'.title') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Краткое описание</label>
                            <textarea rows="3" name="{{$lang}}[description]"
                                      class="form-control">{{ old($lang.'.description') }}</textarea>
                        </div>
                    </fieldset>

                @endforeach
            </block-editor>


            <div class="mt-4">
                <multi-uploader></multi-uploader>
            </div>

            <div class="mt-4 d-flex align-items-center">
                <button class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </section>

@endsection