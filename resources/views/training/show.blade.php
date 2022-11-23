@extends('layouts.training')
<style>
  /* Slideshow container */
  .slideshow-container {
    max-width: 750px;
    position: relative;
    margin: auto;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
    overflow: hidden;
  }

  /* Next & previous buttons */
  .prev {
    cursor: pointer;
    position: absolute;
    top: 50%;
    left: -12%;
    width: auto;
    margin-top: -45px;
    font-weight: bold;
    transition: 0.6s ease;
    border-radius: 10px;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    right: -12%;
    width: auto;
    margin-top: -45px;
    font-weight: bold;
    transition: 0.6s ease;
    border-radius: 10px;
    user-select: none;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-family: 'Roboto Condensed';
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Slide numbers text */
  .numbertext {
    color: #f2f2f2;
    font-size: 25px;
    padding: 3px 8px;
    position: absolute;
    font-family: 'Roboto Condensed';
    top: 0;
  }

  /* Dots indicators */
  .dot {
    cursor: none;
    color: white;
    padding-top: 1px;
    height: 22px;
    width: 22px;
    margin: 0 0px;
    background-color: rgba(114, 121, 134, 0.659);
    font-family: 'Roboto Condensed';
    font-size: 14px;
    border-radius: 15%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  /* Active Dot */
  .active-dot {
    background-color: #206bc4;
  }
</style>
@section('main')
  @foreach ($data as $item)
    <div class="slideshow-container">
      @if ($item->slide->count())
        @foreach ($item->slide as $slide)
          <div class="col-12">
            <div class="card mySlides mt-5 shadow-lg">
              <div class="ribbon ribbon bg-red">
                {{ $slide->position }}/{{ $item->slide->count() }}
              </div>
              <div class="card-header">
                <h1 class="card-title">{{ $item->title }}</h1>
              </div>
              <div class="card-body p-1">
                <img src="../trainings/slides/{{ $slide->directory }}/{{ $slide->path }}" style="width:100%">
              </div>
            </div>
          </div>
          <!-- Next and previous buttons -->
          <a class="btn btn-primary hover-shadow text-decoration-none prev p-3 text-white" onclick="plusSlides(-1)">&#10094;</a>
          <a class="btn btn-primary hover-shadow text-decoration-none next p-3 text-white" onclick="plusSlides(1)">&#10095;</a>
        @endforeach
      @endif
    </div>
    <br>
    <!-- The dots/circles -->
    <div id="dots" style="text-align:center">
      @foreach ($item->slide as $slide)
        <span class="dot">{{ $slide->position }}</span>
      @endforeach
    </div>
  @endforeach
@endsection

@section('modals')
  <!-- Start Modal content -->
  <div class="modal modal-blur" id="start_modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-success"></div>
        <div class="modal-body py-4 text-center">
          <div class="row">
            <div class="col-12">
              <span id="form_result_modal"></span>
            </div>
          </div>
          <svg class="icon icon-tabler icon-tabler-question text-info icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="3" y1="3" x2="21" y2="21"></line>
            <line x1="15" y1="8" x2="15.01" y2="8"></line>
            <path d="M19.121 19.122a3 3 0 0 1 -2.121 .878h-10a3 3 0 0 1 -3 -3v-10c0 -.833 .34 -1.587 .888 -2.131m3.112 -.869h9a3 3 0 0 1 3 3v9"></path>
            <path d="M4 15l4 -4c.928 -.893 2.072 -.893 3 0l5 5"></path>
            <path d="M16.32 12.34c.577 -.059 1.162 .162 1.68 .66l2 2"></path>
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted">{{ __('Stisknut9m tlačítka start spist9te školení?') }}<br>
            <h2 class="m-2">{{ $item->title }}</h2><br>{{ __('Potvrzením souhlasíte že jste absolvoval školení') }}<br>
            <h2 class="m-2">{{ $item->title }}</h2>
          </div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col">
                <a class="btn btn-muted w-100" href="{{ route('train.index') }}">
                  {{ __('Cancel') }}
                </a>
              </div>
              <div class="col">
                <button class="btn btn-success w-100 hover-shadow" id="start-button">{{ __('Start') }}</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Modal content -->
  <div class="modal modal-blur" id="end_modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-status bg-info"></div>
        <div class="modal-body py-4 text-center">
          <div class="row">
            <div class="col-12">
              <span id="form_result_modal"></span>
            </div>
          </div>
          <svg class="icon icon-tabler text-info icon-tabler-question-mark icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4"></path>
            <line x1="12" y1="19" x2="12" y2="19.01"></line>
          </svg>
          <h3>{{ __('Opravdu jste shlédli celou prezentaci?') }}</h3>
          <div class="text-muted">{{ __('Potvrzením souhlasíte že jste absolvoval školení s názvem') }}<br>
            <h2 class="m-2">{{ $item->title }}</h2>
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
                <button class="btn btn-info w-100 hover-shadow" id="remove_button">{{ __('Confirm') }}</button>
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
    startModal = document.getElementById("start_modal");
    endModal = document.getElementById("end_modal");

    // Starting first slide
    slideIndex = 37;
    showSlides(slideIndex);

    // start presentation
    $('#start-button').click(function() {
      console.log('pressed');
      startModal.style.display = "none";
      slideIndex = 1;
    })

    $('#cancel-button').click(function() {
      console.log('pressed');
      startModal.style.display = "none";
      slideIndex = 0;
    })

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n <= 0) {
        slideIndex = 0;
        startModal.style.display = "block";
      }
      if (n > slides.length) {
        slideIndex = slides.length;
        endModal.style.display = "block";
      }
      if (n < 1) {
        slideIndex = 1
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dot", "")
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active-dot";
    }
  </script>
@endsection
