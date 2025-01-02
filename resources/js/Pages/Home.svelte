<script>
  import MainLayout from "@/Layouts/Public.svelte";
</script>

<svelte:head>
  <title>Home</title>
</svelte:head>
<MainLayout>

  <section id="hero">
    <div class="mx-auto w-full max-w-2xl space-y-8 mt-5">
      <div class="flex justify-between gap-2">
        <div class="flex flex-1 flex-col space-y-1.5">
          <div class="flex row-auto">
            <span class="inline-block text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none dark:text-white" style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">
              Hi, I'm Fikri 👋
            </span>
          </div>
          <div class="flex">
            <span class="inline-block max-w-[600px] md:text-xl dark:text-white" style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">
              A passionate backend developer from Malaysia. I love to build things.
            </span>
          </div>
        </div>

        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <span class="relative flex shrink-0 overflow-hidden rounded-full size-28 border">
            <img class="aspect-square h-full w-full" alt="Fikri Mastor" src="https://avatars.githubusercontent.com/u/18373448?s=400&u=a59dc2346cf91fa4dbdee6c335aebeae72a5b943&v=4">
          </span>
        </div>
      </div>
    </div>
  </section>
</MainLayout>