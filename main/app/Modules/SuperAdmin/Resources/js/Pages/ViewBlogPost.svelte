<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import { Inertia } from "@inertiajs/inertia";
  import Layout from "@s-shared/SuperAdminLayout";
  import FlashMessage from "@p-shared/FlashMessage";
  import route from "ziggy";

  $: ({ app, flash, status } = $page);

  export let blogPost = {};
</script>

<Layout title="View Blog Post">
  <div class="content">

    <div class="row">
      <!-- activity -->
      <div class="col-lg-12 col-md-12">
        <div class="profile-activity">
          <div class="card">
            <div class="activity-item">
              <div class="card-body">
                <div class="flex j-c-between">
                  <h3 class="mb-30 text-uppercase fw-700">{blogPost.title}</h3>
                  <span class="fs-12 text-light">
                    <i class="far fa-clock mr-5" />
                    created {new Date(blogPost.created_at).toDateString()} - {new Date(blogPost.created_at).toLocaleTimeString()}
                  </span>
                </div>
                <div class="flex mb-30">
                  <div
                    class="flex a-i-center j-c-center bg-gray-200 w-80 h-80
                    mr-30">
                    <a href={blogPost.img_url} target="_blank">
                      <img
                        class="img-responsive"
                        src={blogPost.thumb_url}
                        alt="{blogPost.name} thumbnail" />
                    </a>
                  </div>
                  <div>
                    <span class="d-block fw-500">{blogPost.author}</span>
                  </div>
                </div>
                <div class="text-justify">
                  {@html blogPost.content}
                </div>
              </div>
              <div class="card-footer fs-12">
                <!-- <a href="" class="text-warning mr-30">
                    <i class="fas fa-pencil mr-5" />
                    Edit Profile
                  </a> -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Layout>
