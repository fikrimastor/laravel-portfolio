<script>
  import { Link } from '@inertiajs/svelte';
  import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.svelte';

  export let experiences = [], title = 'Experience List';
</script>

<svelte:head>
  <title>{ title }</title>
</svelte:head>

<BreezeAuthenticatedLayout>

  <h2 class="font-semibold text-xl text-gray-800 leading-tight" slot="header">
    { title }
  </h2>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <Link href="{ route('experience.create') }"
            class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
            Create
          </Link>

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
                  <Link class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap hover:text-blue hover:underline"
                    href="{ route('experience.edit', experience) }">
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
</BreezeAuthenticatedLayout>