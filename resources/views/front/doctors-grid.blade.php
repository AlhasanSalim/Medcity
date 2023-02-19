@include('front.header')

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h1 class="pagetitle__heading">Providing Care for The Sickest In Community. </h1>
            <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative solutions,
              specializing in medical services for treatment of medical infrastructure.
            </p>
            <a href="appointment.html" class="btn btn__primary btn__rounded">
              <span>Make Appointment</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Team layout 3
    ========================== -->
    <section class="team-layout3 pb-40">
      <div class="container">
        <div class="row">
          <!-- Member #1 -->

            @foreach ($doctors as $doctor)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="member">
                        <div class="member__img">
                            <img src="assets/images/team/1.jpg" alt="member img">
                        </div><!-- /.member-img -->
                        <div class="member__info">
                            <h5 class="member__name"><a href="{{route('doctors-view.show', $doctor->id)}}">{{$doctor->name}}</a></h5>
                            <p class="member__job">{{$doctor->speciality}} Specialist</p>
                            <p class="member__desc">{{substr($doctor->biograph, 30, 470)}} ...</p>
                            <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                <a href="{{route('doctors-view.show', $doctor->id)}}" class="btn btn__secondary btn__link btn__rounded">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.member-info -->
                    </div><!-- /.member -->
                </div><!-- /.col-lg-4 -->
            @endforeach


        </div> <!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 3  -->

@include('front.footer')
