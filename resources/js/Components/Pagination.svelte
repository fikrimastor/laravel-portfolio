<script>
  import { Link } from '@inertiajs/svelte';

  export let links = [];
</script>

<section class="justify-items-center">
  <!-- dont render, if there's only 1 page (previous, 1, next) -->
  {#if links && links.length !== 3}
    <div class="mt-6 -mb-1 flex flex-wrap">
      {#each links as { active, label, url } (label)}
        {#if url === null}
          <!-- Previous, if on first page -->
          <!-- Next, if on last page -->
          <!-- and dots, if exists (...) -->
          <div class="mr-1 mb-1 px-4 py-3 text-sm border rounded text-gray dark:text-white {label === 'Next' && 'ml-auto'}">{@html label}</div>
        {:else}
          <Link class="mr-1 mb-1 px-4 py-3 border rounded text-sm dark:hover:text-black hover:bg-white focus:border-indigo-700 focus:text-indigo-700 dark:text-white {active && 'bg-white', label === 'Next' && 'ml-auto'}" href={url}>
            {@html label}
          </Link>
        {/if}
      {/each}
    </div>
  {/if}
</section>