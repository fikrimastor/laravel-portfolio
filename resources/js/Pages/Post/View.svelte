<script>
	import BreezeAuthenticatedLayout from "@/Layouts/Public.svelte";
  import BlogPost from '@/Pages/Post/Partials/BlogPost.svelte';
  import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
	export let post, previousUrl;
</script>

<svelte:head>
	<title>{ post.title }</title>
</svelte:head>

<BreezeAuthenticatedLayout>
	<div class="py-12">
		<div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
      <BlogPost class="max-w-xl" previousUrl="{ previousUrl }" post="{ post }" />
		</div>
	</div>

  <FloatingMenuBar/>
</BreezeAuthenticatedLayout>
