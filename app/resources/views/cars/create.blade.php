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

    <h2 class="p-2">車登録</h2>

    {{ Form::open([
        'route'=> 'cars.store',
        'method' => 'post',
        'files' => true
    ]) }}
    <div class="row p-2">
        <div class="col-3">車名<span class="badge bg-danger">必須</span></div>
        <div class="col-8">{{ Form::text('name', Request::get('name'), ['class' => 'form-control']) }}</div>
    </div>

    <div class="row p-2">
        <div class="col-3">排気量<span class="badge bg-danger">必須</span></div>
        <div class="col-4">{{ Form::number('cc', Request::get('cc'), ['class' => 'form-control']) }}</div>
        <div class="col-5">cc</div>
    </div>

    <div class="row p-2">
        <div class="col-3">発売日<span class="badge bg-danger">必須</span></div>
        <div class="col-4">{{ Form::date('date', Request::get('date'), ['class' => 'form-control']) }}</div>
    </div>
    <div class="row p-2">
        <div class="col-3">メモ</div>
        <div class="col-4">{{ Form::textarea('memo', Request::get('memo'), ['class' => 'form-control']) }}</div>
    </div>
    <div class="row p-2">
        <div class="col-3">画像</div>
        <div class="col-4">{{ Form::file('image', ['class' => 'form-control']) }}</div>
    </div>

    <div class="d-grid mt-2 col-4 mx-auto">
        {{ Form::submit('保存', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}

</main>
@endsection
