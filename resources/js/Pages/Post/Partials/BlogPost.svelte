<script>
  import { Link } from '@inertiajs/svelte';
  export let classes = '', post, previousUrl;

  $: {

  }
</script>

<style>
  section :global {
    a {
      color: dodgerblue
    }

    img {
      width: 100%
    }

    p {
      margin: 1em 0
    }

    pre {
      padding: 1em;
      overflow: auto
    }
  }
</style>

<section class="space-y-6 p-4 sm:p-8 {classes}">
  <header>
    <div class:hidden={ previousUrl == null } class="sm-breadcrumbs dark:text-white">
      <span class="sm-breadcrumb-separator">&laquo;</span>
      <Link class="sm-breadcrumb" href="{ previousUrl }">Back</Link>
    </div>
    <h1 class="text-2xl font-sans font-extrabold text-gray-900 dark:text-white">
      { post.title }
    </h1>
  </header>


  <div class="bg-white dark:bg-gray-800 shadow rounded-lg ">
    <div class="p-6 text-lg font-normal text-gray-900 dark:text-gray-100">
      <!--{@html post.content }-->
      {@html '<div>'}{@html post.content}{@html '</div>'}
    </div>
  </div>
</section>
