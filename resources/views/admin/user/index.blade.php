@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header fw-semibold">
            Quản lý khách hàng
        </div>
        <div class="card-body">
            @foreach ($viewData['users'] as $user)
                <div class="card w-25">
                    <div class="text-center fs-1 bg-light text-index rounded-1 p-2">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="text-muted pb-1">{{ $user->getName() }}</h6>
                        <a href="{{ route('admin.user.show', ['id' => $user->getId()]) }}"
                            class="btn btn-index text-white">Thông tin</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
