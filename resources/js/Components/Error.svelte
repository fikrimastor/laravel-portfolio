<script>
	let { message = '', className } = $props();

	export { className as class };
</script>

<div class={className}>
	<div class="font-medium text-red-600">
		{ message }
	</div>
</div>