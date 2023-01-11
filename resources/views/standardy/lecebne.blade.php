@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/' . $categorie->category_icon) ?? '' }}" rel="shortcut icon">
@endsection

@section('content')
<div class="page-wrapper mb-4">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!-- Page pre-title -->
        <div class="col">
          <div class="page-pretitle text-primary">
            {{ __($category) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($categorie->category_name) ?? '' }}
          </h2>
        </div>
        <!-- Page title actions buttons -->
        <div class="ms-auto d-print-none col-auto">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              @auth
              <button class="btn btn-success me-2 d-none d-sm-inline-block" id="openCreateModal" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      data-bs-original-title="{{ __('Vytvoří novou položku standardu') }}">
                <svg class="icon icon-tabler icon-tabler-book-upload" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                  <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                  <path d="M15 16l3 -3l3 3"></path>
                  <path d="M18 13v9"></path>
                </svg>
                {{ __('Nový standard') }}
              </button>
              @endauth
              <button class="btn btn-yellow me-2 d-none d-sm-inline-block" id="showbtn" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      data-bs-original-title="{{ __('Zoobrayí všechny standardy na stránku') }}">
                <svg class="icon icon-tabler icon-tabler-list-details" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M13 5h8"></path>
                  <path d="M13 9h5"></path>
                  <path d="M13 15h8"></path>
                  <path d="M13 19h5"></path>
                  <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                  <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                </svg>
                {{ __('Zobrazit vše') }}
              </button>
              <button class="btn btn-secondary me-2 d-none d-sm-inline-block" id="closebtn" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{ __('Skryje všechny standardy') }}">
                <svg class="icon icon-tabler icon-tabler-menu-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <line x1="4" y1="6" x2="20" y2="6"></line>
                  <line x1="4" y1="12" x2="20" y2="12"></line>
                  <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
                {{ __('Skrýt vše') }}
              </button>
            </div>
          </div>
        </div>
        <!-- Wrapper End -->

        <div class="container-fluid">
          <div class="col-lg-12">
            <div id="standard-1" data-bs-parent="#accordion-standard">
              <div class="accordion mt-2" id="accordion-example">
                @foreach ($documents as $document)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-{{ $document->position }}">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button"
                            aria-expanded="false">
                      {{ $document->accordion_name }}
                    </button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                    <div class="accordion-body pt-0">
                      <div class="list-group list-group-flush list-group-hoverable">
                        <div class="list-group-item">
                          <div class="row align-items-center mb-3">
                            <div class="col-auto">
                              <a href="{{ url('standardy/lecebne/' . $document->file) }}" target="_blank">
                                <span class="avatar">
                                  <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                </span>
                              </a>
                            </div>
                            <div class="col text-truncate">
                              <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/lecebne/' . $document->file) }}" target="_blank">
                                <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                              </a>
                              <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                            </div>
                            <div class="col-auto">
                              <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                              </svg>
                              <span class="text-muted">revize č. {{ $document->revision }}</span>
                              @auth
                              @if ($document->status == 'Rozpracováno')
                              <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                              @else
                              <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                              @endif
                              @endauth
                              @if ( Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                              <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                              @endif
                              @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                              <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                              @endif
                              <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                   stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                <line x1="11" y1="15" x2="12" y2="15"></line>
                                <line x1="12" y1="15" x2="12" y2="18"></line>
                              </svg>
                              <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                            </div>
                            @auth
                            <div class="col-auto">
                              <span title="Možnosti" class="cursor-pointer btn btn-icon hover-shadow" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <line x1="4" y1="6" x2="20" y2="6"></line>
                                  <line x1="4" y1="12" x2="20" y2="12"></line>
                                  <line x1="4" y1="18" x2="20" y2="18"></line>
                                </svg>
                              </span>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                <li class="dropdown-item edit" name="edit" id="{{ $document->id }}">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                  </svg>
                                  {{ __('Upravit standard') }}
                                </li>
                                <li class="dropdown-item delete" name="delete" id="{{ $document->id }}'">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon dropdown-item-icon-delete" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7h16"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    <path d="M10 12l4 4m0 -4l-4 4"></path>
                                  </svg>
                                  {{ __('Odstranit standard') }}
                                </li>
                              </ul>
                            </div>
                            @endauth
                          </div>
                          @foreach ($document->addon as $add)
                          <div class="row align-items-center mb-1">
                            <div class="col-auto">
                              <a href="{{ url('standardy/lecebne/' . $add->file) }}">
                                <span class="avatar">
                                  <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                </span>
                              </a>
                            </div>
                            <div class="col text-truncate">
                              <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                              </a>
                              <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                            </div>
                            <div class="col-auto">
                              @if ( Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                              <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                              @endif
                              @if ( Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::today())
                              <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Aktualizováno</span>
                              @endif
                              <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                              </svg>
                              <span class="text-muted">revize č. {{ $document->revision }}</span>
                              <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                <line x1="11" y1="15" x2="12" y2="15"></line>
                                <line x1="12" y1="15" x2="12" y2="18"></line>
                              </svg>
                              <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
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
            </div>
            <form id="inputForm" action="{{ route('documents.create') }}">
              @csrf
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <span id="form_result_modal"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-12 col-lg-3 mb-sm-1">
                    <label class="form-label">{{ __('Kategorie standardu') }}</label>
                    <select class="form-select" id="category_id" name="category_id">
                      @foreach ($categories as $item)
                      <option value="{{ $item->id }}" @if (old('category_id')==$item->id) selected @endif>
                        {{ $item->category_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-12 col-lg-9 mb-sm-1">
                    <label class="form-label">{{ __('Název standardu') }}</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="{{ __('Celý název standardu') }}">
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-12 col-lg-9 mb-sm-1">
                    <label class="form-label">{{ __('Jednoduchý popis standardu') }}</label>
                    <input class="form-control" id="description" name="description" type="text" placeholder="{{ __('Jednoduchý popis standardu') }}">
                  </div>
                  <div class="col-12 col-lg-3 mb-sm-1">
                    <label class="form-label">{{ __('Position') }}</label>
                    <input class="form-control" id="position" name="position" type="number" placeholder="{{ __('Pozice v seznamu') }}">
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-12 col-lg-2 mb-sm-1">
                    <label class="form-label">{{ __('Revision') }}</label>
                    <input class="form-control" id="revision" name="revision" type="number" placeholder="{{ __('Číslo revize') }}">
                  </div>
                  <div class="col-12 col-lg-8 mb-sm-1">
                    <label class="form-label">{{ __('Soubor') }}</label>
                    <input class="form-control" id="file" name="file" type="file" placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                  </div>
                  <div class="col-12 col-lg-2 mb-sm-1">
                    <label class="form-label">{{ __('Status') }}</label>
                    <select class="form-select" id="status" name="status">
                      <option value="Rozpracováno">Rozpracováno</option>
                      <option value="Schváleno">Schváleno</option>
                    </select>
                  </div>
                </div>
              </div>
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
              <input id="hidden_file" name="hidden_file" type="hidden" />

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
    </div>

    {{-- Delete Event Modal --}}
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
            <div class="text-muted mb-2">
              {{ __('Do you really want to remove standard event?') }}<br>{{ __('This operation cannot be undone') }}
            </div>
            <div class="text-info">{{ __('If the standard contains appendices, it will be possible to subsequently attach these appendices to a new or different standard') }}</div>
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
      $(document).ready(function() {
            $('.accordion-collapse').removeClass('show');
            $('#showbtn').click(function() {
              $('.accordion-collapse').addClass('show');
              $('.accordion-button').removeClass('collapsed');
            });

            $('#closebtn').click(function() {
              $('.accordion-collapse').removeClass('show');
              $('.accordion-button').addClass('collapsed');
            });
          });
    </script>

    <script>
      // Form Modal Functions
          $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $('#form_result_modal, form_result_window').html('');
            $.ajax({
              url: "/documents/" + id + "/edit",
              dataType: "json",
              success: function(html) {
                $('#inputForm')[0].reset();
                $("#modal-icon, #modal-header").removeClass();
                $('#formModal').modal('show');
                $('#modal-icon').addClass('fas fa-book-medical fa-2x m-2');
                $('#modal-header').addClass("modal-header bg-yellow-lt");
                $('#action_button, .modal-title').text("{{ __('Edit standard') }}");
                $('#action').val("Edit");
                $('#category_id').val(html.data.category_id);
                $('#accordion_name').val(html.data.accordion_name);
                $('#name').val(html.data.name);
                $('#revision').val(html.data.revision);
                $('#description').val(html.data.description);
                $('#position').val(html.data.position);
                $('#attachment').val(html.data.attachment);
                $('#status').val(html.data.status);
                $('#created_at').val(html.data.created_at);
                $('#updated_at').val(html.data.updated_at);
                $('#hidden_id').val(html.data.id);
                $('#hidden_file').val(html.data.file);
              }
            })
          })

          $('#openCreateModal').click(function() {
            $('#inputForm')[0].reset();
            $("#modal-icon, #modal-header").removeClass();
            $('#category_id').val('');
            $('#formModal').modal('show');
            $('#modal-icon').addClass('fas fa-book-medical fa-2x m-2');
            $('#modal-header').addClass("modal-header bg-green-lt");
            $('#action_button, .modal-title').text("{{ __('Create new standard') }}");
            $('#action').val("Add");
            $('#status').val('Rozpracováno');
          })

          $('#inputForm').on('submit', function(event) {
            event.preventDefault();
            if ($('#action').val() == 'Add') {
              $.ajax({
                url: "{{ route('documents.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                  var html = '';
                  if (data.errors) {
                    html = '<div class="alert alert-danger text-danger shadow-sm"><ul> ';
                    for (var count = 0; count < data.errors.length; count++) {
                      html += '<li>' + data.errors[count] + '</li>';
                    }
                    html += '</ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
                    $('#form_result_modal').html(html);
                  }
                  if (data.success) {
                    html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' + data.success + '</li></ul></div>';
                    $('#formModal').modal('hide')
                    $('#inputForm')[0].reset();
                    $('#form_result_window').html(html);
                    location.reload()
                  }
                }
              })
            }

            if ($('#action').val() == "Edit") {
              event.preventDefault();
              $.ajax({
                url: "{{ route('documents.update') }}",
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
                    $('#form_result_window').html(html);
                    location.reload();
                    $('#formModal').modal('hide');
                  }
                }
              });
            }
          })

          // Delete Employee
          $(document).on('click', '.delete', function() {
            id = $(this).attr('id');
            $('#ok_button').text("{{ __('Delete') }}");
            $('#confirmModal').modal('show');
          })

          // Delete Confirm
          $('#ok_button').click(function() {
            $.ajax({
              url: "/documents/destroy/" + id,
              beforeSend: function() {
                $('#ok_button').text("{{ __('Deleting ...') }}");
              },
              success: function(data) {
                setTimeout(function() {
                  $('#confirmModal').modal('hide');
                  $('#ok_button').text("{{ __('Delete') }}");
                  location.reload();
                }, 1000);
              }
            })
          })
    </script>
    @endsection
