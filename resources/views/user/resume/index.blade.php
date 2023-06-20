@extends('layouts.user_type.auth')

@section('content')

    <div class="container-fluid">
        <div class="row">

            @foreach($resumes as $resume)
                @dump($resume)
                <div class="col-12 col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0" style="white-space: nowrap;">{{ $resume->profile->full_name }}</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul style="list-style-type: none; padding: 0;">
                                <li><i class="fal fa-user-edit"></i> Name: {{ $resume->profile->first_name }}</li>
                                <li><i class="fal fa-user-edit"></i> Template: {{ $resume->template->title }}
                                    @if($resume->template->premium) [Premium] @else [Free] @endif
                                </li>
                                <li><i class="fal fa-calendar"></i> Birthday: {{ \Carbon\Carbon::parse($resume->profile->birthday)->format('d.m.Y') }}</li>
                                <li><i class="fal fa-pen"></i> Updated: {{ $resume->updated_at->format('d.m.Y H:i') }}</li>
                            </ul>

                            <form action="{{ route('resume.destroy', $resume->id) }}" method="POST" class="row">
                                <input name="_method" type="hidden" value="DELETE">
                                @csrf

                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="submit" class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                                    {{--<a type="button" href="{{ route('resume.destroy', $resume->id) }}" class="btn btn-secondary"><i class="fas fa-trash"></i></a>--}}
                                    <a type="button" href="{{ route('resume.edit', $resume->id) }}" class="btn btn-secondary"><i class="fas fa-pen"></i></a>
                                    <a type="button" href="{{ route('resume.show', $resume->id) }}" class="btn btn-primary"><i class="fas fa-clipboard-check"></i> Make</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-12 col-md-6 col-lg-4 my-3">
                <a href="{{ route('resume.create') }}">
                    <div class="card">
                        <div class="card-body p-7" style="align-self: center;">
                            <i class="fal fa-plus-circle" style="font-size: 4rem"></i>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

@endsection
