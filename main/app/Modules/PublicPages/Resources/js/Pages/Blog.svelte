<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  $: ({ app } = $page.props);

  let uploadCV = () => {};
</script>

<Layout title="Latest Articles">

  <section class="blog-home sec-padding blog-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8 pull-left">
          <!-- start blog post -->
          <div class="single-blog-post">
            <div class="img-box">
              <a href="URL">
                <div
                  style="width: 100%; height: 400px; background-image:
                  url(IMGURL); background-color: green; background-repeat:
                  no-repeat; background-size: cover;" />
              </a>

            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>DAY DATE</b>
                    MONTH DATE
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="URL">
                  <h3>TITLE</h3>
                </a>
                <p>Partial description...</p>
                <a href="URL" class="thm-btn">Read More</a>
              </div>
            </div>
          </div>
          <!-- End news post -->

          <!-- <div class="alert alert-info">
					No news have been added
				</div> -->

          <div class="single-blog-post">
            <div class="img-box">
              <img src="/img/blog-page/1.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="news-radiology">
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>28</b>
                    jan
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="news-radiology">
                  <h3>Radiology And Imaging</h3>
                </a>
                <p>
                  Radiology department provides a comprehensive array of
                  diagnostic imaging services for uninterrupted patient
                  diagnosis and care in support of the Capitol Hill
                  Clinic/Hospital commitment to excellence in medical care. The
                  services of Radiologist and Technologist will be available 24
                  hours daily in CHC.
                  <a href="news-radiology">read more</a>
                </p>
              </div>
            </div>
          </div>
          <div class="single-blog-post">
            <div class="img-box">
              <img src="/img/blog-page/2.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="news-ebola">
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>11</b>
                    aug
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="news-ebola">
                  <h3>EBOLA VIRUS</h3>
                </a>
                <p>
                  West Africa was counting the cost of measures to contain the
                  deadly Ebola epidemic on Sunday, August 11, 2014, as
                  unprecedented restrictions caused snarled transport, food
                  shortages and soaring prices. “We are trying to cope,” said
                  Joseph Kelfalah, the mayor of Kenema, an eastern district of
                  Sierra Leone that is under
                  <a href="news-ebola">read more</a>
                </p>
              </div>
            </div>
          </div>
          <div class="single-blog-post">
            <div class="img-box">
              <img src="/img/blog-page/3.jpg" alt="" />
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="news-patient">
                          <i class="fa fa-link" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date">
                    <b>8</b>
                    aug
                  </div>

                </div>
              </div>
              <div class="content">
                <a href="news-patient">
                  <h3>Patients Experience</h3>
                </a>
                <p>
                  New Experience for Patients At {app.name}, we are
                  revolutionizing the patient experience, from redesigning the
                  physical environment and addressing the emotional experience
                  of patients We are called upon to do more than simply be aware
                  of suffering and feel a desire to help;
                  <a href="news-patient">read more</a>
                </p>
              </div>
            </div>
          </div>

          <!-- <ul class="page-navigation">
						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul> -->

        </div>
        <div class="col-md-4 pull-right">
          <div class="side-bar-widget">

            <div class="single-sidebar-widget popular-post">
              <h3 class="title">Latest News</h3>
              <ul>
                <!-- start latest news  -->
                <li>
                  <div class="img-box">
                    <div class="inner-box">
                      <img src="IMGURL" alt="" />
                    </div>
                  </div>
                  <div class="content-box">
                    <a href="URL">
                      <h4>TITLE</h4>
                    </a>
                    <span>DATE</span>
                  </div>
                </li>
                <!-- end atest news -->
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</Layout>
