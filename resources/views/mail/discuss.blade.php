<h4>Предмет на обсуждение</h4>
<p>Имя:{{ $data->user->name }}</p>
<p>email:{{ $data->user->contact }}</p>
@if($data->message)
    <p>Сообщение:{{ $date->message }}</p>
@endif
<br>
<p>-----<br>{{ \Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>