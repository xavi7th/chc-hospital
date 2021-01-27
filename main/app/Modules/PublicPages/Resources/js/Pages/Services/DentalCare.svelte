<script>
    import { page } from "@inertiajs/inertia-svelte";
    import Layout from "@p-shared/PublicPagesLayout";
    import ServiceSidebar from "@p-shared/Partials/Sidebar";
    $: ({ app } = $page.props);
</script>

<Layout title="Dental Services">
    <section id="single_Service" class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="service_sideber">
                        <ServiceSidebar page="dentCare" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-9">
                    <div class="tab-content">
                        <div
                            class="service_mainconetent tab-pane fade in active"
                            id="invisalign">
                            <div class="about_box">
                                <img src="/img/resources/dentist.jpg" alt="" />
                                <h2>Dental Services</h2>
                                <p>
                                    At Capitol Hill Clinic / Hospital, we are
                                    proud to offer comprehensive / quality
                                    dental care and customizable dental plans.
                                    We know that every patient's needs, wants,
                                    lifestyle and budget is different, and that
                                    each patient's dental plan will differ as a
                                    result.
                                </p>
                            </div>
                            <hr />

                            <div class="about_promo_box">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="pormo_box_img">
                                            <img
                                                src="/img/resources/dent.jpg"
                                                alt="" />
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="pormo_box_details">
                                                <p>
                                                    At Capitol Hill Clinic /
                                                    Hospital, we place a strong
                                                    emphasis on preventive
                                                    dental care and maintenance.
                                                    Preventive dental care
                                                    involves identifying
                                                    problems at an early stage
                                                    before potentially invasive
                                                    and costly dental treatment
                                                    is required. Most dental
                                                    problems are avoidable.
                                                    Regular check-up and
                                                    professional cleans (every 6
                                                    months) along with good home
                                                    brushing and flossing
                                                    techniques will prevent
                                                    tooth decay and gum disease.
                                                </p>

                                                <p>
                                                    Initial examination
                                                    appointments at Capitol Hill
                                                    Clinic / Hospital, Ipswich
                                                    involve a thorough charting
                                                    of all teeth and inspection
                                                    of the gums and soft
                                                    tissues. Following the
                                                    examination, our dentists
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>
                                will discuss with you any necessary treatments
                                required and the costs involved. We strongly
                                encourage patients to ask any questions and be
                                directly involved in the treatment planning
                                process.
                            </p>

                            <p>
                                Below is a list of some of the services we
                                provide in our dental Clinic:<br /><strong>Cleanings
                                    • Glaucoma • Gum Disease Treatment •
                                    Tooth-Colored Fillings • Root Canal
                                    Treatment • Wisdom Tooth/Extractions •
                                    Sealants • Children’s Dentistry •
                                    Restoration of Implants • Porcelain Veneers
                                    • Dentures & Partial Dentures (& Repairs)
                                    Mouth guards Whitening • Crowns • bridgework
                                    etc.</strong>
                            </p>

                            <p>
                                In preparing for the future of dental care, our
                                department provides outstanding resident
                                education to train the Dentists of tomorrow,
                                while performing research that will influence
                                the future management of dental disease.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</Layout>
