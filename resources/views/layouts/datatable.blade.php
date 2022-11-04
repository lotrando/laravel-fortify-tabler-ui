<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link href="{{ asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
  <link type="image/png" href="{{ asset('static/logo-khn.png') }}" rel="shortcut icon">
  <style>
    body {
      height: 100vh;
      margin-bottom: 10px;
      margin-bottom\: 5px;
      color: #666;
    }
  </style>
</head>

<body>
  <main>
    @yield('main')
  </main>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
          targets: 3
        }],
        columns: [{
            data: 'personal_number',
            "width": "1%"
          },
          {
            data: 'image',
            "width": "1%",
            render: function(data, type, full, meta) {

              return "<div class='cent img-hover-zoom'><a data-lightbox='employee' href='{{ URL::to('/') }}" + data +
                "'><img src={{ URL::to('/') }}" +
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
            "width": "5%",
          },
          {
            data: 'first_name',
            "width": "5%"
          },
          {
            data: 'title_suffix',
            "width": "1%"
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
</body>

</html>
