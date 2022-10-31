@extends('layouts.datatable')

@section('main')
  @if (session('status'))
    <div>{{ session('status') }}</div>
  @endif

  <div class="container-fluid" style="margin-top: 10px">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Test
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <table class="table-bordered table-striped data-table table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Department</th>
                  <th class="text-center"><button class="btn btn-sm btn-success" id="create_record" name="create_record">Nový</button></th>
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



  <script type="text/javascript">
    $(document).ready(function() {
      $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        pageSave: true,
        order: [
          [2, "asc"]
        ],
        lengthMenu: [
          [10, 30, 60, 100, -1],
          [10, 30, 60, 100, "Všechny"]
        ],
        language: {
          "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/cs.json"
        },
        ajax: "{{ route('movements.index') }}",
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'title',
            name: 'title'
          },
          {
            data: 'user',
            name: 'user.name'
          },
          {
            data: 'department',
            name: 'department.department_name'
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
            "width": "5%"
          },
          {
            targets: 1,
            "width": "25%"
          },
          {
            targets: 2,
            "width": "15%"
          },
          {
            targets: 3,
            "width": "15%"
          },
          {
            targets: 4,
            "width": "5%"
          },
        ]
      });
    });
  </script>
