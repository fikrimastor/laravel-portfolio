<script>
import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
import { Link } from '@inertiajs/svelte';
import BreezeAuthenticatedLayout from '@/Layouts/Public.svelte';
import Pagination from '@/Components/Pagination.svelte';
export let experiences = [], title = 'Experience List';
</script>

<svelte:head>
  <title>{ title }</title>
</svelte:head>

<BreezeAuthenticatedLayout>
  <div class="py-12">
<!--    <div class="mx-auto max-w-7xl space-y-6 px-6 lg:px-8">-->
<!--      <section class="space-y-6 p-4 sm:p-8">-->
<!--        <header>-->
<!--          <h1 class="text-2xl font-sans font-extrabold text-gray-900 dark:text-white">-->
<!--            Post List-->
<!--          </h1>-->
<!--        </header>-->

<!--        <div class="p-6 text-lg font-normal text-gray-900 dark:text-gray-100">-->
<!--          <ol type="1">-->
<!--            {#each posts.data as post, i}-->
<!--              <li class="dark:text-white mb-2 list-disc">-->
<!--                <Link class="hover:underline hover:text-blue-500" href="{ post.view_url }">-->
<!--                  { post.title }-->
<!--                </Link>-->
<!--              </li>-->
<!--            {/each}-->
<!--          </ol>-->
<!--        </div>-->

<!--        <Pagination links={posts.links} />-->
<!--      </section>-->
<!--    </div>-->

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white p-6">

          <!--        <a href="{{ route('companies.create') }}"-->
          <!--          class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">-->
          <!--          Create-->
          <!--        </a>-->

          <div class="min-w-full align-middle">
            <table class="min-w-full border divide-y divide-gray-200">
              <thead>
              <tr>
                <th class="bg-gray-50 px-6 py-3 text-left">
                  <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Name</span>
                </th>
                <th class="w-56 bg-gray-50 px-6 py-3 text-left">
                </th>
              </tr>
              </thead>

              <tbody class="bg-white divide-y divide-gray-200 divide-solid">
              {#each experiences as experience, i}
                <tr class="bg-white">
                  <Link class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap hover:text-blue hover:underline" href="{ route('experience.edit', experience) }">
                    { experience.entity_name }
                  </Link>
                  <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    <Link href="{ route('experience.edit', experience) }"
                    class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                      Edit
                    </Link>
<!--                    <form action="{ route('experience.edit', experience) }" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">-->
<!--                      &lt;!&ndash;                    @csrf&ndash;&gt;-->
<!--                      &lt;!&ndash;                    @method('DELETE')&ndash;&gt;-->
<!--                      &lt;!&ndash;                    <x-danger-button>&ndash;&gt;-->
<!--                      &lt;!&ndash;                      Delete&ndash;&gt;-->
<!--                      &lt;!&ndash;                    </x-danger-button>&ndash;&gt;-->
<!--                    </form>-->
                  </td>
                </tr>
              {/each}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <FloatingMenuBar/>
</BreezeAuthenticatedLayout>