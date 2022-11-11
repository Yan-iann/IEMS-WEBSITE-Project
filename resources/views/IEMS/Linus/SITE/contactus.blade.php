@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 text-center ">
                    <h1 class=" text-white display-2 subheader">Get in touch today</h1>
                    <h1 class="lead">Still have questions left unanswered? Contact us today and let us help!
                    </h1>
                </div>
            </div>
        </div>

    </section>


    {{-- Courses Table --}}
    <section class="section section-lg line-bottom-light" style="background-color: rgb(242,242,242s">
        <div class="container mt-n10 mt-lg-n12 z-2" style="transform: translateY(-13rem)">
            <div class="row d-flex justify-content-center">

                {{--=--}}
                <div class="col-12 d-flex justify-content-center" style="margin-bottom: 50px">
                    <div class="mapouter ">
                        <div class="gmap_canvas"><iframe class="embed-responsive-item "width="785" height="785" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Silliman%20University%20Marine%20Laboratory&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
s
                        </div>
                    </div>
                </div>


                        <div class="col-lg-12 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center" style="padding-bottom: 20px">

                        <h2 class="mb-4 display-3" style="font-family: 'Poppins', sans-serif; color:#1DA2d8">Send us an email</h2>
                        <div class="line my-3"></div>
                        <p>We'll get back to you as soon as possible
                        </p>

                        <p class="lead">
                            <span class=" fw-bold">Phone:</span> +63 935 420 9002 , +63 935 225 2500
                        </p>
                        <p class="lead">
                            <span class=" fw-bold">Email:</span> iems@su.edu.ph
                        </p>

                    </div>

                    <div class="col-lg-12 ">
                        <form method="post" class="form-group" action="{{ Route('contact-us.store')}}" id="contactUSForm">
                            {{csrf_field()}}
                               <div class="mb-4">
                                   <label class="text-black">Your Name</label>
                                   <input required type="text" class="form-control"  placeholder="Your Name Here" name="name" id="name">
                               </div>

                               <div class="mb-4">
                                   <label class="text-black">Your Email address</label>
                                   <input required type="email" class="form-control" name="email" id="email"aria-describedby="emailHelp"
                                       placeholder="youremail@su.edu.ph">
                                   <small id="emailHelp" class="form-text" style="color: #1DA2d8">We'll never share your email with anyone
                                       else.</small>
                               </div>

                               <div class="mb-4">
                                   <label class="text-black">Subject</label>
                                   <input required type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Enter Subject">
                                </div>

                               <div class="mb-4">
                                   <label class="text-black" >Your Message</label>
                                   <textarea required name="message" id="message"class="form-control" cols="30" rows="5"
                                       placeholder="Enter your message here"></textarea>
                               </div>

                               <div class="d-grid">
                                   <button type="submit" class="btn btn-info">Send message</button>
                               </div>
                           </form>
                    </div>


                </div>
            </div>
        </div>
            </div>
        </div>


    </section>
@endsection
