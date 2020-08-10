<script>
    import { InertiaLink } from "@inertiajs/inertia-svelte";
    import route from "ziggy";
    export let appName;
</script>

<!-- <section class="footer-call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Subscribe For Our News Letter</h3>
        <p>
          Get updates on latest health news, new services, offers and lots more!
        </p>

      </div>
      <div class="col-md-6">
        <form id="subscribe-form" action="include/subscribe.php">
          <span class="subscribe-response" />
          <input
            type="text"
            name="email"
            id="subscribe-email"
            required
            class="form-control"
            placeholder="Email Address" />
          <button type="submit" class="thm-btn inverse pull-right">
            Subscribe Now
          </button>
        </form>
      </div>
    </div>
  </div>
</section> -->

<footer class="footer sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h3 class="title">About Us</h3>
                    <p>
                        Capitol Hill Clinic/Hospital is a multi-functional
                        hospital, Situated at Ranyo’s Place, Warri, Nigeria. Our
                        Medical Center is an all purpose general specialist
                        practice enclave with non partnership group practice
                        encompassing surgery, obstetrics etc.
                    </p>
                    <br />
                    <InertiaLink
                        href={route('app.contact_us')}
                        class="thm-btn inverse">
                        Read More
                    </InertiaLink>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="footer-widget quick-links">
                    <h3 class="title">Services</h3>
                    <ul>
                        <li>
                            <a href="general-medicine">General Medicine</a>
                        </li>
                        <li>
                            <a href="surgery">Surgery</a>
                        </li>
                        <li>
                            <a href="neurology">Neurology</a>
                        </li>
                        <li>
                            <a href="dialysis">Dialysis</a>
                        </li>
                        <li>
                            <a href="paediatrics">Paediatrics</a>
                        </li>
                        <li>
                            <a href="radiological-services">Radiology</a>
                        </li>
                        <li>
                            <a href="dental-services">Dentistry</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 latest-post col-sm-6">
                <div class="footer-widget latest-post">
                    <h3 class="title">Latest News</h3>
                    <ul>
                        <li>
                            <span class="border" />
                            <div class="content">
                                <a href="news-radiology">
                                    Radiology and Imaging
                                </a>
                                <span>January 28, 2016</span>
                            </div>
                        </li>
                        <li>
                            <span class="border" />
                            <div class="content">
                                <a href="news-ebola">Ebola Virus</a>
                                <span>August 11, 2016</span>
                            </div>
                        </li>
                        <li>
                            <span class="border" />
                            <div class="content">
                                <a href="news-patient">patients Experience</a>
                                <span>August 8, 2016</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h3 class="title">Contact</h3>
                    <ul class="contact">
                        <li>
                            <i class="fa fa-map-marker" />
                            <span>
                                Ranyo’s Place, 2, Omamofe Sillo
                                Street,Warri,Delta State.
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-phone" />
                            <span>+234 803 7162448, +234 802 8360918</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" />
                            <span>info@capitolhillhospitals.com.ng</span>
                        </li>
                    </ul>
                    <ul class="social">
                        <li>
                            <a
                                href="https://www.facebook.com.ng/pages/Capitol-Hill-Hospital/344449072366549"
                                target="_blank">
                                <i class="fa fa-facebook" />
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://twitter.com.ng/capitol_Hill2"
                                target="_blank">
                                <i class="fa fa-twitter" />
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://plus.google.com.ng/u/0/b/109035227895760462704/109035227895760462704/posts"
                                target="_blank">
                                <i class="fa fa-google-plus" />
                            </a>
                        </li>
                        <li>
                            <a
                                href="http://www.youtube.com.ng/channel/UCidMyXK2rTe6nkLisfv5CdA?guided_help_flow=3&ytsession=ZVBQQ8S5eSbiv6SNQSpla_On5xnP0T1iijsqTgWT83ocEjYhA3xojBOYQraqLaJQu1BZURSsg9QzLZajIHNWuwQ6ticKhnfTfkxVXWz72GxETalvc8ZAIozmVYYOqMsPcaOOc7SUr8c122_90elbK8RZoMBfDCkX7b6xZsoPrFKSge35PpLt4hYxeyTMJ1SuznOLA3kuFC5aOv0v1hgyktaiZ-j-J9grYEPGZNNHHz_GsvD2ZESGVtlEZet3XPZHP-tbJhoAU9evevpr-c8kofHYXaEUavoPVuetnAB5F_0"
                                target="_blank">
                                <i class="fa fa-youtube" />
                            </a>
                        </li>
                    </ul>
                    <br />
                    <a href="contact" class="thm-btn inverse">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="footer-bottom">
    <div class="container text-center">
        <p>
            Copyright {new Date().getFullYear()} {appName}. All Rights Reserved
        </p>
        <p>
            Developed By
            <a href="tel:+2348034411661" target="_blank">
                Minds &amp; Machines
            </a>
        </p>
    </div>
</section>
