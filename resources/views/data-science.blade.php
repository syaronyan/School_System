@extends('layout.header')
@section('content')
    <div class='section'>[STEP1]基礎課題</div>
        <div class='progress_tasks'>
            @for($i=17; $i < 22; $i++)
                <div class='progress_img'>
                    <div>
                        <a href="/work/{{ $progress_tasks_edit['group_ids'][$i] }}">
                            <img src="{{ asset('storage/') }}/{{ $progress_tasks_edit['group_imgs'][$i] }}" width="200" height="200">
                        </a>
                    </div>
                    <div>
                        <progress value="{{ $progress_tasks_edit['parcents'][$i] }}" max="100"></progress>
                    </div>
                    <div>
                        {{ $progress_tasks_edit['parcents'][$i] }}%
                    </div>
                </div>
            @endfor
        </div>
    <div class='section'>[STEP2]統計基礎</div>
        <div class='progress_tasks'>
            @for($i=22; $i < 30; $i++)
                <div class='progress_img'>
                    <div>
                        <a href="/work/{{ $progress_tasks_edit['group_ids'][$i] }}">
                            <img src="{{ asset('storage/') }}/{{ $progress_tasks_edit['group_imgs'][$i] }}" width="200" height="200">
                        </a>
                    </div>
                    <div>
                        <progress value="{{ $progress_tasks_edit['parcents'][$i] }}" max="100"></progress>
                    </div>
                    <div>
                        {{ $progress_tasks_edit['parcents'][$i] }}%
                    </div>
                </div>
            @endfor
        </div>
    <div class='section'>[STEP3]卒業演習</div>
        <div class='progress_tasks'>
            @for($i=30; $i < 33; $i++)
                <div class='progress_img'>
                    <div>
                        <a href="/work/{{ $progress_tasks_edit['group_ids'][$i] }}">
                            <img src="{{ asset('storage/') }}/{{ $progress_tasks_edit['group_imgs'][$i] }}" width="200" height="200">
                        </a>
                    </div>
                    <div>
                        <progress value="{{ $progress_tasks_edit['parcents'][$i] }}" max="100"></progress>
                    </div>
                    <div>
                        {{ $progress_tasks_edit['parcents'][$i] }}%
                    </div>
                </div>
            @endfor
        </div>
    

@endsection('content')