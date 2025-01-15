<script>
	let className;
	let hasErrors = false;
	let message = '';

	export { className as class };
	export let errors = {};

	$: {
		hasErrors = Object.keys(errors).length > 0;
	}
</script>

{#if hasErrors}
	<div class={className}>
		<div class="font-medium text-red-600">
			{ message }
		</div>

		<ul class="mt-3 list-disc list-inside text-sm text-red-600">
			{#each Object.keys(errors) as key, index}
				<li key={index}>{errors[key]}</li>
			{/each}
		</ul>
	</div>
{/if}