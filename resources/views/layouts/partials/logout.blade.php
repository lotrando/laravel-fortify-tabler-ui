{{-- Logout Modal --}}
<div class="modal fade" id="logout-modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-status bg-danger"></div>
      <div class="modal-body py-4 text-center">
        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
        <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
             fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 9v2m0 4v.01" />
          <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
        </svg>
        <h3>Are you sure?</h3>
        <div class="text-muted">Do you really want to logout ?</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                Cancel
              </a></div>
            <div class="col"><a class="btn btn-danger w-100" data-bs-dismiss="modal" href="#">
                Logout
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
