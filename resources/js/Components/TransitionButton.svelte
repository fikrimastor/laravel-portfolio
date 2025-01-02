<script>
	import { fade } from 'svelte/transition';
	import PrimaryButton from "@/Components/Button.svelte";

	/** @type {{ text: string }} */
	/** @disabled {{ visible: boolean }} */
	/** @disabled {{ disabled: boolean }} */
	/** @buttonLabel {{ buttonLabel: string }} */
	let { text = '', disabled = false, buttonLabel = 'Save', visible = false } = $props();
</script>

<PrimaryButton disabled={ disabled }>{ buttonLabel }</PrimaryButton>

{#if visible}
	<p transition:fade class="text-sm text-gray-600 dark:text-white">{ text }</p>
{/if}