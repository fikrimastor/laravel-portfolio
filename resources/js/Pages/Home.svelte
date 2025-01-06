<script>
  import MainLayout from "@/Layouts/Public.svelte";
  import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
  export let profilePhotoUrl, name ;
</script>

<style>
  section :global {
    a { color: dodgerblue }
    img { width: 100% }
    p { margin: 1em 0; color-scheme: dark; }
    svg { color-scheme: dark; }
    pre { padding: 1em; overflow: auto }
  }
</style>

<svelte:head>
  <title>Home</title>
</svelte:head>

<MainLayout>
  <div class="py-12 font-sans antialiased sm:py-24 px-5 mx-auto w-full max-w-2xl space-y-8 mt-5 dark:text-white">

    <section id="hero">
      <div class="flex justify-between gap-2">
        <div class="flex flex-1 flex-col space-y-1.5">
          <div class="flex row-auto">
            <span class="inline-block text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none" style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">
              Hi, I'm Fikri 👋
            </span>
          </div>
          <div class="flex">
            <span class="inline-block max-w-[600px] md:text-xl" style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">
              A passionate backend developer from Malaysia. I love to build things.
            </span>
          </div>
        </div>

        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <span class="relative flex shrink-0 overflow-hidden rounded-full size-28 border">
            <img class="aspect-square h-full w-full" alt="{ name }" src="{ profilePhotoUrl }">
          </span>
        </div>
      </div>
    </section>

    <section id="about">
      <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
        <h2 class="text-xl font-bold">About</h2>
      </div>

      <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
        <div class="prose max-w-full text-pretty font-sans text-md text-muted-foreground dark:prose-invert">
          <p>Creator of <a href="https://brato.app">brato.app</a>, <a href="https://ntzn.my">ntzn.my</a> and others.</p>
          <p>I am Biologist, I used to work at <a href="https://cilibangi.com">Cilibangi</a> as Technology Consultant.</p>
          <p>Problem solving is always my passions.</p>
          <p>Let's connect and grow the tech community in Malaysia!</p>
        </div>
      </div>
    </section>

    <section id="skills">
      <div class="flex min-h-0 flex-col gap-y-3">
        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <h2 class="text-xl font-bold">Skills</h2></div>
        <div class="flex flex-wrap gap-1">
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">PHP</div>
          </div>
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">Laravel</div>
          </div>
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">Livewire</div>
          </div>
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">Alpine Js</div>
          </div>
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">Svelte</div>
          </div>
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">Mysql</div>
          </div>
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary dark:bg-blue-600 text-primary-foreground shadow hover:bg-primary/80">Serverless</div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <FloatingMenuBar/>
</MainLayout>