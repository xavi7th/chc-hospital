<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar.svelte";

  let uploadCV = () => {};
</script>

<Layout title="Diagnostics">

  <section id="single_Service" class="sec-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-3">
          <div class="service_sideber">

            <ServiceSidebar/>

          </div>
        </div>

				<div class="col-lg-9 col-md-9">
					<div class="tab-content">
						<div class="service_mainconetent tab-pane fade in active" id="invisalign">

							<div class="about_box">
								<img src="/img/resources/radio.jpg"  alt="" />
								<h2>Diagnostic Services</h2>
								<p>Capitol Hill Clinic / Hospital undergo Professional Diagnostic Services in every division of its areas of expertise. Our broad range of innovative diagnostic tests and systems play a pivotal role in the groundbreaking area of integrated health care solutions and cover the early detection, targeted screening, evaluation and monitoring of diseases </p>
							</div>
							<hr />

							<div class="about_promo_box">
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<div class="pormo_box_img">
											<img src="/img/resources/diag.jpg" alt="" />
										</div>
									</div>

									<div class="col-lg-7 col-md-7">
										<div class="col-lg-12 col-md-12">
											<div class="pormo_box_details">
												<p>Capitol Hill Clinic/Hospital Laboratory Service / Diagnostic is the largest diagnostic pathology service in Warri, Nigeria. With the responsibility of supporting the national and provincial health departments in the delivery of quality and comprehensive health care. The division provides laboratory and related public health services to over 80% of Warri, population through a national network of laboratories.</p>

												<p>Capitol Hill Clinical Diagnostic division comprises of well certified experts that offer analytic / diagnostic services including body fluid analysis and diagnostic imaging that aid the medical profession,  </p>
											</div>
										</div>
									</div>
								</div>


						</div>
						<br>
						<p> and patients following a referral from health care professionals. Our Diagnostics are very active in all market segments, from scientific research and clinical laboratory systems to patient self-monitoring.</p>

						<p>Capitol Hill Clinic/Hospital Molecular Diagnostics develops and manufactures innovative tests based on the Nobel Prize winning polymerase chain reaction (PCR) technology. PCR technology underlies a new generation of medical diagnostic tests that allow health care providers to select and monitor patient response to therapy or identify molecular characteristics of a disease. Capitol Hill Clinic/Hospital Molecular Diagnostics blood-screening systems also help to ensure the safety of blood and blood products before they are used for medical procedures. </p>

						<p>Capitol Hill Clinic/Hospital Medical Devices and Diagnostics Division produces a broad range of innovative products used primarily by health care professionals in the fields of orthopedics, neuro-vascular, surgery, vision care, diabetes care, infection prevention, diagnostics, cardiovascular disease, sports medicine, and aesthetics.</p>

					</div>
				</div>
      </div>
    </div>
  </section>

</Layout>
