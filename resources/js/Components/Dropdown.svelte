<script>
  import { onMount } from "svelte";
  import { fade } from "svelte/transition";

  export let align = "right",
    width = "48",
    contentClasses = "py-1 bg-white dark:bg-gray-700";

  let open = false;

  const closeOnEscape = (e) => {
    if (open && e.key === "Escape") {
      open = false;
    }
  };

  onMount(() => {
    document.addEventListener("keydown", closeOnEscape);
    return () => {
      document.removeEventListener("keydown", closeOnEscape);
    };
  });

  const widthClass = {
    48: "w-48",
  }[width.toString()];

  const alignmentClasses = () => {
    if (align === "left") {
      return "origin-top-left left-0";
    } else if (align === "right") {
      return "origin-top-right right-0";
    } else {
      return "origin-top";
    }
  };

  function handleToggle(value) {
    open = value;
  }
</script>

<div class="relative">
  <!-- Warning svelte-ignore a11y_no_static_element_interactions -->
  <div role="button"
    on:click={() => { handleToggle(!open);}}
    on:keydown={(e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      handleToggle();
    }
  }}
    tabindex="0"
  >
    <slot name="trigger" />
  </div>

  <!-- Full Screen Dropdown Overlay -->
  {#if open}
    <div
      class="fixed inset-0 z-40"
      role="button"
      on:click={() => { handleToggle(false);}}
      on:keydown={(e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          handleToggle(false);
        }
      }}
      tabindex="0"
    ></div>
  {/if}

  {#if open}
    <div
      role="button"
      transition:fade={{ duration: 200 }}
      class="absolute z-50 mt-2 rounded-md shadow-lg {widthClass} {alignmentClasses()}"
      on:click={() => { handleToggle(false);}}
      on:keydown={(e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          handleToggle(false);
        }
      }}
      tabindex="0"
    >
      <div
        class="rounded-md ring-1 ring-black ring-opacity-5 {contentClasses}"
      >
        <slot name="content" />
      </div>
    </div>
  {/if}
</div>