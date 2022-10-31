@extends('layouts.datatable')

@section('main')
  <div class="container-fluid" style="margin-top: 25px">
    <div class="row justify-content-center">
      <div class="col-md-12">

        <div class="card">

          <div class="card-header justify-content-between d-flex">
            <h1 class="text-muted">{{ __('Emploeeys') }}</h1>
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
            <table class="table-bordered table-striped dataTable table">
              <thead>
                <tr>
                  <th>{{ __('Personal number') }}</th>
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
                  <th></th>
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

  {{-- Modals --}}

  <div class="modal fade" id="formModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button class="close" data-dismiss="modal" type="button" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <span id="form_result"></span>
          <form class="form-horizontal" id="sample_form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

            </div>
            <div class="form-group" align="center">
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
              <input class="btn btn-success" id="action_button" name="action_button" type="submit" value="Vydat" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Delete Modal --}}

  <div class="modal fade" id="confirmModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">&times;</button>
        </div>
        <div class="modal-body">
          <h5 style="margin:20;" align="center">Chcete položku definitivně odstranit ?</h5>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" id="ok_button" name="ok_button" type="button">Odstranit</button>
          <button class="btn btn-secondary" data-dismiss="modal" type="button">Zrušit</button>
        </div>
      </div>
    </div>
  </div>
