@extends('layouts.datatable')

@section('main')
  <div class="container-fluid" style="margin-top: 25px">
    <div class="row justify-content-center">
      <div class="col-md-12">

        <div class="card">

          <div class="card-header justify-content-between d-flex">
            <h1 class="text-muted">{{ __('Zaměstanci') }}</h1>
            <div>
              <button class="btn btn-success" id="create_record" name="create_record">{{ __('New') }}</button>
            </div>
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            @if (session('status'))
              <div>{{ session('status') }}</div>
            @endif
            <table class="table-bordered table-hover dataTable w-100 table">
              <thead class="bg-success table text-center text-white">
                <tr>
                  <th>{{ __('Number') }}</th>
                  <th>{{ __('Image') }}</th>
                  <th>{{ __('Title preffix') }}</th>
                  <th>{{ __('Last name') }}</th>
                  <th>{{ __('First name') }}</th>
                  <th>{{ __('Title suffix') }}</th>
                  <th>{{ __('Department') }}</th>
                  <th>{{ __('Job title') }}</th>
                  <th>{{ __('Email') }}</th>
                  <th>{{ __('Phone') }}</th>
                  <th>{{ __('Mobile') }}</th>
                  <th>{{ __('Action') }}</th>
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
