@extends('layouts.datatable')

@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mb-3 mt-3 shadow-sm">
          <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
            <h1 class="text-muted mb-0"><i class="fas fa-users fa-1x mx-1"></i> {{ __('Employees of KHN') }}</h1>
            <div>
              <button class="btn btn-lime p-2" id="openCreateModal" title="Nový">
                <i class="fas fa-user-plus fa-1x m-1"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <span id="form_result_window"></span>
              </div>
            </div>
            <table class="table-bordered table-hover dataTable w-100 table">
              <thead>
                <tr class="bg-azure-lt table bg-opacity-50 text-center text-white">
                  <th>{{ __('Image') }}</th>
                  <th>{{ __('Number') }}</th>
                  <th>{{ __('Titles preffix') }}</th>
                  <th>{{ __('Last name') }}</th>
                  <th>{{ __('First name') }}</th>
                  <th>{{ __('Titles suffix') }}</th>
                  <th>{{ __('Vema') }}</th>
                  <th>{{ __('Department') }}</th>
                  <th>{{ __('Job title') }}</th>
                  <th>{{ __('Phone') }}</th>
                  <th>{{ __('Mobile') }}</th>
                  <th>{{ __('Status') }}</th>
                  <th>{{ __('Start date') }}</th>
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
  <div class="modal modal-blur fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
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
                <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Titles preffix') }}</label>
                <select class="form-select" id="title_preffix" name="title_preffix">
                  <option value=""></option>
                  <option value="Bc.">Bc.</option>
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
                <input class="form-control" id="last_name" name="last_name" type="text" placeholder="{{ __('Last name') }}">
              </div>
              <div class="col-3">
                <label class="form-label">{{ __('First name') }}</label>
                <input class="form-control" id="first_name" name="first_name" type="text" placeholder="{{ __('First name') }}">
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
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Middle name') }}</label>
                <input class="form-control" id="middle_name" name="middle_name" type="text" placeholder="{{ __('Middle name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Married name') }}</label>
                <input class="form-control" id="married_name" name="married_name" type="text" placeholder="{{ __('Married name') }}">
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Phone') }}</label>
                <input class="form-control" id="phone" name="phone" type="text" placeholder="{{ __('Phone') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Mobil') }}</label>
                <input class="form-control" id="mobile" name="mobile" type="text" placeholder="{{ __('Mobil') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('ID Card') }}</label>
                <select class="form-select" id="id_card" name="id_card">
                  <option value="Nový nástup">Nový nástup</option>
                  <option value="Vytvořit kartu">Vytvořit kartu</option>
                  <option value="Vytvořit nálepku">Vytvořit nálepku</option>
                  <option value="Předat nálepku">Předat nálepku</option>
                  <option value="Aktual. nálepku">Aktualizovat nálepku</option>
                  <option value="Vydáno">Vydáno</option>
                  <option value="Vrácena">Vrácena</option>
                </select>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Status') }}</label>
                <select class="form-select" id="status" name="status">
                  <option value="active">Aktivní</option>
                  <option value="inactive">Neaktivní</option>
                  <option value="maternal">Mateřská</option>
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
              <div class="col-3">
                <label class="form-label">{{ __('Email') }}</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="{{ __('Email') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Coffee') }}</label>
                <select class="form-select" id="coffee" name="coffee">
                  <option value=""></option>
                  <option value="N">Ne</option>
                  <option value="A">Ano</option>
                </select>
              </div>
              <div class="col-4">
                <label class="form-label">{{ __('Department') }}</label>
                <select class="form-select" id="department_id" name="department_id">
                  <option value=""></option>
                  @foreach ($departments as $department)
                    <option value="{{ $department->id }}" @if (old('department_id') == $department->id) selected @endif>{{ $department->center_code }} -
                      {{ $department->department_name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-3">
                <div class="mb-3">
                  <label class="form-label">{{ __('Job') }}</label>
                  <select class="form-select" id="job_id" name="job_id">
                    <option value=""></option>
                    @foreach ($jobs as $job)
                      <option value="{{ $job->id }}" @if (old('job_id') == $job->id) selected @endif>{{ $job->job_title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Current photo') }}</label>
                <div class="d-flex justify-content-start align-items-start">
                  <span id="store_image"></span>
                </div>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Preview new photo') }}</label>
                <div class="d-flex justify-content-start align-items-start">
                  <img class="z-depth-1 img-thumbnail-big" id="preview_image" height='193px'></img>
                </div>
              </div>
              <div class="col-8">
                <label class="form-label">{{ __('Description') }}</label>
                <textarea class="form-control" id="comment" name="comment" type="text" placeholder="{{ __('Description') }}" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">{{ __('Select file with new photo') }}</label>
                  <input class="form-control" id="image" name="image" type="file">
                </div>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Start date') }}</label>
                <input class="form-control" id="start_date" name="start_date" type="date" placeholder="{{ __('Start date') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('End date') }}</label>
                <input class="form-control" id="end_date" name="end_date" type="date" placeholder="{{ __('End date') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Created at') }}</label>
                <input class="form-control" id="created_at" name="created_at" type="date" placeholder="{{ __('Created at') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Updated at') }}</label>
                <input class="form-control" id="updated_at" name="updated_at" type="date" placeholder="{{ __('Updated at') }}">
              </div>
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-muted hover-shadow" data-bs-dismiss="modal" type="button">
              {{ __('Close') }}
            </button>
            <button class="btn btn-primary ms-auto hover-shadow" id="action_button" name="action_button" type="submit"></button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Delete Employee Modal --}}
  <div class="modal modal-blur fade" id="confirmModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 9v2m0 4v.01" />
            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted">{{ __('Do you really want to remove employee?') }}<br>{{ __('This operation cannot be undone') }}
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

  {{-- Delete Employee Photo --}}
  <div class="modal modal-blur fade" id="photoModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-warning"></div>
        <div class="modal-body py-4 text-center">
          <svg class="icon icon-tabler icon-tabler-photo-off text-warning icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="3" y1="3" x2="21" y2="21"></line>
            <line x1="15" y1="8" x2="15.01" y2="8"></line>
            <path d="M19.121 19.122a3 3 0 0 1 -2.121 .878h-10a3 3 0 0 1 -3 -3v-10c0 -.833 .34 -1.587 .888 -2.131m3.112 -.869h9a3 3 0 0 1 3 3v9"></path>
            <path d="M4 15l4 -4c.928 -.893 2.072 -.893 3 0l5 5"></path>
            <path d="M16.32 12.34c.577 -.059 1.162 .162 1.68 .66l2 2"></path>
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted">{{ __('Do you really want to remove photo?') }}<br>{{ __('This operation cannot be undone') }}
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
                <button class="btn btn-warning w-100 hover-shadow" id="remove_button"></button>
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
        // scrollY: 670,
        // scrollCollapse: true,
        // scroller: true,
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
          url: "{{ route('employees.index') }}",
        },
        columnDefs: [{
          type: 'czech',
          targets: [3]
        }],
        columns: [{
            data: 'image',
            "width": "1%",
            render: function(data, type, row, full, meta) {
              return "<div class='img-hover-zoom'><center><img src={{ URL::to('/foto') }}/" +
                data + " class='zoom img-thumbnail' /></center></div>";
            },
            orderable: false,
          },
          {
            data: 'personal_number',
            "width": "1%",
            render: function(data, type, row, full, meta) {
              return "<span class='text-center text-" + row.department.color_id + "'><center><strong>" + data + "</strong></center></span>";
            },
          },
          {
            data: 'title_preffix',
            "width": "5%"
          },
          {
            data: 'last_name',
            "width": "3%",
          },
          {
            data: 'first_name',
            "width": "3%"
          },
          {
            data: 'title_suffix',
            "width": "3%"
          },
          {
            data: 'department.center_code',
            "width": "1%"
          },
          {
            data: 'department.department_name',
            "width": "9%"
          },
          {
            data: 'job.job_title',
            "width": "8%"
          },
          {
            data: 'phone',
            className: "text-center",
            "width": "2%"
          },
          {
            data: 'mobile',
            "width": "5%"
          },
          {
            data: 'status',
            "width": "2%",
            render: function(data, type, full, meta) {
              if (data == 'inactive') {
                return "<span class='badge bg-red p-1 me-1'></span>Neaktivní";
              }
              if (data == 'active') {
                return "<span class='badge bg-green p-1 me-1'></span>Aktivní";
              } else {
                return "<span class='badge bg-yellow p-1 me-1'></span>Mateřská";
              }
            }
          },
          {
            data: 'start_date',
            "width": "6%",
            render: function(data, type, full, meta) {
              var date = moment(data).locale('cs');
              return date.format('DD. MM. YYYY');
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

    // Form Modal Functions

    $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');
      $('#form_result_modal, form_result_window').html('');
      $.ajax({
        url: "/employees/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $("#modal-header, #modal-icon").removeClass();
          $('#formModal').modal('show');
          $('#modal-icon').addClass('fas fa-user-edit fa-2x m-2');
          $('#modal-header').addClass("modal-header bg-" + html.data.department.color_id + "-lt");
          $('#action_button, .modal-title').text("{{ __('Edit employee') }}");
          $('#action').val("Edit");
          $('#personal_number').val(html.data.personal_number);
          $('#title_preffix').val(html.data.title_preffix);
          $('#last_name').val(html.data.last_name);
          $('#middle_name').val(html.data.middle_name);
          $('#first_name').val(html.data.first_name);
          $('#title_suffix').val(html.data.title_suffix);
          $('#married_name').val(html.data.married_name);
          $('#phone').val(html.data.phone);
          $('#mobile').val(html.data.mobile);
          $('#id_card').val(html.data.id_card);
          $('#department_id').val(html.data.department_id);
          $('#job_id').val(html.data.job_id);
          $('#comment').val(html.data.comment);
          $('#status').val(html.data.status);
          $('#coffee').val(html.data.coffee);
          $('#employment').val(html.data.employment);
          $('#start_date').val(html.data.start_date);
          $('#end_date').val(html.data.end_date);
          $('#created_at').val(html.data.created_at);
          $('#updated_at').val(html.data.updated_at);
          $("#preview_image").attr("src", "{{ URL::to('/') }}/foto/no_image.png");
          $('#store_image').html("<img src={{ URL::to('/') }}/foto/" + html.data.image + " height='193px' class='bg-" + html.data.department.color_id +
            "-lt z-depth-1 img-thumbnail-big'></a>");
          $('#store_image').append("<input type='hidden' id='hidden_image' name='hidden_image' value='" + html.data.image + "' />");
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
      $('#action_button, .modal-title').text("{{ __('Create new employee') }}");
      $('#action').val("Add");
      $('#department_id, #job_id').val('');
      $('#id_card').val('Nový nástup');
      $('#status').val('inactive');
      $('#employment').val('HPP');
      $('#coffee').val('N');
      $("#preview_image").attr("src", "{{ URL::to('/') }}/foto/no_image.png");
      $('#store_image').html("<img src={{ URL::to('/') }}/foto/no_image.png height='193px' class='bg-muted-lt z-depth-1 img-thumbnail-big'></a>");
      $('#store_image').append("<input type='hidden' id='hidden_image' name='hidden_image' value='' />");
    })

    $('#inputForm').on('submit', function(event) {
      event.preventDefault();
      if ($('#action').val() == 'Add') {
        $.ajax({
          url: "{{ route('employees.store') }}",
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
              html += '</ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' + data.success +
                '</li></ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#inputForm')[0].reset();
              $("#preview_image").attr("src", "{{ URL::to('/') }}/foto/no_image.png");
              $('.dataTable').DataTable().ajax.reload(null, false);
              $('#form_result_modal').html(html);
            }
          }
        })
      }

      if ($('#action').val() == "Edit") {
        event.preventDefault();
        $.ajax({
          url: "{{ route('employees.update') }}",
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
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' + data.success + '</li></ul></div>';
              $('.dataTable').DataTable().ajax.reload(null, false);
              $('#form_result_window').html(html);
              $('#formModal').modal('hide');
            }
          }
        });
      };

    });

    // Preview Image
    $(document).ready(() => {
      $("#image").change(function() {
        const file = this.files[0];
        if (file) {
          let reader = new FileReader();
          reader.onload = function(event) {
            $("#preview_image").attr("src", event.target.result);
          };
          reader.readAsDataURL(file);
        }
      });
    })

    // Delete Employee
    $(document).on('click', '.delete', function() {
      employee_id = $(this).attr('id');
      $('#ok_button').text("{{ __('Delete') }}");
      $('#confirmModal').modal('show');
    })

    $('#ok_button').click(function() {
      $.ajax({
        url: "employees/destroy/" + employee_id,
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

    // Remove Employee Foto
    $(document).on('click', '.remove', function() {
      employee_id = $(this).attr('id');
      $('#remove_button').text("{{ __('Remove') }}");
      $('#photoModal').modal('show');
    })

    $('#remove_button').click(function() {
      $.ajax({
        url: "employees/destroy-photo/" + employee_id,
        beforeSend: function() {
          $('#remove_button').text("{{ __('Removing ...') }}");
        },
        success: function(data) {
          setTimeout(function() {
            $('#photoModal').modal('hide');
            $('#remove_button').text("{{ __('Remove') }}");
            $('.dataTable').DataTable().ajax.reload(null, false);
          }, 1000);
        }
      })
    })
  </script>
@endsection
