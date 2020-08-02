@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/13">⬅︎</a>　CodeIgniter移行（掲示板）（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <!-- <li class='sm_work'>
                    下記のCodeIgniter書籍等を参考にしながら、ひとこと掲示板をCodeIgniterで作り直してみましょう。
                    </li> -->
                    <li class='sm_work'>
                    下記のpdf教材を参考に掲示板をCodeIgniterで作り直してみましょう。
                    </li>
                    <p class='attention'><a href="{{ asset('storage/BBS_CodeIgniter.pdf') }}" download="BBS_CodeIgniter.pdf">BBS_CodeIgniter.pdf</a></p>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')