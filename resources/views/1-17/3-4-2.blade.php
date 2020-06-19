@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/17">⬅︎</a>　サーバ構築（難易度：★★☆☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    VPSを契約する
                        <ul>
                            <li class='comment'>
                                URL:<a href='https://vps.sakura.ad.jp/'>さくら VPS</a>今後自分でサービスを立ち上げる際にも必要ですし、仕事でも使う事が多いので自分で契約する事をおすすめしますがTECH ISから借りてもらっても良いです。
                            </li>
                        </ul>
                    </li>
                    <li class='sm_work'>
                    ゴリラで学ぶvim講座を受講しvimを習得しましょう。
                        <ul>
                            <li class='comment'>
                                URL:<a href='https://knowledge.sakura.ad.jp/21687/'>ゴリラ</a>
                            </li>
                        </ul>
                    </li>
                    <li class='sm_work'>
                    マンガで分かるVPSに従って構築してください
                        <ul>
                            <li class='comment'>
                                URL:<a href='https://vps.sakura.ad.jp/guide/'>マンガで分かるVPS</a>
                            </li>
                        </ul>
                    </li>
                    <li class='sm_work'>
                    全部終わったらCentosをさくらの管理画面より再インストール
                        <ul>
                            <li class='comment'>
                                4-5回はこれを繰り返し行ってください
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')