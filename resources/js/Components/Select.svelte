<script>
  export let options = [];
  export let value = "";
  export let id = "";
  export let name = "";
  // export let className;
  let className;
  export { className as class };

  function handleChange(event) {
    value = event.target.value;
  }
</script>

<select
  id={id} name={name}
  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm {className}"
  bind:value={value}
  on:change={handleChange}>
  {#each options as { value, label } (label)}
    <option value={value}>{label}</option>
  {/each}
</select>