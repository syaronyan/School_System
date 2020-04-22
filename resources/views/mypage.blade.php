@extends('layout.header')
@section('content')
    <div class='section'>[STEP1]基礎課題</div>
    <div class='progress_tasks'>
        @for($i=0; $i < 6; $i++)
            <div class='progress_img'>
                <div>
                    <img src="{{ asset('storage/') }}/{{ $progress_tasks_edit['group_imgs'][$i] }}" width="200" height="200">
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
    <div class='section'>応用課題</div>
    <div class='progress_tasks'>
        @for($i=6; $i < 13; $i++)
            <div class='progress_img'>
                <div>
                    <img src="{{ asset('storage/') }}/{{ $progress_tasks_edit['group_imgs'][$i] }}" width="200" height="200">
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
    <div class='section'>[STEP2]基礎課題</div>
    <div class='progress_tasks'>
        @for($i=13; $i < 17; $i++)
            <div class='progress_img'>
                <div>
                    <img src="{{ asset('storage/') }}/{{ $progress_tasks_edit['group_imgs'][$i] }}" width="200" height="200">
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

