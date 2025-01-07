<script>
	import BreezeAuthenticatedLayout from "@/Layouts/Public.svelte";
  import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
  import { Link } from '@inertiajs/svelte';
  import Pagination from '@/Components/Pagination.svelte';
	export let title, posts;
  const route = window.route;
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
              <li class="dark:text-white mb-2 list-disc">
                <Link class="hover:underline hover:text-blue-500" href="{ route('blog.view', post) }">
                  { post.title }
                </Link>
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
