<script>
	import BreezeAuthenticatedLayout from "@/Layouts/Public.svelte";
  import BlogPost from '@/Pages/Post/Partials/BlogPost.svelte';
  import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
  import { Link, page } from '@inertiajs/svelte';
  import Pagination from '@/Components/Pagination.svelte';
	export let title, posts;
  // $: posts = $page.posts;
  // $: list = $page.posts.links;
  // $: list = $page.list?.links;
  console.log(posts.data, posts.links);
</script>

<svelte:head>
	<title>{ title }</title>
</svelte:head>

<BreezeAuthenticatedLayout>
	<div class="py-12">
		<div class="mx-auto max-w-7xl space-y-6 px-6 lg:px-8">
      <section class="space-y-6 p-4 sm:p-8">
        <header>
          <h1 class="text-2xl font-sans font-extrabold text-gray-900 dark:text-white">
            Post List
          </h1>
        </header>

        <div class="p-6 text-lg font-normal text-gray-900 dark:text-gray-100">
          <ol type="1">
            {#each posts.data as post, i}
              <li class="flex dark:text-white mb-2 space-x-1 items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.2 6H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11.2a1 1 0 0 0 .747-.334l4.46-5a1 1 0 0 0 0-1.332l-4.46-5A1 1 0 0 0 15.2 6Z"/>
                </svg>

                <Link class="hover:underline hover:text-blue-500" href="{ route('blog.view', { post: post.ID }) }">{ post.title }</Link>
              </li>
            {/each}
          </ol>
        </div>

        <Pagination links={posts.links} />
      </section>
		</div>
	</div>

  <FloatingMenuBar/>
</BreezeAuthenticatedLayout>
