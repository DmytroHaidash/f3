<h4>Предмет на обсуждение</h4>
<p>Имя:{{ $data->user->name }}</p>
<p>email:{{ $data->user->contact }}</p>
@if($data->message)
    <p>Сообщение:{{ $data->message }}</p>
@endif
@if($data->files)
    <p>Вложеные файлы:</p>
    @foreach($data->files as $file)
    {{$file}}
    @endforeach
@endif

<br>
<p>-----<br>{{ \Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>