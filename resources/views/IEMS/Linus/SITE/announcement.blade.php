@extends('IEMS\Linus.SITE.home')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;"
        data-scroll-section>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 text-center ">
                    <h1 class=" text-white display-2 subheader">Announcements</h1>
                    <h1 class="lead">See all the announcements in the college</h1>
                </div>
            </div>
        </div>


    </section>


    <section class="section section-lg line-bottom-light" data-scroll-section>
        <div class="container mt-n10 mt-lg-n12 z-2">
            <div class="row">

                {{-- Other Announcement up to 6 --}}
                @foreach ($announcement as $item)
                    <div class="col-12 col-md-6 col-lg-4  mb-lg-5">
                        <div class="card shadow bg-white border-gray-300 p-4 rounded">
                            <img src="{{ asset($item->anno_pic) }}" class="card-img-top rounded" alt="Image Cap">
                            {{-- Image --}}
                            <div class="card-body p-0 pt-4">

                                <h2 class="subheader"> {{ $item->anno_title }}</h2> {{-- Title --}}

                                <div class="d-flex align-items-center my-3">
                                    <h3 class="h6 small ms-2 mb-0">{{ $item->anno_author }}</h3>{{-- Author --}}
                                    <span class="h6 text-muted small fw-normal mb-0 ms-auto">{{ $item->anno_date }}</span>
                                    {{-- Date Created --}}
                                </div>

                                <div class="col-12">
                                    <p style="color: transparent"> Filler Text </p>
                                </div>

                                <p><a class="btn btn-lg btn-info text-white"
                                        href="{{ route('accessAnnouncementDisplay', $item->anno_ID) }}"
                                        style="background-color: #1DA2d8">Read Announcement</a></p> {{-- DisplayAnnouncement --}}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Pagination
                    <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination btn-info">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
