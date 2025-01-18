<script>

import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.svelte';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.svelte';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.svelte';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.svelte';
import InputSelect from '@/Components/Select.svelte';
import TextInput from '@/Components/Input.svelte';
import InputError from '@/Components/Error.svelte';
import InputLabel from '@/Components/Label.svelte';
import { Link, useForm } from '@inertiajs/svelte';
import TransitionButton from '@/Components/TransitionButton.svelte';
export let title, status, mustVerifyEmail;

export let form = useForm({
  entity_name: '',
  type: '',
  entity_website_url: null,
  entity_logo_url: null,
  start_at: null,
  end_at: null,
  role: null,
  responsibility: null,
  is_active: false,
  errors: {},
});

const typeOptions = [
  { value: 'work', label: 'Work' },
  { value: 'education', label: 'Education' },
];

function submit(e) {
  e.preventDefault();
  $form.post(route('experience.store'), {
    preserveScroll: true,
    onSuccess: () => {
      $form.reset();
    },
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
    <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
      <div
        class="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
      >
        <section>
          <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
              New Profile Experience
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
              Create a new experience for your profile.
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
              <TransitionButton disabled={$form.processing} buttonLabel="Save" visible={$form.recentlySuccessful} text="Saved." />
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</BreezeAuthenticatedLayout>