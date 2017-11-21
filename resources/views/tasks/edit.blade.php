@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

        <div class="row">
            <div class="col-xs-12">col-xs-12</div>
            <div class="col-md-6 col-md-offset-2">col-md-6 col-md-offset-2</div>
            <div class="col-lg-3 col-md-offset-3">col-lg-3 col-md-offset-3</div>
                {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'タイトル:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
        
                    <div class="form-group">
                        {!! Form::label('content', 'メッセージ:') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('status', 'ステータス:') !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
        　　　　{!! Form::close() !!}
　　　　　　</div>
　　　　</div>
@endsection