@extends('layouts.admin', ['page_title' => 'Предметы на обсуждении'])

@section('content')

    <section>
        <table class="table">
            <thead class="small">
            <tr>
                <th width="10%">Id</th>
                <th width="55%">Название</th>
                <th width="80"></th>
            </tr>
            </thead>

            @forelse($discussions as $discussion)
                <tr>
                    <td>{{ $discussion->id }}</td>
                    <td>
                        <a href="{{ route('admin.discussions.edit', $discussion) }}">
                            {{ $discussion->title }}
                        </a>
                    </td>
                    <td class="nobr">
                        <a href="{{ route('admin.discussions.edit', $discussion) }}"
                           class="btn btn-warning btn-squire rounded-circle">
                            <i class="i-pencil"></i>
                        </a>
                        <button class="btn btn-danger btn-squire rounded-circle"
                                onclick="deleteItem('{{ route('admin.discussions.destroy', $discussion) }}')">
                            <i class="i-trash"></i>
                        </button>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="6">Предметы пока не добавлены...</td>
                </tr>
            @endforelse
        </table>
        <div class="my-4">
            <a href="{{ route('admin.discussions.create') }}" class="btn btn-primary">
                Добавить предмет
            </a>
        </div>

        {{ $discussions->appends(request()->except('page'))->links() }}
    </section>

    @include('partials.admin.restore-delete')

@endsection