{{-- Infocard Modal --}}
<div class="modal fade m-3" id="ModalThesis{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content bg-light">

            <div class="modal-header border-0 text-center">
                <h5 class="modal-title  text-center">Thesis Paper Details</h5>
                <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">


            <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Thesis Title</label>
              <h2 class="detailsView">{{ $item->thesis_title}}</h2>
            </div>

            <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Author/s</label>
              <p>{{ $item->thesis_author}}</p>
            </div>

                        <div class="col-12">
                            <label for="formGroupExampleInput2" class="form-label">Thesis Reference</label>
                            <p>{{ $item->thesis_reference }}</p>
                        </div>

                        <div class="col-12">
                            <!-- filler -->
                        </div>

                        <div class="col-12">
                            <p class="card-text text-muted fst-italic">{{ $item->date_published }}</p>
                        </div>



                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                    data-bs-target="#Notify{{ $item->info_ID }}">View</button>
            </div>
        </div>
    </div>
</div>


{{-- Notify Modal --}}
<div class="modal fade" id="Notify{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
    <div class="modal-content bg-light">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center"></h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body border-0">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
            <p> To view this document, please email us at <a href="mailto:iems@su.edu.ph">iems@su.edu.ph </a>.</p>
          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalThesis{{$item->info_ID}}">Okay</button>
      </div>
    </div>
  </div>
</div>