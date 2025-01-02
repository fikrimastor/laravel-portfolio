<script>

  export let classes = "", post;

  $: {
    console.log(post.content);
  }
</script>

<style>
  section :global {
    a { color: dodgerblue }
    img { width: 100% }
    p { margin: 1em 0 }
  }
</style>

<section class=space-y-6 {classes}>
  <header>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
      { post.post_title }
    </h2>
  </header>

  <div class="p-6 text-lg font-medium text-gray-900 dark:text-gray-100">
    <!--{@html post.content }-->
    {@html '<div>'}{@html post.content}{@html '</div>'}
  </div>
</section>
