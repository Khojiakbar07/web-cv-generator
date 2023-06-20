@extends('layouts.user_type.auth')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">{{ __('Profile') }}</h5>
                            </div>
                            <a href="{{ route('profile.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button" style="font-size: .7rem;">
                                <i class="fas fa-plus"></i> {{ __('Create') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Action') }}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($profiles as $profile)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $profile->id }}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $profile->full_name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $profile->contact_email }}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $profile->birthday }}</span>
                                    </td>
                                    <td class="text-center">
                                            <div class="col-12" style="display: inline-flex; align-items: center;">
                                                <a href="{{ route('profile.edit', '1') }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="{{ __('Edit') }}">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <form action="{{ route('profile.destroy', $profile->id) }}" method="POST">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    @csrf
                                                    <a type="submit" onclick="this.parentNode.submit(); return false;">
                                                        <i class="cursor-pointer fas fa-trash text-secondary" aria-hidden="true" data-bs-toggle="tooltip" data-bs-original-title="{{ __('Delete') }}"></i>
                                                    </a>
                                                </form>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
