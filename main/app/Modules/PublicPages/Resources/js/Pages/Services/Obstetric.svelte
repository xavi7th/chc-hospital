<script>
  import Layout from "@p-shared/PublicPagesLayout.svelte";
  import ServiceSidebar from "@p-shared/Partials/Sidebar";

  let uploadCV = () => {};
</script>

<Layout title="Obstetrics">

  <section id="single_Service" class="sec-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-3">
          <div class="service_sideber">

            <ServiceSidebar page="entServ" />

          </div>
        </div>

				<div class="col-lg-9 col-md-9">
					<div class="tab-content">
						<div class="service_mainconetent tab-pane fade in active" id="invisalign">

							<div class="about_box">
								<img src="/img/resources/gynae.jpg"  alt="" />
								<h2>Obstetric And Gynaecology</h2>
								<p>Capitol Hill Clinic/Hospital's obstetricians/gynecologists Clinic provide a broad range of basic and specialized medical and surgical services, ranging from primary gynecologic health care - health maintenance examinations, diagnosis and treatment of minor disorders of the female reproductive system - to advanced techniques in diagnosing and treating infertility problems and treating malignancies of the female genital tract.</p>
							</div>
							<hr />

							<div class="about_promo_box">
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<div class="pormo_box_img">
											<img src="/img/resources/radio2.jpg" alt="" />
										</div>
									</div>

									<div class="col-lg-7 col-md-7">
										<div class="col-lg-12 col-md-12">
											<div class="pormo_box_details">
												<p>Capitol Hill Clinic/Hospital's Obstetrics and Gynecology provides consultation, treatment planning and inpatient and out patient care for a comprehensive range of general and specialty obstetrics and gynecology services for all stages of a woman’s life. We provide pre-pregnancy and pregnancy care for all women ranging from pentering pregnancy with a midwife through high risk pregnancies including assisted reproductive technologies. </p>

												<p>We provide gynecologic services that include a range from well woman visits through gynecologic oncology including fibroids, infertility care, menopause, PMS, polycystic ovary syndrome (PCOS), urogynaecology</p>
											</div>
										</div>
									</div>
								</div>


						</div>
						<br>
						<p> and pelvic reconstruction surgery, and vulva vaginal diseases. Our nationally acclaimed faculty sees patients in both clinics and as private patients. Our General obstetrical care is available for both normal and high-risk pregnancies. Prenatal diagnosis of fetal disorders, including chorionic villi sampling (CVS) and genetic amniocentesis, are available also. Our obstetricians/gynaecologists Clinic not only offers expert patient services, it also includes leaders in basic science, clinical, and population-based research. In addition, the Department is engaged in training the next generation of clinicians and scientists through medical student education and our highly regarded residency and fellowship programs.</p>

					</div>
				</div>
      </div>
    </div>
  </section>

</Layout>
