<script>
	let forName;

	export let value;
	export { forName as for };
</script>

<!-- Warning svelte-ignore a11y-label-has-associated-control -->
<label class="block font-medium text-sm text-gray-700 dark:text-gray-400" for={forName}>
	{#if value}
		<span>{value}</span>
	{:else}
		<span><slot /></span>
	{/if}
</label>