@extends('layouts.app')

@section('title')
    <title>都道府県検索</title>
@endsection

@section('heading')
    <h2>都道府県で検索する</h2>
@endsection

@section('content')

    <div class="mt-5">
        <p>検索したい都道府県を選択、もしくはマップのリンクをクリックしてください。</p>
    </div>

    {!! Form::open(['route'=>['posts.prefSearch',$posts],'method'=>'get']) !!}
    <div class="pref-select mb-4 offset-1">
        {!! Form::select('prefectures',['北海道'=>'北海道','青森県'=>'青森県','岩手県'=>'岩手県','宮城県'=>'宮城県','秋田県'=>'秋田県','山形県'=>'山形県','福島県'=>'福島県','茨城県'=>'茨城県','栃木県'=>'栃木県','群馬県'=>'群馬県','埼玉県'=>'埼玉県','千葉県'=>'千葉県','東京都'=>'東京都','神奈川県'=>'神奈川県','新潟県'=>'新潟県','富山県'=>'富山県','石川県'=>'石川県','福井県'=>'福井県','山梨県'=>'山梨県','長野県'=>'長野県','岐阜県'=>'岐阜県','静岡県'=>'静岡県','愛知県'=>'愛知県','三重県'=>'三重県','滋賀県'=>'滋賀県','京都府'=>'京都府','大阪府'=>'大阪府','兵庫県'=>'兵庫県','奈良県'=>'奈良県','和歌山県'=>'和歌山県','鳥取県'=>'鳥取県','島根県'=>'島根県','岡山県'=>'岡山県','広島県'=>'広島県','山口県'=>'山口県','徳島県'=>'徳島県','香川県'=>'香川県','愛媛県'=>'愛媛県','高知県'=>'高知県','福岡県'=>'福岡県','佐賀県'=>'佐賀県','長崎県'=>'長崎県','熊本県'=>'熊本県','大分県'=>'大分県','宮崎県'=>'宮崎県','鹿児島県'=>'鹿児島県','沖縄県'=>'沖縄県'],!empty($params['prefectures']) ? $params['prefectures']:NULL,['class'=>'form-control','placeholder'=>'全都道府県を検索']) !!}
        <div class="col-2 offset-1">
            {!! Form::submit('検索',['class'=>'btn btn-danger']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <hr>

    <div class="pref-map">
        <iframe src="../japan/prefectures.html" width="700" height="670" frameborder="0" style="border: none"></iframe>
    </div>

    @includeWhen($params,'search.result')

    <div class="offset-9 mt-5 mb-5">
        {!! link_to_route('toppage','トップページへ戻る',[],['class'=>'btn btn-primary btn-lg']) !!}
    </div>

@endsection
