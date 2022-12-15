@extends('layouts.adverse')

@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mb-2 mt-2 shadow-sm">
          <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
            <h3 class="text-muted m-0 mb-0 p-0"><i class="fas fa-calendar-check"></i>
              {{ __('Adverse events of KHN') }}
            </h3>
          </div>
          <div class="card-body p-2">
            <div class="row">
              <div class="col-12">
                <span id="form_result_window"></span>
              </div>
            </div>
            <table class="table-bordered table-hover dataTable w-100 table">
              <thead>
                <tr class="bg-azure-lt table bg-opacity-50 text-center text-white">
                  <th>{{ __('Code') }}</th>
                  <th>{{ __('Department') }}</th>
                  <th>{{ __('Date') }}</th>
                  <th>{{ __('Time') }}</th>
                  <th>{{ __('Type') }}</th>
                  <th>{{ __('Worker') }}</th>
                  <th>{{ __('Status') }}</th>
                  <th class="text-center"><i class="fas fa-bars"></i></th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
  {{-- Main Form Modal --}}
  <div class="modal modal-blur fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false"
       role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-top" role="document">
      <div class="modal-content shadow-lg">
        <div id="modal-header">
          <h5 class="modal-title"></h5>
          <i id="modal-icon"></i>
          {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button> --}}
        </div>
        <form id="inputForm" action="{{ route('employees.create') }}">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <span id="form_result_modal"></span>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Personal number') }}</label>
                <input class="form-control" id="personal_number" name="personal_number" type="text"
                       placeholder="{{ __('Personal number') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Titles preffix') }}</label>
                <select class="form-select" id="title_preffix" name="title_preffix">
                  <option value=""></option>
                  <option value="Bc.">Bc.</option>
                  <option value="Bc. PhDr.">Bc. PhDr.</option>
                  <option value="MUDr.">MUDr.</option>
                  <option value="Ing.">Ing.</option>
                  <option value="PharmDr.">PharmDr.</option>
                  <option value="Mgr.">Mgr.</option>
                  <option value="MUDr. Ing.">MUDr. Ing.</option>
                  <option value="Ing. Mgr.">Ing. Mgr.</option>
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">{{ __('Last name') }}</label>
                <input class="form-control" id="last_name" name="last_name" type="text"
                       placeholder="{{ __('Last name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('First name') }}</label>
                <input class="form-control" id="first_name" name="first_name" type="text"
                       placeholder="{{ __('First name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Titles suffix') }}</label>
                <select class="form-select" id="title_suffix" name="title_suffix">
                  <option value=""></option>
                  <option value="DiS.">DiS.</option>
                  <option value="MBA">MBA</option>
                  <option value="LL.M.">LL.M.</option>
                  <option value="MBA, LL.M.">MBA, LL.M.</option>
                </select>
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Employment') }}</label>
                <select class="form-select" id="employment" name="employment">
                  <option value="HPP">HPP</option>
                  <option value="DPČ">DPČ</option>
                  <option value="DPP">DPP</option>
                  <option value="EVP">EVP</option>
                  <option value="ČSO">ČSO</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Middle name') }}</label>
                <input class="form-control" id="middle_name" name="middle_name" type="text"
                       placeholder="{{ __('Middle name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Married name') }}</label>
                <input class="form-control" id="married_name" name="married_name" type="text"
                       placeholder="{{ __('Married name') }}">
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Bussines phone') }}</label>
                <input class="form-control" id="phone" name="phone" type="text"
                       placeholder="{{ __('Phone') }}">
              </div>
              <div class="col">
                <label class="form-label">{{ __('Position') }}</label>
                <input class="form-control" id="position" name="position" type="text"
                       placeholder="999">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Company cell phone') }}</label>
                <input class="form-control" id="mobile" name="mobile" type="text"
                       placeholder="{{ __('Mobil') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('ID Card') }}</label>
                <select class="form-select" id="id_card" name="id_card">
                  <option value="Nový nástup">Nový nástup</option>
                  <option value="Vytvořit kartu">Vytvořit kartu</option>
                  <option value="Vytvořit nálepku">Vytvořit nálepku</option>
                  <option value="Předat nálepku">Předat nálepku</option>
                  <option value="Aktual. nálepku">Aktual. nálepku</option>
                  <option value="Vydáno">Vydáno</option>
                  <option value="Vrácena">Vrácena</option>
                </select>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Status') }}</label>
                <select class="form-select" id="status" name="status">
                  <option value="Neaktivní">Neaktivní</option>
                  <option value="Aktivní">Aktivní</option>
                  <option value="Mateřská">Mateřská</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-3">
                <label class="form-label">{{ __('Email') }}</label>
                <input class="form-control" id="email" name="email" type="text"
                       placeholder="{{ __('Email') }}">
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Coffee') }}</label>
                <select class="form-select" id="coffee" name="coffee">
                  <option value="N">Ne</option>
                  <option value="A">Ano</option>
                </select>
              </div>
              <div class="col-4">
                <label class="form-label">{{ __('Department') }}</label>
                <select class="form-select" id="department_id" name="department_id">
                  <option value=""></option>
                  @foreach ($departments as $department)
                    <option value="{{ $department->id }}"
                            @if (old('department_id') == $department->id) selected @endif>
                      {{ $department->center_code }} -
                      {{ $department->department_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <label class="form-label">{{ __('End date') }}</label>
                <input class="form-control" id="end_date" name="end_date" type="date"
                       placeholder="{{ __('End date') }}" onkeydown="return false">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Created at') }}</label>
                <input class="form-control" id="created_at" name="created_at" type="date"
                       placeholder="{{ __('Created at') }}" onkeydown="return false" readonly>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Updated at') }}</label>
                <input class="form-control" id="updated_at" name="updated_at" type="date"
                       placeholder="{{ __('Updated at') }}" onkeydown="return false" readonly>
              </div>
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-muted hover-shadow" data-bs-dismiss="modal" type="button">
              {{ __('Close') }}
            </button>
            <button class="btn btn-primary ms-auto hover-shadow" id="action_button"
                    name="action_button" type="submit"></button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Delete Event Modal --}}
  <div class="modal modal-blur fade" id="confirmModal" data-bs-backdrop="static"
       data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg"
               width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
               stroke="currentColor" fill="none" stroke-linecap="round"
               stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 9v2m0 4v.01" />
            <path
                  d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted">
            {{ __('Do you really want to remove event?') }}<br>{{ __('This operation cannot be undone') }}
          </div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col">
                <button class="btn btn-muted w-100 hover-shadow" data-bs-dismiss="modal">
                  {{ __('Cancel') }}
                </button>
              </div>
              <div class="col">
                <button class="btn btn-danger w-100 hover-shadow" id="ok_button"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    // Data Table
    $(document).ready(function() {
      $('.dataTable').DataTable({
        processing: true,
        processingAnim: false,
        serverSide: true,
        stateSave: true,
        pageSave: true,
        fixedHeader: {
          header: true,
          footer: false
        },
        order: [
          [3, "asc"]
        ],
        "lengthMenu": [
          [10, 20, 30, 60, 100, -1],
          [10, 20, 30, 60, 100, "Všechny"]
        ],
        language: {
          "url": "{{ asset('js/cs.json') }}",
          "sProcessing": "<img style='height:100px;' src='img/processing.gif' />",
          "search": "_INPUT_",
          "searchPlaceholder": "Hledej ..."
        },
        ajax: {
          url: "{{ route('adversevents.index') }}",
        },
        columnDefs: [{
          type: 'czech',
          targets: [2]
        }],
        columns: [{
            data: 'department.department_code',
            "width": "1%"
          },
          {
            data: 'department.department_name',
            "width": "6%"
          },
          {
            data: 'datum_cas',
            "width": "3%",
            render: function(data, type, full, meta) {
              var date = moment(data).locale('cs');
              return date.format('DD. MM. YYYY');
            }
          },
          {
            data: 'cas',
            "width": "2%"
          },
          {
            data: 'spec_druh',
            "width": "8%"
          },
          {
            data: 'pracovnik',
            "width": "8%"
          },
          {
            data: 'status',
            "width": "0.5%",
            render: function(data, type, full, meta) {
              if (data == 'Odesláno') {
                return "<span title='{{ __('Odesláno') }}' class='cursor-help mx-3 badge bg-info p-1 me-1'></span>";
              }
              if (data == 'Rozpracováno') {
                return "<span title='{{ __('Rozpracováno') }}' class='cursor-help mx-3 badge bg-warning p-1 me-1'></span>";
              }
              if (data == 'Dokončeno') {
                return "<span title='{{ __('Dokončeno') }}' class='cursor-help mx-3 badge bg-green p-1 me-1'></span>";
              }
            }
          },
          {
            data: 'action',
            "width": "1%",
            orderable: false,
            searchable: false
          },
        ],
      });
    });

    // Form Modal Edit Functions
    $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');
      $('#form_result_modal, form_result_window').html('');
      $.ajax({
        url: "/adversevent/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $('#inputForm')[0].reset();
          $("#modal-header, #modal-icon").removeClass();
          $('#formModal').modal('show');
          $('#modal-icon').addClass('fas fa-user-edit fa-2x m-2');
          $('#modal-header').addClass("modal-header bg-" + html.data.department.color_id +
            "-lt");
          $('#action_button, .modal-title').text("{{ __('Edit Adverse Event') }}");
          $('#action').val("Edit");
          $('#department_id').val(html.data.department_id);
          $('#status').val(html.data.status);
          $('#created_at').val(html.data.created_at);
          $('#updated_at').val(html.data.updated_at);
          $('#hidden_id').val(html.data.id);
        }
      })
    });

    $('#openCreateModal').click(function() {
      $('#inputForm')[0].reset();
      $("#modal-icon, #modal-header").removeClass();
      $('#formModal').modal('show');
      $('#modal-icon').addClass('fas fa-user-plus fa-2x m-2');
      $('#modal-header').addClass("modal-header bg-muted-lt");
      $('#action_button, .modal-title').text("{{ __('Create new Adverse Event') }}");
      $('#action').val("Add");
      $('#department_id, #department_code').val('');
      $('#status').val('Rozpracováno');
    })

    $('#inputForm').on('submit', function(event) {
      event.preventDefault();
      if ($('#action').val() == 'Add') {
        $.ajax({
          url: "{{ route('adversevents.store') }}",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success: function(data) {
            var html = '';
            if (data.errors) {
              html = '<div class="alert alert-danger text-danger shadow-sm"><ul>';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<li>' + data.errors[count] + '</li>';
              }
              html +=
                '</ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' +
                data.success +
                '</li></ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#inputForm')[0].reset();
              $('.dataTable').DataTable().ajax.reload(null, false);
              $('#form_result_modal').html(html);
            }
          }
        })
      }

      if ($('#action').val() == "Edit") {
        event.preventDefault();
        $.ajax({
          url: "adversevents/destroy/" + event_id,
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success: function(data) {
            var html = '';
            if (data.errors) {
              html = '<div class="alert alert-danger text-danger shadow-sm"><ul>';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<li>' + data.errors[count] + '</li>';
              }
              html += '</ul></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' +
                data.success + '</li></ul></div>';
              $('.dataTable').DataTable().ajax.reload(null, false);
              $('#form_result_window').html(html);
              $('#formModal').modal('hide');
            }
          }
        });
      }
    });

    // Delete Event
    $(document).on('click', '.delete', function() {
      event_id = $(this).attr('id');
      $('#ok_button').text("{{ __('Delete') }}");
      $('#confirmModal').modal('show');
    })

    $('#ok_button').click(function() {
      $.ajax({
        url: "adversevents/destroy/" + employee_id,
        beforeSend: function() {
          $('#ok_button').text("{{ __('Deleting ...') }}");
        },
        success: function(data) {
          setTimeout(function() {
            $('#confirmModal').modal('hide');
            $('#ok_button').text("{{ __('Delete') }}");
            $('.dataTable').DataTable().ajax.reload(null, false);
          }, 1000);
        }
      })
    })
  </script>
@endsection
