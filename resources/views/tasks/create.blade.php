@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

　　    <div class="row">
            <div class="col-xs-12">col-xs-12</div>
            <div class="col-md-6 col-md-offset-2">col-md-6 col-md-offset-2</div>
            <div class="col-lg-3 col-md-offset-3">col-lg-3 col-md-offset-3</div>
              {!! Form::model($task, ['route' => 'tasks.store']) !!}

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
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
              {!! Form::close() !!}
            </div>
        </div>
@endsection