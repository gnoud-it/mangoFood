@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header fw-semibold">
            Thông tin khách hàng
        </div>
        <div class="card-body">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-2 text-center fs-1 bg-light text-index rounded-1 pt-5">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="col-10">
                        <div class="card-body">
                            <h5 class="card-title text-index">
                                {{ $viewData['user']->getName() }} ({{ $viewData['user']->getRole() }})
                            </h5>
                            <p class="card-text">{{ $viewData['user']->getEmail() }}</p>
                            <p class="card-text">{{ $viewData['user']->getRole() }}</p>
                            <a href="{{ route('admin.user.index') }}" class="card-text text-decoration-none">
                                <small class="text-index"><i class="bi bi-chevron-left"></i>&nbsp;Quay lại</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
