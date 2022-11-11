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
          <form action="{{ route('employees.create') }}" method="post"></form>
          <div class="row mb-3">
            <div class="col-1">
              <label class="form-label">{{ __('Personal number') }}</label>
              <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
            </div>
            <div class="col-2">
              <label class="form-label">{{ __('Titles preffix') }}</label>
              <input class="form-control" id="title_preffix" name="title_preffix" type="text" placeholder="{{ __('Titles preffix') }}">
            </div>
            <div class="col-4">
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
              <label class="form-label">{{ __('Card') }}</label>
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
            <div class="col-6">
              <label class="form-label">{{ __('Department color') }}</label>
              <div class="row g-2">
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="blue" />
                    <span class="form-colorinput-color bg-blue"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="azure" />
                    <span class="form-colorinput-color bg-azure"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="indigo" />
                    <span class="form-colorinput-color bg-indigo"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="purple" />
                    <span class="form-colorinput-color bg-purple"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="pink" />
                    <span class="form-colorinput-color bg-pink"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="red" />
                    <span class="form-colorinput-color bg-red"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="orange" />
                    <span class="form-colorinput-color bg-orange"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="yellow" />
                    <span class="form-colorinput-color bg-yellow"></span>
                  </label>
                </div>
                <div class="col-auto">
                  <label class="form-colorinput">
                    <input class="form-colorinput-input" name="id_color" type="radio" value="lime" />
                    <span class="form-colorinput-color bg-lime"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5">
              <label class="form-label">{{ __('Department') }}</label>
              <select class="form-select" id="department_id" name="department_id" size="16">
                @foreach ($departments as $department)
                  <option value="{{ $department->id }}" @if (old('department_id') == $department->id) selected @endif>{{ $department->center_code }} -
                    {{ $department->department_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label class="form-label">{{ __('Job') }}</label>
                <select class="form-select" id="job_id" name="job_id" size="16">
                  @foreach ($jobs as $job)
                    <option value="{{ $job->id }}" @if (old('job_id') == $job->id) selected @endif>{{ $job->job_title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">{{ __('Photo') }}</label>
                <div class="d-flex justify-content-center align-items-center">
                  <span id="store_image"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-9">
              <div class="mb-1">
                <label class="form-label">{{ __('Description') }}</label>
                <textarea class="form-control" id="comment" name="comment" data-bs-toggle="autosize" type="text" placeholder="{{ __('Description') }}"></textarea>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">{{ __('Select a photo') }}</label>
                <input class="form-control" id="image" name="image" type="file" placeholder="{{ __('Select a photo') }}">
              </div>
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
      $('.modal-title').text("{{ __('Create new employee') }}");
      $('#action_button').text("{{ __('Create new employee') }}");
      $('#action').val("Add");
      $('#formModal').modal('show');
    });
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
          $('#store_image').html("<a data-lightbox='emplyee' href='{{ URL::to('/') }}/foto/" + html.data.image + "'><img src={{ URL::to('/') }}/foto/" + html.data
            .image + " height='100%' class='z-depth-1 img-thumbnail' /></a>");
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

</body>

</html>
