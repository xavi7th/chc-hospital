<script>
    import { page, InertiaLink } from "@inertiajs/inertia-svelte";
    import Layout from "@p-shared/PublicPagesLayout";
    import ServiceSidebar from "@p-shared/Partials/Sidebar";
    import route from "ziggy";
    $: ({ app } = $page);
</script>

<Layout title="Neurology">
    <section id="single_Service" class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="service_sideber">
                        <ServiceSidebar page="neur" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-9">
                    <div class="tab-content">
                        <div
                            class="service_mainconetent tab-pane fade in active"
                            id="invisalign">
                            <div class="about_box">
                                <img src="/img/resources/neurology.jpg" alt="" />
                                <h2>Neurology Services</h2>
                                <p>
                                    The human nervous system — the brain, spinal
                                    cord and nerves — is an intricate network
                                    that controls all the body’s functions, from
                                    breathing and swallowing to walking and
                                    learning. Problems with this complex system
                                    — such as Parkinson’s disease, stroke,
                                    epilepsy, brain tumors a nd dementia —
                                    require expert diagnosis and treatment by a
                                    team of highly skilled physicians.
                                </p>
                            </div>
                            <hr />

                            <div class="about_promo_box">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="pormo_box_img">
                                            <img
                                                src="/img/resources/neor.jpg"
                                                alt="" />
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="pormo_box_details">
                                                <p>
                                                    Among the other core
                                                    processes in your busy
                                                    medical practice, neurology
                                                    transcription might be
                                                    rather tedious and time
                                                    consuming. You might be
                                                    looking for a reliable
                                                    service provider in this
                                                    field. This is where Capitol
                                                    Hill Clinic / Hospital can
                                                    be of assistance to you.
                                                </p>

                                                <p>
                                                    Capitol Hill Clinic /
                                                    Hospital is a leading
                                                    medical transcription
                                                    company, staffed with a
                                                    highly dedicated and dynamic
                                                    team of medical
                                                    transcriptionists. With our
                                                    vast experience in the area
                                                    of medical transcription, we
                                                    are able to provide quality
                                                    neurology transcription
                                                    service that can meet your
                                                    requirements in a
                                                    cost-effective manner. Our
                                                    transcription costs are 30
                                                    to 40% lower than the market
                                                    rates.Neurology
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>
                                transcription involves difficult terms and
                                procedures. To simplify the process, we make use
                                of the most effective blend of technology and
                                human expertise.
                            </p>

                            <p>
                                Our Team Can Provide Accurate Transcription Of
                                All Neurology Reports Including:<br /><strong>Epilepsy
                                    • Parkinson’s disease and tremor • Multiple
                                    sclerosis • Stroke • Dementia, including
                                    Alzheimer’s disease • Headaches, including
                                    migraines • Headache and facial pain • Gait
                                    and balance disorders • Vertigo and
                                    dizziness • Pediatric neurology •
                                    Neuro-ophthalmology, including vision loss
                                    and diplopia • Normal pressure hydrocephalus</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</Layout>
