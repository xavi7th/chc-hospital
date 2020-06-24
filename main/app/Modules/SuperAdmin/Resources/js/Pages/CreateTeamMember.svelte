<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import { onMount } from "svelte";
  import route from "ziggy";

  $: ({ app, flash, errors } = $page);

  let details = {},
    pageLoaded = false;

  let attachFile = e => {
    details.profile_photo = e.target.files[0];
  };

  let createTeamMemberProfile = () => {
    if (jQuery(".summernote").summernote("isEmpty")) {
      ToastLarge.fire({
        title: "Error",
        html: "Every team member's profile needs a <b>description</b>.",
        icon: "warning"
      });
    } else {
      details.job_description = jQuery(".summernote").summernote("code");
      BlockToast.fire({
        title: "Please wait!",
        text: `Creating ${details.name}'s profile...`
      });

      let formData = new FormData();

      _.forEach(details, (val, key) => {
        formData.append(key, val);
      });

      Inertia.post(route("superadmin.create_team_member"), formData, {
        headers: {
          "Content-Type": "multipart/form-data"
        },
        preserveState: true,
        preserveScroll: false
      }).then(() => {
        details = {};

        if (flash.success) {
          ToastLarge.fire({
            title: "Success",
            html: flash.success,
            icon: "success"
          });
        } else {
          swal.close();
        }
      });
    }
  };

  onMount(() => {
    setTimeout(() => {
      jQuery(".summernote").summernote({
        height: 300,
        toolbar: [
          ["style", ["bold", "italic", "underline", "clear"]],
          ["font", ["fontname"]],
          ["fontsize", ["fontsize"]],
          ["color", ["color"]],
          ["para", ["ul", "ol", "paragraph"]],
          ["height", ["height"]],
          ["table", ["table"]],
          ["insert", ["link", "picture"]],
          ["view", ["help"]]
        ]
      });
    }, 2000);

    return jQuery(".summernote").summernote("destroy");
  });
</script>

<Layout title="Create Team Members">
  <div class="content">
    <div class="document">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="fs-18 fw-600 text-center mb-30 text-title">
                Fill the form below to create a new job listing on the website
              </div>
              <form on:submit|preventDefault={createTeamMemberProfile}>
                <FlashMessage isGeneralError={true} />

                <div class="row mb-20">

                  <div class="col-md-6">
                    <div class="form-group" class:has-danger={errors.name}>
                      <label class="form-control-label" for="full-name">
                        Full Name
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.name}
                        bind:value={details.name}
                        id="full-name" />
                      <FlashMessage msg={errors.name} />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group" class:has-danger={errors.job_title}>
                      <label class="form-control-label" for="job-title">
                        Job Title
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.job_title}
                        bind:value={details.job_title}
                        id="job-title" />
                      <FlashMessage msg={errors.job_title} />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group" class:has-danger={errors.phone}>
                      <label class="form-control-label" for="phone">
                        Phone Number
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.phone}
                        bind:value={details.phone}
                        id="phone" />
                      <FlashMessage msg={errors.phone} />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group" class:has-danger={errors.email}>
                      <label class="form-control-label" for="email">
                        Email Address
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        class:form-control-danger={errors.email}
                        bind:value={details.email}
                        id="email" />
                      <FlashMessage msg={errors.email} />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div
                      class="form-group"
                      class:has-danger={errors.profile_photo}>
                      <label class="form-control-label" for="profile-picture">
                        Profile Picture
                      </label>
                      <input
                        type="file"
                        class="form-control"
                        class:form-control-danger={errors.profile_photo}
                        on:change={attachFile}
                        id="profile-picture" />
                      <FlashMessage msg={errors.profile_photo} />
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="summernote" />
                    <FlashMessage msg={errors.job_description} />
                  </div>

                </div>

                <div class="form-group flex j-c-center mt-30">
                  <button class="btn btn-primary btn-shadow btn-round">
                    Create Profile
                  </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
