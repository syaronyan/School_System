@extends('layout.header')
@section('content')
<div class='section'>マイステータス</div>
    <div class='card'>
        <div class='card-body'>
            @if (!empty($progress_tasks_edit))
            <div>
                @for($i=0; $i < 6; $i++)
                <p>{{ $progress_tasks_edit['group_names'][$i] }},    {{ $progress_tasks_edit['parcents'][$i] }}</p>
                @endfor
            </div>
            @endif
        </div>
    </div>
<div class='section'>学習中の講座</div>
    <div class='card'>
        <div class='card-body'>
            
        </div>
    </div>
    
</div>

@endsection('content')

