<script>
  import { page } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  $: ({ app } = $page.props);

  let makeAppointment = () => {
    // Send the appointment details to info
  };
</script>

<Layout title="Book an Appointment">

  <section class="sec-padding contact-content appointment-content" id="form">
    <div class="container">
      <img src="/img/resources/appointment.jpg" alt="{app.name} doctor" />
      <div class="title-box">
        <span>It’s easy and fast</span>
        <h3>Make an Appointment</h3>
        <p>
          To see any of our board-certified doctors, nurses or our consultants,
          you can book an appointment by filling out and submitting the inquiry
          form below. We will get back to you immediately
        </p>
      </div>
      <form
        on:submit|preventDefault={makeAppointment}
        id="appointment-page-form"
        class="contact-form row">
        <div class="col-md-7">
          <div class="row">

            <div class="col-md-6">
              <input type="text" required name="name" placeholder="Full Name" />
              <input
                type="text"
                required
                placeholder="Select Appointment Date"
                name="date"
                class="date-picker" />
              <input
                type="text"
                required
                name="phone"
                placeholder="Phone Number" />
            </div>
            <div class="col-md-6">
              <input
                type="text"
                required
                name="email"
                placeholder="Email Address" />
              <input
                type="text"
                required
                name="service"
                placeholder="Service (e.g Dialysis)" />
              <select class="select-input" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>

        </div>
        <div class="col-md-5">
          <textarea
            name="message"
            required
            placeholder="Message"
            cols="30"
            rows="10" />
        </div>
        <div class="col-md-12">
          <button type="submit" name="bookAppointment">Book Now</button>
        </div>
      </form>
    </div>
  </section>
</Layout>
