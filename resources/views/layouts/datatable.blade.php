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
      background-size: cover;
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
        columns: [{
            data: 'personal_number',
            name: 'personal_number'
          },
          {
            data: 'image',
            name: 'image',
            render: function(data, type, full, meta) {

              return "<div class='cent img-hover-zoom'><a data-lightbox='emplyee' href='{{ URL::to('/') }}/foto/" + data + "'><img src={{ URL::to('/') }}/foto/" +
                data + " class='zoom img-thumbnail' width='64' /></a></div>";
            },
            orderable: false,
          },
          {
            data: 'title_preffix',
            name: 'title_preffix'
          },
          {
            data: 'last_name',
            name: 'last_name'
          },
          {
            data: 'first_name',
            name: 'first_name'
          },
          {
            data: 'title_suffix',
            name: 'title_suffix'
          },
          {
            data: 'department',
            name: 'department'
          },
          {
            data: 'job',
            name: 'job'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'phone',
            name: 'phone'
          },
          {
            data: 'mobile',
            name: 'mobile'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
          },
        ],
        columnDefs: [{
            targets: 0,
            "width": "1%"
          },
          {
            targets: 1,
            "width": "2%"
          },
          {
            targets: 2,
            "width": "5%"
          },
          {
            targets: 3,
            "width": "10%"
          },
          {
            targets: 4,
            "width": "10%"
          },
          {
            targets: 5,
            "width": "5%"
          },
          {
            targets: 6,
            "width": "18%"
          },
          {
            targets: 7,
            "width": "10%"
          },
          {
            targets: 8,
            "width": "1%"
          },
          {
            targets: 9,
            "width": "0%"
          }
        ]
      });
    });
  </script>
</body>

</html>
