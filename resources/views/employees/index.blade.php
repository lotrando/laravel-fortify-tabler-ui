@extends('layouts.datatable')

@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">

        <div class="card mb-3 mt-3 shadow-sm">

          <div class="card-header align-items-center justify-content-between d-flex">
            <h1 class="text-muted text-uppercase mb-0"><i class="fas fa-users"></i> {{ __('Zaměstanci') }}</h1>
            <div>
              <button class="btn btn-lime" id="openCreateModal">
                <i class="fas fa-user-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <span id="form_result"></span>
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            @if (session('error'))
              <div class="alert alert-danger" role="alert">
                {{ session('error') }}
              </div>
            @endif
            <table class="table-bordered table-hover dataTable w-100 table">
              <thead class="bg-secondary table bg-opacity-50 text-center text-white">
                <tr>
                  <th>{{ __('Image') }}</th>
                  <th>{{ __('Number') }}</th>
                  <th>{{ __('Titles preffix') }}</th>
                  <th>{{ __('Last name') }}</th>
                  <th>{{ __('First name') }}</th>
                  <th>{{ __('Titles suffix') }}</th>
                  <th>{{ __('Vema Kod') }}</th>
                  <th>{{ __('Department') }}</th>
                  <th>{{ __('Job title') }}</th>
                  <th>{{ __('Email') }}</th>
                  <th>{{ __('Phone') }}</th>
                  <th>{{ __('Mobile') }}</th>
                  <th>{{ __('Status') }}</th>
                  <th>{{ __('Start date') }}</th>
                  <th class="text-center">{{ __('Action') }}</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
