<script>
	import BreezeAuthenticatedLayout from "@/Layouts/Public.svelte";
  import BlogPost from '@/Pages/Post/Partials/BlogPost.svelte';
  import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
	export let title, post;
</script>

<svelte:head>
	<title>{ title }</title>
</svelte:head>

<BreezeAuthenticatedLayout>
	<div class="py-12">
		<div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
      <BlogPost class="max-w-xl" post="{post}" />
		</div>
	</div>

  <FloatingMenuBar/>
</BreezeAuthenticatedLayout>
