<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import LatestNews from "@p-shared/Partials/LatestNews";
  import ReachUs from "@p-pages/Team/ReachUs";
  import TeamMembers from "@p-pages/Team/TeamMembersHighlight";

  import route from "ziggy";
  $: ({ app } = $page);
</script>

<Layout title="Our Team">

  <TeamMembers />

  <ReachUs {app} />

  <LatestNews />

</Layout>
