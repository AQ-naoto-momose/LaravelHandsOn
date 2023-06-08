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

        {{-- TODO 検索ブロック --}}


        <div class="d-grid col-2 ms-auto pt-2">
            {{ link_to_route('cars.create', '新規作成', null, ['class' => 'btn btn-primary']) }}
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
                    <td>
                        {{ link_to_route('cars.show', $car->id, ['car' => $car->id]) }}
                    </td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->cc }}</td>
                    <td>{{ $car->company_id }}</td>
                    <td>{{ $car->sale_date }}</td>
                    <td>操作</td>
                    <td>削除</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection
