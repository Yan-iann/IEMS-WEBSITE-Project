<div class="modal fade m-3" id="ModalWildlife{{ $item->info_ID }}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content  bg-light">

            <div class="modal-header border-0 text-center">
                <h5 class="modal-title  text-center">Critter Details</h5>
                <button type="button" class="btn-close bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body ">
                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l ">

                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <img class="imageWildlife" src="{{ asset($item->wildlife_pic) }}" data-mdb-img="{{ asset($item->wildlife_pic) }}">
                    </div>


                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <label for="formGroupExampleInput" class="form-label">Scientific Name</label>
                                <h3 class="detailsView" style="font-style: italic;">
                                    {{ $item->wildlife_scientific_name }}</h5>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-lg-12"><br>
                                <label for="formGroupExampleInput" class="form-label">Common Name</label>
                                <h3 class="detailsView">{{ $item->wildlife_name }}</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="formGroupExampleInput2" class="form-label">Class</label>
                        <h5 class="detailsView">{{ $item->wildlife_class }}</h5>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="formGroupExampleInput2" class="form-label">Order</label>
                        <h5 class="detailsView">{{ $item->wildlife_order }}</h5>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="formGroupExampleInput2" class="form-label">Family</label>
                        <h5 class="detailsView">{{ $item->wildlife_family }}</h5>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="formGroupExampleInput2" class="form-label">Genus</label>
                        <h5 class="detailsView">{{ $item->wildlife_genus }}</h5>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="formGroupExampleInput2" class="form-label">Species</label>
                        <h5 class="detailsView">{{ $item->wildlife_species }}</h5>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="formGroupExampleInput2" class="form-label">Location</label>
                        <h5 class="location">{{ $item->wildlife_location }}</h5>
                    </div>

                    <div class="col-12 col-lg-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <p class="detailsView">{{ $item->wildlife_desc }}</p>
                    </div>
                </div>

            </div>
            <div class="modal-footer border-0">

            </div>
        </div>

    </div>
</div>


{{-- Image Modal --}}
<div class="modal fade" id="Image{{ $item->info_ID }}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content bg-light">

            <div class="modal-header border-0 text-center">
                <h5 class="modal-title  text-center"></h5>
                <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body border-0">
                <div class="container-fluid">
                    <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
                        <p> To view this document, please email us at <a href="mailto:iems@su.edu.ph">iems@su.edu.ph
                            </a> regarding on viewing this document</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalWildlife{{ $item->info_ID }}">Okay</button>
            </div>
        </div>
    </div>
</div>