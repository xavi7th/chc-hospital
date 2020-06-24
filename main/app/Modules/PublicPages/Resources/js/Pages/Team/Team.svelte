<script>
  import { page, InertiaLink } from "@inertiajs/inertia-svelte";
  import Layout from "@p-shared/PublicPagesLayout";
  import LatestNews from "@p-shared/Partials/LatestNews";
  import ReachUs from "@p-pages/Team/ReachUs";
  import TeamMembers from "@p-pages/Team/TeamMembersHighlight";

  import route from "ziggy";
  $: ({ app, teamMembers } = $page);
</script>

<Layout title="Our Team">

  <TeamMembers {teamMembers} />

  <ReachUs {app} />

  <LatestNews />

</Layout>
