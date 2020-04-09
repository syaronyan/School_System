@extends('layout.header')
@section('content')
    <div class='section'>マイステータス</div>
    <div class='card'>
        <div class='card-body'>
            <p>{{ $student->name }}さんの進捗状況</p>
            @if (!empty($progress_tasks_edit))
            <table>
                @for($i=0; $i < 6; $i++)
                <tr>
                    <td>
                        {{ $progress_tasks_edit['group_names'][$i] }}
                    </td>
                    <td>
                    <progress value="{{ $progress_tasks_edit['parcents'][$i] }}" max="100"></progress>
                    </td>
                    <td>
                        {{ $progress_tasks_edit['parcents'][$i] }}%
                    </td>
                </tr>
                @endfor
            </table>
            @endif
        </div>
    </div>
    <div class='section'>学習中の講座</div>
    <!-- <div class='card'>
        <div class='card-body'>
            
        </div>
    </div> -->
    <div class='progress_wrap'>
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

@endsection('content')

