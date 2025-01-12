<script>
  import MainLayout from '@/Layouts/Public.svelte';
  import FloatingMenuBar from '@/Components/FloatingMenuBar.svelte';
  import { page } from '@inertiajs/svelte';

  export let profilePhotoUrl, name;
  export let experiences = $page.props.profile.experiences;
  console.log(experiences);
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
      margin: 1em 0;
      color-scheme: dark;
    }

    svg {
      color-scheme: dark;
    }

    pre {
      padding: 1em;
      overflow: auto
    }
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
            <span class="inline-block text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none"
              style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">
              Hi, I'm Fikri 👋
            </span>
          </div>
          <div class="flex">
            <span class="inline-block max-w-[600px] md:text-xl"
              style="opacity: 1; filter: blur(0px); transform: translateY(-8px) translateZ(0px);">
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
          <p>I am Biologist, I used to work at <a href="https://cilibangi.com">Cilibangi</a> as Technology Consultant.
          </p>
          <p>Problem solving is always my passions.</p>
          <p>Let's connect and grow the tech community in Malaysia!</p>
        </div>
      </div>
    </section>

    <section id="experience">
      <div class="flex min-h-0 flex-col gap-y-3">
        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <h2 class="text-xl font-bold">Work Experience</h2>
        </div>
        {#each experiences as experience, i}
          <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
            <a class="block cursor-pointer" href="{ experience.entity_website_url }">
              <div class="rounded-lg bg-card text-card-foreground flex">
                <div class="flex-none">
                  <span class="relative flex shrink-0 overflow-hidden rounded-full bg-muted-background m-auto size-12 border dark:bg-foreground">
                    <img
                      class="aspect-square h-full w-full object-contain"
                      alt="SEEK"
                      src="{ experience.entity_logo_url }">
                  </span>
                </div>
                <div class="group ml-4 grow flex-col items-center">
                  <div class="flex flex-col">
                    <div class="flex items-center justify-between gap-x-2 text-base">
                      <h3 class="inline-flex items-center justify-center text-xs font-semibold leading-none sm:text-sm">{ experience.entity_name }<span
                        class="inline-flex gap-x-1"></span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-right size-4 translate-x-0 transform opacity-0 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:opacity-100 rotate-0">
                          <path d="m9 18 6-6-6-6"></path>
                        </svg>
                      </h3>
<!--                      <div class="text-right text-xs tabular-nums text-muted-foreground sm:text-sm">Aug 2023 - Current</div>-->
                      <div class="text-right text-xs tabular-nums text-muted-foreground sm:text-sm">{ experience.service_duration }</div>
                    </div>
                    <div class="font-sans text-xs">{ experience.role }</div>
                  </div>
                  <div class="mt-2 text-xs sm:text-sm" style="opacity:0;height:0px">
                    { experience.responsibility }
                  </div>
                </div>
              </div>
            </a>
          </div>
        {/each}

        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <a class="block cursor-pointer" href="https://www.farcapital.com.my/">
            <div class="rounded-lg bg-card text-card-foreground flex">
              <div class="flex-none">
                <span class="relative flex shrink-0 overflow-hidden rounded-full bg-muted-background m-auto size-12 border dark:bg-foreground"><img
                  class="aspect-square h-full w-full object-contain"
                  alt="SEEK"
                  src="/seek.png"></span></div>
              <div class="group ml-4 grow flex-col items-center">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-x-2 text-base">
                    <h3 class="inline-flex items-center justify-center text-xs font-semibold leading-none sm:text-sm">SEEK<span
                      class="inline-flex gap-x-1"></span>
                      <svg xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-chevron-right size-4 translate-x-0 transform opacity-0 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:opacity-100 rotate-0">
                        <path d="m9 18 6-6-6-6"></path>
                      </svg>
                    </h3>
                    <div class="text-right text-xs tabular-nums text-muted-foreground sm:text-sm">Aug 2023 - Current</div>
                  </div>
                  <div class="font-sans text-xs">Software Engineer</div>
                </div>
                <div class="mt-2 text-xs sm:text-sm"
                  style="opacity:0;height:0px">Develop and maintain Jira and Confluence plugins.
                </div>
              </div>
            </div>
          </a>
        </div>
        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <a class="block cursor-pointer" href="https://www.servicerocket.com/">
            <div class="rounded-lg bg-card text-card-foreground flex">
              <div class="flex-none">
                <span class="relative flex shrink-0 overflow-hidden rounded-full bg-muted-background m-auto size-12 border dark:bg-foreground"><img
                  class="aspect-square h-full w-full object-contain"
                  alt="ServiceRocket"
                  src="/servicerocket_logo.jpeg"></span></div>
              <div class="group ml-4 grow flex-col items-center">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-x-2 text-base">
                    <h3 class="inline-flex items-center justify-center text-xs font-semibold leading-none sm:text-sm">ServiceRocket<span
                      class="inline-flex gap-x-1"></span>
                      <svg xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-chevron-right size-4 translate-x-0 transform opacity-0 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:opacity-100 rotate-0">
                        <path d="m9 18 6-6-6-6"></path>
                      </svg>
                    </h3>
                    <div class="text-right text-xs tabular-nums text-muted-foreground sm:text-sm">Oct 2022 - Aug 2023</div>
                  </div>
                  <div class="font-sans text-xs">Software Engineer</div>
                </div>
                <div class="mt-2 text-xs sm:text-sm"
                  style="opacity:0;height:0px">Develop and maintain Jira and Confluence plugins.
                </div>
              </div>
            </div>
          </a></div>
        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <a class="block cursor-pointer" href="https://aws.amazon.com/">
            <div class="rounded-lg bg-card text-card-foreground flex">
              <div class="flex-none">
                <span class="relative flex shrink-0 overflow-hidden rounded-full bg-muted-background m-auto size-12 border dark:bg-foreground"><img
                  class="aspect-square h-full w-full object-contain"
                  alt="AWS"
                  src="/aws.webp"></span></div>
              <div class="group ml-4 grow flex-col items-center">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-x-2 text-base">
                    <h3 class="inline-flex items-center justify-center text-xs font-semibold leading-none sm:text-sm">AWS<span
                      class="inline-flex gap-x-1"></span>
                      <svg xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-chevron-right size-4 translate-x-0 transform opacity-0 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:opacity-100 rotate-0">
                        <path d="m9 18 6-6-6-6"></path>
                      </svg>
                    </h3>
                    <div class="text-right text-xs tabular-nums text-muted-foreground sm:text-sm">May 2021 - Oct 2022</div>
                  </div>
                  <div class="font-sans text-xs">Solutions Architect</div>
                </div>
                <div class="mt-2 text-xs sm:text-sm"
                  style="opacity:0;height:0px">Worked with customers to provide technical solutions to their business problems. Helped customers architect, deploy, and optimize their workloads on AWS.
                </div>
              </div>
            </div>
          </a></div>
      </div>
    </section>

    <section id="education">
      <div class="flex min-h-0 flex-col gap-y-3">
        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <h2 class="text-xl font-bold">Education</h2></div>
        <div style="opacity: 1; filter: blur(0px); transform: translateY(-6px) translateZ(0px);">
          <a class="block cursor-pointer" href="https://www.uniten.edu.my/">
            <div class="rounded-lg bg-card text-card-foreground flex">
              <div class="flex-none">
                <span class="relative flex shrink-0 overflow-hidden rounded-full bg-muted-background m-auto size-12 border dark:bg-foreground"><img
                  class="aspect-square h-full w-full object-contain"
                  alt="National University of Malaysia"
                  src="/uniten.png"></span></div>
              <div class="group ml-4 grow flex-col items-center">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-x-2 text-base">
                    <h3 class="inline-flex items-center justify-center text-xs font-semibold leading-none sm:text-sm">UNITEN
                      <svg xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-chevron-right size-4 translate-x-0 transform opacity-0 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:opacity-100 rotate-0">
                        <path d="m9 18 6-6-6-6"></path>
                      </svg>
                    </h3>
                    <div class="text-right text-xs tabular-nums text-muted-foreground sm:text-sm">2018 - 2021</div>
                  </div>
                  <div class="font-sans text-xs">Computer Science (Hons)</div>
                </div>
              </div>
            </div>
          </a></div>
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

  <FloatingMenuBar />
</MainLayout>