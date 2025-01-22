<script>
  import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.svelte';
  import InputSelect from '@/Components/Select.svelte';
  import TextInput from '@/Components/Input.svelte';
  import InputError from '@/Components/Error.svelte';
  import InputLabel from '@/Components/Label.svelte';
  import { Link, useForm } from '@inertiajs/svelte';
  import TransitionButton from '@/Components/TransitionButton.svelte';
  import BreezeValidationErrors from '@/Components/ValidationErrors.svelte';
  import BreezeGuestLayout from '@/Layouts/Guest.svelte';

  export let title, experience;
  let err = {};
  export let errors = {};

  export let form = useForm({
    entity_name: experience.entity_name,
    type: experience.type,
    entity_website_url: experience.entity_website_url,
    entity_logo_url: experience.entity_logo_url,
    start_at: experience.start_at,
    end_at: experience.end_at,
    role: experience.role,
    responsibility: experience.responsibility,
    is_active: experience.is_active,
    errors: {}
  });

  const typeOptions = [
    { value: 'work', label: 'Work' },
    { value: 'education', label: 'Education' }
  ];

  $: {
    err = errors;
  }

  function submit(e) {
    e.preventDefault();
    $form.put(route('experience.update', experience), {
      preserveScroll: true,
      onSuccess: () => {
        $form.reset();
      },
      onError: () => {
        console.log('error');
      }
    });
  }
</script>

<svelte:head>
  <title>{ title }</title>
</svelte:head>

<BreezeAuthenticatedLayout>
  <h2 class="font-semibold text-xl text-gray-800 leading-tight" slot="header">
    { title }
  </h2>

  <div class="py-12">
    <BreezeValidationErrors class="mb-4" errors={err} />

    <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
      <div
        class="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
      >
        <section>
          <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
              Edit Profile Experience { experience.entity_name }
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
              Update an experience for your profile.
            </p>
          </header>

          <form
            onsubmit="{ submit }"
            class="mt-6 space-y-6"
          >
            <div>
              <InputLabel for="name" value="Name" />

              <TextInput
                id="name"
                type="text"
                classes="mt-1 block w-full"
                bind:value={$form.entity_name}
                required
                autofocus
                autocomplete="name"
              />

              <InputError message={$form.errors.entity_name} />
            </div>

            <div>
              <InputLabel for="type" value="Type" />

              <InputSelect
                id="type"
                name="type"
                className="mt-1 block w-full"
                bind:value={$form.type}
                options={typeOptions}
              />

              <InputError message={$form.errors.type} />
            </div>

            <div>
              <InputLabel for="entityWebsiteUrl" value="Website Url" />

              <TextInput
                id="entityWebsiteUrl"
                type="text"
                classes="mt-1 block w-full"
                bind:value={$form.entity_website_url}
                required
                autofocus
                autocomplete="name"
              />

              <InputError message={$form.errors.entity_website_url} />
            </div>

            <div class="flex items-center gap-4">
              <TransitionButton disabled={$form.processing}
                buttonLabel="Save"
                visible={$form.recentlySuccessful}
                text="Saved." />
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</BreezeAuthenticatedLayout>