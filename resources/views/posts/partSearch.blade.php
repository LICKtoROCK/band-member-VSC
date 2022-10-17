@extends('layouts.app')

@section('title')
    <title>募集パート検索</title>
@endsection

@section('heading')
    <h2>募集パートで検索する</h2>
@endsection

@section('content')

<div class='mt-5'>
    {!! Form::open(['route'=>['posts.partSearch',$posts],'method'=>'get']) !!}
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('vocal',true,isset($params['vocal']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon1.png">ボーカル</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('guiter_vocal',true,isset($params['guiter_vocal']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon2.png">ギターボーカル</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('guiter',true,isset($params['guiter']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon3.png">ギター</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('bass',true,isset($params['bass']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon4.png">ベース</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('drums',true,isset($params['drums']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon5.png">ドラム</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('keyboard',true,isset($params['keyboard']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon6.png">キーボード</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('brass',true,isset($params['brass']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon7.png">管楽器</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('strings',true,isset($params['strings']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon8.png">弦楽器</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('dj',true,isset($params['dj']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon9.png">ＤＪ</label>
    </div>
    <div class="form-check form-switch form-check-inline">
        <label class="btn btn-outline-white">{!! Form::checkbox('etc',true,isset($params['etc']),['class'=>'form-check-input','role'=>'switch']) !!}<img src="../icon/icon10.png">その他</label>
    </div>

    <div class="d-grid col-1 mx-auto mt-5">
        {!! Form::submit('検索',['class'=>'btn btn-danger btn-lg btn-block']) !!}
    </div>
{!! Form::close() !!}

</div>

    @includeWhen($params,'search.result')

    <div class="offset-9 mt-5">
        {!! link_to_route('toppage','トップページへ戻る',[],['class'=>'btn btn-primary btn-lg']) !!}
    </div>

@endsection
