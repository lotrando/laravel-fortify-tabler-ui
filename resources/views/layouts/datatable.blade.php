<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link href="{{ asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css') }}" rel="stylesheet">
  <link type="image/png" href="{{ asset('static/logo-khn.png') }}" rel="shortcut icon">
  <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
  <style>
    body {
      height: 100vh;
      color: #666;
    }
  </style>
</head>

<body>
  <main>
    @yield('main')
  </main>

  {{-- Create Modal --}}
  <div class="modal modal-blur fade" id="formModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="inputForm" action="{{ route('employees.create') }}" method="post"></form>
          <div class="row mb-3">
            <div class="col-2">
              <label class="form-label">{{ __('Personal number') }}</label>
              <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Titles preffix') }}</label>
              <input class="form-control" id="title_preffix" name="title_preffix" type="text" placeholder="{{ __('Titles preffix') }}">
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
              <input class="form-control" id="title_suffix" name="title_suffixx" type="text" placeholder="{{ __('Titles suffix') }}">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-2">
              <label class="form-label">{{ __('Middle name') }}</label>
              <input class="form-control" id="middle_name" name="middle_name" type="text" placeholder="{{ __('Middle name') }}">
            </div>
            <div class="col-3">
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
              <select class="form-select" id="id_card" name="id_card" data-max-options="2">
                <option value="Nový nástup" selected>Nový nástup</option>
                <option value="Vytvořit kartu">Vytvořit kartu</option>
                <option value="Vytvořit nálepku">Vytvořit nálepku</option>
                <option value="Předat nálepku">Předat nálepku</option>
                <option value="Aktual. nálepku">Aktualizovat nálepku</option>
                <option value="Vydána">Vydáno</option>
                <option value="Vrácena">Vrácena</option>
              </select>
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Status') }}</label>
              <select class="form-select" id="status" name="status">
                <option value="inactive" selected>Neaktivní</option>
                <option value="active" selected>Aktivní</option>
                <option value="maternal">Mateřská</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-2">
              <label class="form-label">{{ __('Email') }}</label>
              <input class="form-control" id="email" name="email" type="text" placeholder="{{ __('Email') }}">
            </div>
            <div class="col-1">
              <label class="form-label">{{ __('Coffee') }}</label>
              <input class="form-control" id="coffee" name="coffee" type="text" placeholder="{{ __('Coffee') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('ID Card color') }}</label>
              <select class="form-select" id="id_color" name="id_color">
                @foreach ($department_colors as $department_color)
                  <option class="bg-{{ $department_color->code }}-lt text-white" value="{{ $department_color->code }}" @if (old('id_color') == $department_color->code) selected @endif>
                    {{ $department_color->name }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-4">
              <label class="form-label">{{ __('Department') }}</label>
              <select class="form-select" id="department_id" name="department_id">
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
                  @foreach ($jobs as $job)
                    <option value="{{ $job->id }}" @if (old('job_id') == $job->id) selected @endif>{{ $job->job_title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-2">
              <label class="form-label">{{ __('Photo') }}</label>
              <div class="d-flex justify-content-start align-items-start">
                <span id="store_image"></span>
              </div>
            </div>
            <div class="col-10">
              <label class="form-label">{{ __('Description') }}</label>
              <textarea class="form-control" id="comment" name="comment" type="text" placeholder="{{ __('Description') }}" rows="8"></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <label class="form-label">{{ __('Select a photo') }}</label>
              <input class="form-control" id="image" name="image" type="file" placeholder="{{ __('Select a photo') }}">
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
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-white" data-bs-dismiss="modal">
            {{ __('Cancel') }}
          </button>
          <button class="btn btn-primary ms-auto" id="action_button"></button>
        </div>
      </div>
    </div>
  </div>
  </div>


  {{-- Delete Modal --}}
  <div class="modal modal-blur fade" id="confirmModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button>
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
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
                <button class="btn w-100" data-bs-dismiss="modal">
                  {{ __('Cancel') }}
                </button>
              </div>
              <div class="col">
                <button class="btn btn-danger w-100" id="ok_button"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/jquery.js') }}"></script>
  {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/czech-string.js') }}"></script>
  <script src="{{ asset('js/lightbox.js') }}"></script>
  <script src="{{ asset('js/tabler.min.js') }}"></script>
  <script src="{{ asset('js/demo.min.js') }}"></script>
  <script src="{{ asset('js/moment-with-locales.js') }}"></script>

  <script>
    $(document).ready(function() {
      $('.dataTable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        pageSave: true,
        order: [
          [3, "asc"]
        ],
        "lengthMenu": [
          [10, 30, 60, 100, -1],
          [10, 30, 60, 100, "Všechny"]
        ],
        language: {
          "url": "{{ asset('js/cs.json') }}"
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
            render: function(data, type, full, meta) {
              return "<div class='cent img-hover-zoom'><img src={{ URL::to('/foto') }}/" +
                data + " class='zoom img-thumbnail' width='35' height='45' /></a></div>";
            },
            orderable: false,
          },
          {
            data: 'personal_number',
            "width": "1%"
          },
          {
            data: 'title_preffix',
            "width": "3%"
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
            "width": "2%"
          },
          {
            data: 'department.center_code',
            "width": "2%"
          },
          {
            data: 'department.department_name',
            "width": "10%"
          },
          {
            data: 'job.job_title',
            "width": "8%"
          },
          {
            data: 'email',
            "width": "2%"
          },
          {
            data: 'phone',
            className: "text-center",
            "width": "1%"
          },
          {
            data: 'mobile',
            "width": "2%"
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
            "width": "3%",
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
  </script>

  <script>
    $('#openCreateModal').click(function() {
      $('#formModal').modal('show');
      $('.modal-title').text("{{ __('Create new employee') }}");
      $('#action_button').text("{{ __('Create new employee') }}");
      $('#action').val("Add");
      $('#personal_number').val('');
      $('#title_preffix').val('');
      $('#last_name').val('');
      $('#middle_name').val('');
      $('#first_name').val('');
      $('#title_suffix').val('');
      $('#married_name').val('');
      $('#phone').val('');
      $('#mobile').val('');
      $('#id_card').val('Nový nástup');
      $('#department_id').val('');
      $('#job_id').val('');
      $('#comment').val('');
      $('#status').val('inactive');
      $('#coffee').val('');
      $('#id_color').val('');
      $('#employment').val('');
      $('#start_date').val('');
      $('#end_date').val('');
      $('#created_at').val('');
      $('#updated_at').val('');
      $('#store_image').html(
        "<img src={{ URL::to('/') }}/foto/00000.png height='193px' class='z-depth-1 img-thumbnail-big' /></img>"
      );
    })
  </script>

  {{-- Edit record --}}
  <script>
    $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');
      $('#form_result').html('');
      $.ajax({
        url: "/employees/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $('#formModal').modal('show');
          $('.modal-title').text("{{ __('Edit employee') }}");
          $('#action_button').text("{{ __('Edit employee') }}");
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
          $('#id_color').val(html.data.id_color);
          $('#employment').val(html.data.employment);
          $('#start_date').val(html.data.start_date);
          $('#end_date').val(html.data.end_date);
          $('#created_at').val(html.data.created_at);
          $('#updated_at').val(html.data.updated_at);
          $('#store_image').html("<a data-lightbox='employee' href='{{ URL::to('/') }}/foto/" + html.data.image + "'><img src={{ URL::to('/') }}/foto/" + html.data
            .image + " height='193px' class='z-depth-1 img-thumbnail-big' /></a>");
          $('#store_image').append("<input type='hidden' name='hidden_image' value='" + html.data.image + "' />");
          $('#hidden_id').val(html.data.id);
        }
      })
    });
  </script>

  {{-- Delete record --}}
  <script>
    $(document).on('click', '.delete', function() {
      employee_id = $(this).attr('id');
      $('#ok_button').text("{{ __('Delete') }}");
      $('#confirmModal').modal('show');
    });

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
    });
  </script>

  <script>
    lightbox.option({
      'resizeDuration': 400,
      'wrapAround': true,
      'positionFromTop': 100,
      'maxHeight': 600,
      'albumLabel': "Fotografie %1 z %2",
      'fitImagesInViewport': true
    })
  </script>

</body>

</html>
