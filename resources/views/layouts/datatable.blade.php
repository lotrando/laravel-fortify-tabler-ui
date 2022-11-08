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

  {{-- Model --}}
  <div class="modal modal-blur fade" id="modal-report" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('New employee') }}</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <div class="col-4">
              <label class="form-label">{{ __('Photo') }}</label>
              <span id="store_image"></span>
              <input class="form-control" id="image" name="image" type="file" placeholder="{{ __('Select a photo') }}">
            </div>
          </div>
          <div class="col-2 mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
          </div>
          <div class="col-2 mb-3">
            <label class="form-label">{{ __('Title preffix') }}</label>
            <input class="form-control" id="title_preffix" name="title_preffix" type="text" placeholder="{{ __('Title preffixr') }}">
          </div>
          <div class="col-2 mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
          </div>
          <div class="col-2 mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
          </div>
          {{-- <label class="form-label">Report type</label>
          <div class="form-selectgroup-boxes row mb-3">
            <div class="col-6">
              <label class="form-selectgroup-item">
                <input class="form-selectgroup-input" name="report-type" type="radio" value="1" checked>
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Simple</span>
                    <span class="d-block text-muted">Provide only basic data needed for the report</span>
                  </span>
                </span>
              </label>
            </div>
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input class="form-selectgroup-input" name="report-type" type="radio" value="1">
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Advanced</span>
                    <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
                  </span>
                </span>
              </label>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-5">
              <div class="mb-3">
                <label class="form-label">{{ __('Department') }}</label>
                <select class="form-select" id="department_id" name="department_id">
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
                <select class="form-select" id="job_id" name="job_id">
                  @foreach ($jobs as $job)
                    <option value="{{ $job->id }}" selected>{{ $job->job_title }}</option>
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
            {{-- <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Client name</label>
                <input class="form-control" type="text">
              </div>
            </div> --}}
            <div class="col-12">
              <div class="mb-1">
                <label class="form-label">{{ __('Description') }}</label>
                <textarea class="form-control" id="comment" name="comment" type="text" row="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" data-bs-dismiss="modal" href="#">
            {{ __('Cancel') }}
          </a>
          <a class="btn btn-primary ms-auto" data-bs-dismiss="modal" href="#">
            {{ __('Create new employee') }}
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- test --}}

  <div class="modal modal-blur fade" id="" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
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

              <div class="col-sm-2">
                <div class="form-group"><label class="control-label">Fotografie</label>
                  <span id="store_image"></span>
                </div>
                <div class="form-group">
                  <input id="image" name="image" type="file" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <div class="form-group"><label class="control-label">Osobní číslo</label><input class="form-control" id="pernum" name="pernum" type="text" /></div>
              </div>
              <div class="col-sm-2">
                <div class="form-group"><label class="control-label">Titul Před</label>
                  <select class="form-control" id="prefix" name="prefix" type="text" />
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
              </div>
              <div class="col-sm-3">
                <div class="form-group"><label class="control-label">Příjmení</label><input class="form-control" id="last_name" name="last_name" type="text" /></div>
              </div>
              <div class="col-sm-3">
                <div class="form-group"><label class="control-label">Jméno</label><input class="form-control" id="first_name" name="first_name" type="text" /></div>
              </div>
              <div class="col-sm-2">
                <div class="form-group"><label class="control-label">Titul za</label>
                  <select class="form-control" id="suffix" name="suffix" type="text" />
                  <option value=""></option>
                  <option value="DiS.">DiS.</option>
                  <option value="MBA">MBA</option>
                  <option value="LL.M.">LL.M.</option>
                  <option value="MBA, LL.M.">MBA, LL.M.</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group"><label class="control-label">Doplňující příjmení</label><input class="form-control" id="middle_name" name="middle_name"
                    type="text" /></div>
              </div>
              <div class="col-sm-3">
                <div class="form-group"><label class="control-label">Za svobodna</label><input class="form-control" id="married_name" name="married_name" type="text" />
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group"><label class="control-label">Klapka</label><input class="form-control" id="phone" name="phone" type="text" /></div>
              </div>
              <div class="col-sm-3">
                <div class="form-group"><label class="control-label">Mobil</label><input class="form-control" id="mobil" name="mobil" type="text" /></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <div class="form-group">
                  <label class="control-label">Oddělení</label>
                  <select class="form-control" id="department" name="department" type="text" />
                  <option value="nezadáno">Vyber Oddělení / Ambulanci</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label class="control-label">Barva proužku ID Karty</label>
                  <select class="form-control" id="comment" name="comment" type="text" />
                  <option class="line0" value="222222">Vyber barvu</option>
                  <option class="line1" value="4287f5">INT</option>
                  <option class="line2" value="7833e8">NEU</option>
                  <option class="line3" value="d9fa05">ONP</option>
                  <option class="line4" value="94f700">OS</option>
                  <option class="line5" value="66c908">REH</option>
                  <option class="line6" value="0f9990">OPL</option>
                  <option class="line7" value="a908c9">OKB</option>
                  <option class="line8" value="c90818">RDG</option>
                  <option class="line9" value="a31561">MEZ-JIP</option>
                  <option class="line10" value="ffa600">ORT</option>
                  <option class="line11" value="ffee00">Ředitelství</option>
                  <option class="line12" value="ffa200">Stravovak ( Kantýna, Bufet )</option>
                  <option class="line13" value="999999">Provoz (Recepce, Úklid, Údržba</option>
                  <option class="line14" value="2c612a">Lékárny</option>
                  <option class="line15" value="ffa633">Následná péče</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="control-label">Stav karty</label>
                  <select class="form-control" id="card_status" name="card_status" type="text" />
                  <option value="Nový nástup">Nový nástup</option>
                  <option value="Vytvořit kartu">Vytvořit kartu</option>
                  <option value="Vytvořit nálepku">Vytvořit nálepku</option>
                  <option value="Předat nálepku">Předat nálepku</option>
                  <option value="Aktual. nálepku">Aktual. nálepku</option>
                  <option value="OK">OK</option>
                  <option value="Vrácena">Vrácena</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="control-label">Kávomat</label>
                  <select class="form-control" id="coffee_status" name="coffee_status" type="text" />
                  <option value="Ne">Ne</option>
                  <option value="Ano">Ano</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="form-group">
                  <label class="control-label">Funkce</label>
                  <select class="form-control" id="occupation" name="occupation" type="text" />
                  <option value="nezadáno">Vyber funkci zaměstnance</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-group"><label class="control-label">Poměr</label>
                  <select class="form-control" id="relationship" name="relationship" type="text" />
                  <option value="">Vyber pracovní poměr</option>
                  <option value="HPP">Hlavní pracovní poměr (HPP)</option>
                  <option value="DPP">Dohoda o provedení práce (DPP)</option>
                  <option value="DPČ">Dohoda o pracovní činnosti (DPČ)</option>
                  <option value="EVP">EVP</option>
                  <option value="ČSO">ČSO</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class='form-group date'>
                  <label class="control-label">Datum nástupu</label>
                  <input class="form-control" id='startdate' name="startdate" type='text' />
                </div>
              </div>
              <div class="col-sm-4">
                <div class='form-group date'>
                  <label class="control-label">Datum výpovědi</label>
                  <input class="form-control" id='enddate' name="enddate" type='text' />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label">Status zaměstnance</label>
                  <select class="form-control" id="status" name="status" type="text" />
                  <option value="Active">Aktivní</option>
                  <option value="Maternal">Mateřská</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group" align="center">
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
              <div class="modal-footer">
                <button class="btn me-auto" data-bs-dismiss="modal" type="button">{{ __('Close') }}</button>
                <button class="btn btn-success" id="action_button" name="action_button" type="submit">{{ __('Create') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Delete Modal --}}

  <div class="modal modal-blur fade" id="confirmModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <h3>Odstranit ?</h3>
          <div class="text-muted">Chcete zaměstnance definitivně odstranit ?</div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                  {{ __('Cancel') }}
                </a></div>
              <div class="col"><a class="btn btn-danger w-100" id="ok_button" name="ok_button" data-bs-dismiss="modal" href="#">
                  {{ __('Delete') }}
                </a></div>
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
            data: 'department.department_code',
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
    $('#create_record').click(function() {
      $('.modal-title').text("Vytvořit nového zaměstnance");
      $('#action_button').val("Vytvořit");
      $('#action').val("Add");
      $('#formModal').modal({
        backdrop: 'static',
        keyboard: false
      });
    });

    $('#sample_form').on('submit', function(event) {
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
              html = '<div class="alert alert-danger alert-dismissible fade show">';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<p>' + data.errors[count] + '</p>';
              }
              html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
            if (data.success) {
              html = '<div class="alert alert-success">' + data.success + '</div>';
              $('#sample_form')[0].reset();
              $('#user_table').DataTable().ajax.reload(null, false);
            }
            $('#form_result').html(html);
          }
        })
      }

      if ($('#action').val() == "Edit") {
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
              html = '<div class="alert alert-danger alert-dismissible fade show">';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<p>' + data.errors[count] + '</p>';
              }
              html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
            if (data.success) {
              html = '<div class="alert alert-success alert-dismissible fade show">' + data.success +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
              $('#sample_form')[0].reset();
              $('#store_image').html('');
              $('#user_table').DataTable().ajax.reload(null, false);
            }
            $('#form_result_2').html(html);
            $('#formModal').modal('hide');
          }
        });
      }
    });

    $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');
      $('#form_result').html('');
      $.ajax({
        url: "/employees/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $('#pernum').val(html.data.pernum);
          $('#prefix').val(html.data.prefix);
          $('#first_name').val(html.data.first_name);
          $('#middle_name').val(html.data.middle_name);
          $('#married_name').val(html.data.married_name);
          $('#last_name').val(html.data.last_name);
          $('#suffix').val(html.data.suffix);
          $('#department').val(html.data.department);
          $('#occupation').val(html.data.occupation);
          $('#card_status').val(html.data.card_status);
          $('#coffee_status').val(html.data.coffee_status);
          $('#phone').val(html.data.phone);
          $('#mobil').val(html.data.mobil);
          $('#startdate').val(html.data.startdate);
          $('#enddate').val(html.data.enddate);
          $('#comment').val(html.data.comment);
          $('#status').val(html.data.status);
          $('#relationship').val(html.data.relationship);
          $('#store_image').html("<a data-lightbox='emplyee' href='{{ URL::to('/') }}/foto/" + html.data.image + "'><img src={{ URL::to('/') }}/foto/" + html.data
            .image + " width='70' class='z-depth-1 img-thumbnail-big' /></a>");
          $('#store_image').append("<input type='hidden' name='hidden_image' value='" + html.data.image + "' />");
          $('#hidden_id').val(html.data.id);
          $('.modal-title').text("Uprav zaměstnance");
          $('#action_button').val("Upravit");
          $('#action').val("Edit");
          $('#formModal').modal({
            backdrop: 'static',
            keyboard: false
          });
        }
      })
    });

    var user_id;

    $(document).on('click', '.delete', function() {
      user_id = $(this).attr('id');
      $('#confirmModal').modal('show');
    });

    $('#ok_button').click(function() {
      $.ajax({
        url: "employees/destroy/" + user_id,
        beforeSend: function() {
          $('#ok_button').text('Odstraňuji ...');
        },
        success: function(data) {
          setTimeout(function() {
            $('#confirmModal').modal('hide');
            $('#ok_button').text('Odstraň');
            $('#user_table').DataTable().ajax.reload(null, false);
          }, 1000);
        }
      })
    });

    .option({
      'resizeDuration': 400,
      'wrapAround': true,
      'positionFromTop': 100,
      'maxHeight': 600,
      'albumLabel': "Fotografie %1 z %2",
      'fitImagesInViewport': true
    });
  </script>
</body>

</html>
