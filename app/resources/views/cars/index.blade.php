@extends('app')

@section('main')
    <main class="container">
        <img src="{{ asset('storage/img.png') }}">
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


        <div class="d-grid col-2 ms-auto">
            {{-- TODO 新規登録ボタン --}}
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
            <tr>
                <th scope="row">
                    1
                </th>
                <td>ルークス</td>
                <td>659cc</td>
                <td>2020年2月25日</td>
                <td>「編集ボタン」</td>
                <td>「削除ボタン」</td>
            </tr>
            <tr>
                <th scope="row">
                    2
                </th>
                <td>セルシオ XF30</td>
                <td>4300cc</td>
                <td>2000年8月31日</td>
                <td>「編集ボタン」</td>
                <td>「削除ボタン」</td>
            </tr>
            <tr>
                <th scope="row">
                    3
                </th>
                <td>ハイエース</td>
                <td>2982cc</td>
                <td>2022年4月13日</td>
                <td>「編集ボタン」</td>
                <td>「削除ボタン」</td>
            </tr>
            </tbody>
        </table>
    </main>
@endsection
