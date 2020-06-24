<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app, flash, status } = $page);

  export let teamMembers = [];

  let deleteTeamMemberProfile = teamMember => {
    swalPreconfirm
      .fire({
        confirmButtonText: "Carry on!",
        text: `This will permanently delete ${teamMember.name}'s profile from the site. To get it back you will have to create it again.`,
        preConfirm: () => {
          return Inertia.delete(
            route("superadmin.delete_team_member", teamMember.id)
          );
        }
      })
      .then(val => {
        if (undefined === status) {
          if (val.isDismissed) {
            Toast.fire({
              title: "Canceled",
              icon: "info",
              position: "center"
            });
          } else if (flash.success) {
            ToastLarge.fire({
              title: "Success",
              html: `${teamMember.name}'s profile has been deleted`,
              position: "bottom",
              icon: "success",
              timer: 10000
            });
          }
        }
      });
  };
</script>

<Layout title="Manage Team Members">
  <div class="content">

    <div class="row">
      <!-- activity -->
      <div class="col-lg-12 col-md-12">
        <div class="profile-activity">
          {#each teamMembers as teamMember}
            <div class="card">
              <div class="activity-item">
                <div class="card-body">
                  <div class="flex j-c-between">
                    <h5 class="mb-30 text-uppercase fw-700">
                      {teamMember.name}
                    </h5>
                    <span class="fs-12 text-light">
                      <i class="far fa-clock mr-5" />
                      created {new Date(teamMember.created_at).toDateString()}
                    </span>
                  </div>
                  <div class="flex mb-30">
                    <div
                      class="flex a-i-center j-c-center bg-gray-200 w-80 h-80
                      mr-30">
                      <a href={teamMember.img_url} target="_blank">
                        <img
                          class="img-responsive"
                          src={teamMember.thumb_url}
                          alt="{teamMember.name} thumbnail" />
                      </a>
                    </div>
                    <div>
                      <span class="d-block fw-500">{teamMember.job_title}</span>
                      <span class="d-block fs-12 text-light">
                        {teamMember.phone}
                      </span>
                      <span class="d-block fs-12 text-light">
                        {teamMember.email}
                      </span>
                    </div>
                  </div>
                  <div class="text-justify">
                    {@html teamMember.job_description}
                  </div>
                </div>
                <div class="card-footer fs-12">
                  <a
                    href=""
                    class="text-danger mr-30"
                    on:click|preventDefault={deleteTeamMemberProfile(teamMember)}>
                    <i class="fas fa-user-times mr-5" />
                    Delete Profile
                  </a>
                  <!-- <a href="" class="text-warning mr-30">
                    <i class="fas fa-pencil mr-5" />
                    Edit Profile
                  </a> -->

                </div>
              </div>
            </div>
          {:else}
            <div class="card">
              <div class="activity-item">
                <div class="card-body">
                  <div class="flex">
                    <div
                      class="flex a-i-center j-c-center bg-gray-200 w-80 h-80
                      mr-30">
                      <i class="fas fa-briefcase fs-24" />
                    </div>
                    <h3 class="flex a-i-center fw-500">
                      No Team Profile Listed
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          {/each}

          <!-- card -->
          <div class="card">
            <div class="activity-item">
              <div class="card-body">
                <div class="flex j-c-between">
                  <h5 class="mb-30 text-uppercase fw-700">Education</h5>
                  <span class="fs-12 text-light">
                    <i class="far fa-clock mr-5" />
                    7 h
                  </span>
                </div>
                <div class="flex">
                  <div
                    class="flex a-i-center j-c-center bg-gray-200 w-80 h-80
                    mr-30">
                    <i class="fas fa-school fs-24" />
                  </div>
                  <div>
                    <span class="d-block fw-500">
                      Computer Science Department
                    </span>
                    <span class="d-block fs-12 text-light">
                      University of Oxford
                    </span>
                    <span class="d-block fs-12 text-light">2016 - 2020</span>
                  </div>
                </div>
              </div>
              <div class="card-footer fs-12">
                <a href="" class="text-light mr-30">
                  <i class="far fa-heart mr-5" />
                  Like
                </a>
                <a href="" class="text-light mr-30">
                  <i class="fas fa-comment mr-5" />
                  Comments
                </a>
                <a href="" class="text-light">
                  <i class="fas fa-share mr-5" />
                  Share
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</Layout>
