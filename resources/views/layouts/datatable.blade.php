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
  <div class="modal modal-blur fade" id="createModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalTitle">{{ __('Create new employee') }}</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-2">
              <label class="form-label">{{ __('Photo') }}</label>
              <span id="store_image"></span>
              <input class="form-control" id="image" name="image" type="file" placeholder="{{ __('Select a photo') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Personal number') }}</label>
              <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
            </div>
            <div class="col-1">
              <label class="form-label">{{ __('Title preffix') }}</label>
              <input class="form-control" id="title_preffix" name="title_preffix" type="text" placeholder="{{ __('Title preffix') }}">
            </div>
            <div class="col-3">
              <label class="form-label">{{ __('Last name') }}</label>
              <input class="form-control" id="last_name" name="last_name" type="text" placeholder="{{ __('Last name') }}">
            </div>
            <div class="col-3">
              <label class="form-label">{{ __('First name') }}</label>
              <input class="form-control" id="first_name" name="first_name" type="text" placeholder="{{ __('First name') }}">
            </div>
            <div class="col-1">
              <label class="form-label">{{ __('Title suffix') }}</label>
              <input class="form-control" id="title_preffix" name="title_preffix" type="text" placeholder="{{ __('Title preffix') }}">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-3">
              <label class="form-label">{{ __('Middle name') }}</label>
              <input class="form-control" id="middle_name" name="middle_name" type="text" placeholder="{{ __('Middle name') }}">
            </div>
            <div class="col-3">
              <label class="form-label">{{ __('Married name') }}</label>
              <input class="form-control" id="married_name" name="married_name" type="text" placeholder="{{ __('Married name') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Phone') }}</label>
              <input class="form-control" id="phone" name="phone" type="text" placeholder="{{ __('Phone') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Mobil') }}</label>
              <input class="form-control" id="mobil" name="mobil" type="text" placeholder="{{ __('Mobil') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Card') }}</label>
              <select class="form-select" id="id_card" name="id_card" data-max-options="2">
                <option value="Nový nástup" selected>Nový nástup</option>
                <option value="Vytvořit kartu">Vytvořit kartu</option>
                <option value="Vytvořit nálepku">Vytvořit nálepku</option>
                <option value="Předat nálepku">Předat nálepku</option>
                <option value="Aktual. nálepku">Aktualizovat nálepku</option>
                <option value="OK">OK</option>
                <option value="Vrácena">Vrácena</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
              <div class="mb-3">
                <label class="form-label">{{ __('Department') }}</label>
                <select class="form-select" id="department_id" name="department_id" size="10">
                  @foreach ($departments as $department)
                    <option value="{{ $department->id }}" @if (old('department_id') == $department->id) selected @endif>{{ $department->center_code }} -
                      {{ $department->department_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-5">
              <div class="mb-3">
                <label class="form-label">{{ __('Job') }}</label>
                <select class="form-select" id="job_id" name="job_id" size="10">
                  @foreach ($jobs as $job)
                    <option value="{{ $job->id }}" @if (old('job_id') == $job->id) selected @endif>{{ $job->job_title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label class="form-label">{{ __('Status') }}</label>
                <select class="form-select" id="status" name="status">
                  <option value="active" selected>Aktivní</option>
                  <option value="maternal">Mateřská</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-1">
                <label class="form-label">{{ __('Description') }}</label>
                <textarea class="form-control" id="comment" name="comment" type="text" row="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-white" data-bs-dismiss="modal">
            {{ __('Cancel') }}
          </button>
          <button class="btn btn-primary ms-auto" id="createModalTitle">
            {{ __('Create new employee') }}
          </button>
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
            data: 'personal_number',
            "width": "0.5%"
          },
          {
            data: 'image',
            "width": "1%",
            render: function(data, type, full, meta) {

              return "<div class='cent img-hover-zoom'><a data-lightbox='employee' data-title='" + data +
                "' href='{{ URL::to('/foto') }}/" + data +
                "'><img src={{ URL::to('/foto') }}/" +
                data + " class='zoom img-thumbnail' width='32' height='32' /></a></div>";
            },
            orderable: false,
          },
          {
            data: 'title_preffix',
            "width": "1%"
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
            "width": "1%"
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
            "width": "10%"
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
      $('#createModalTitle').text("Vytvořit nového zaměstnance");
      $('#action_button').text("Vytvořit");
      $('#action').val("Add");
      $('#createModal').modal('show' {
        backdrop: 'static',
        keyboard: false
      });
    });
  </script>

  <script>
    var employee_id;

    $(document).on('click', '.delete', function() {
      employee_id = $(this).attr('id');
      $('#confirmModal').modal('show');
      $('#ok_button').text('Odstranit');
    });

    $('#ok_button').click(function() {
      $.ajax({
        url: "employees/destroy/" + employee_id,
        beforeSend: function() {
          $('#ok_button').text('Odstraňuji ...');
        },
        success: function(data) {
          setTimeout(function() {
            $('#confirmModal').modal('hide');
            $('#ok_button').text('Odstranitttt');
            $('.dataTable').DataTable().ajax.reload(null, false);
          }, 1000);
        }
      })
    });
  </script>

</body>

</html>
