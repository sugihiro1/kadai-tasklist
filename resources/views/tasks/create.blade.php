@extends('layouts.app')

@section('content')

    <h1>タスク 新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::label('content', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection