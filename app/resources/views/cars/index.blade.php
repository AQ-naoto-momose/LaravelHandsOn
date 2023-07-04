@extends('app')

@section('main')
    <main class="container">
        @if (!empty($errors->all()))
            <div class="mt-2 alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        @if (session('succeed_status'))
            <div class="mt-2 alert alert-success">
                {{ session('succeed_status') }}
            </div>
        @endif

        @if (session('failed_status'))
            <div class="mt-2 alert alert-danger">
                {{ session('failed_status') }}
            </div>
        @endif

        <h2 class="p-2">検索</h2>

        {{ Form::open(['route' => 'cars.index', 'method' => 'GET']) }}
        <div class="row p-2">
            <div class="col-3">車名</div>
            <div class="col-8">{{ Form::text('name', Request::get('name'), ['class' => 'form-control']) }}</div>
        </div>

        <div class="row p-2">
            <div class="col-3">排気量</div>
            <div class="col-4">{{ Form::number('cc', Request::get('cc'), ['class' => 'form-control']) }}</div>
            <div class="col-5">cc</div>
        </div>

        <div class="row p-2">
            <div class="col-3">発売日</div>
            <div class="col-4">{{ Form::date('date_from', Request::get('date_from'), ['class' => 'form-control']) }}</div>
            <div class="col-1">~</div>
            <div class="col-4">{{ Form::date('date_to', Request::get('date_to'), ['class' => 'form-control']) }}</div>
        </div>

        <div class="d-grid col-4 mx-auto">
            {{ Form::submit('検索', ['class' => 'btn btn-primary']) }}
        </div>
        {{ Form::close() }}

        <div class="d-grid col-2 ms-auto">
            {{ link_to_route('cars.create', '新規登録', null, ['class' => 'btn btn-primary']) }}
        </div>

        <h2 class="p-2">一覧</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">車名</th>
                <th scope="col">排気量</th>
                <th scope="col">発売日</th>
                <th scope="col">操作</th>
                <th scope="col">削除</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <th scope="row">
                        {{ link_to_route('cars.show', $car->id, ['car' => $car->id]) }}
                    </th>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->cc }}cc</td>
                    <td>{{ $car->sale_date }}</td>
                    <td>{{ link_to_route('cars.edit', '操作', ['car' => $car->id], ['class' => 'btn btn-primary']) }}</td>
                    <td>
                        {{ Form::open([
                                    'route' => ['cars.delete', ['car' => $car->id]],
                                    'method' => 'delete'])
                                 }}
                        {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $cars->links() }}
    </main>
@endsection
