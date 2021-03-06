<div class="custom-modal" id="discussion">

    <div class="custom-modal--close">
        <svg width="24" height="24" class="fill-current">
            <use xlink:href="#close"></use>
        </svg>
    </div>

    <h5 class="text-2xl text-center mb-5">@lang('pages.discussion.btn') </h5>
    <form action="{{route('client.discussion')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-5">
            <label for="name" class="block font-bold uppercase text-xs mb-2">@lang('pages.discussion.name')</label>
            <input type="text" class="form-control text-black text-xl @error('name') border-red @enderror" id="name" name="name"
                   value="{{ old('name') }}" required>
            @error('name')
            <div class="text-red" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="contact" class="block font-bold uppercase text-xs mb-2">@lang('pages.discussion.contact')</label>
            <input type="text" class="form-control text-black text-xl @error('contact') border-red @enderror" id="contact" name="contact"
                   value="{{ old('contact') }}" required>
            @error('contact')
            <div class="text-red" role="alert">
                <strong>{{ $errors->first('contact') }}</strong>
            </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="message" class="block font-bold uppercase text-xs mb-2">@lang('pages.discussion.message')</label>
            <textarea class="form-control border text-black text-xl" id="message"
                      name="message">{{ old('message') }}</textarea>
        </div>
        <div class="mb-5">
           {{-- <label for="file" class="block font-bold uppercase text-xs mb-2">@lang('pages.discussion.file')</label>
            <input type="file" name="files[]" id="file" accept=".jpg, .jpeg, .png, .zip, .rar, .pdf, .doc, .docx, .odt, .pages" multiple>
            <span class="block text-sm text-muted">(jpg,jpeg,png,zip,rar,pdf,doc,docx,odt,pages) max-5Mb</span>--}}
            <file-uploader required="true" ></file-uploader>
        </div>

        <button class="button button--primary">@lang('pages.discussion.send')</button>
    </form>
</div>

<div class="custom-modal-mask"></div>