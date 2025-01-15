<script>
	import TransitionButton from "@/Components/TransitionButton.svelte";
	import TextInput from "@/Components/Input.svelte";
	import InputLabel from "@/Components/Label.svelte";
	import InputError from "@/Components/Error.svelte";
	import { useForm } from "@inertiajs/svelte";
	let err = {};
	export let errors = {};
  const route = window.route;

	export let
			statusMessage = "{{ __('passwords.updated') }}",
			classes = "",
			passwordInput,
			confirmPasswordInput,
			currentPasswordInput;

	const form = useForm({
		current_password: '',
		password: '',
		password_confirmation: '',
	});

	$: {
		err = errors;
	}

	function updatePassword(e) {
		e.preventDefault();
		$form.put(route('password.update'), {
			preserveScroll: true,
			onSuccess: () => $form.reset(),
			onError: () => {
				if ($form.errors.password) {
					$form.reset('password', 'password_confirmation');
					//passwordInput.focus();
				}
				if ($form.errors.current_password) {
					$form.reset('current_password');
					//currentPasswordInput.focus();
				}
			},
		});
	}
</script>

<section class={classes}>
	<header>
		<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
			Update Password
		</h2>

		<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
			Ensure your account is using a long, random password to stay
			secure.
		</p>
	</header>

	<form
			onsubmit="{ updatePassword }"
			class="mt-6 space-y-6"
	>
		<div>
			<InputLabel for="current_password" value="Current Password" />

			<TextInput
					classes="mt-1 block w-full"
					id="currentPasswordInput"
					bind:value={$form.current_password}
					bind:this={currentPasswordInput}
					type="password"
					class="mt-1 block w-full"
					autocomplete="new-password"
			/>

			<InputError message={$form.errors.current_password} />
		</div>

		<div>
			<InputLabel for="password" value="New Password" />

			<TextInput
					classes="mt-1 block w-full"
					id="password"
					bind:value={$form.password}
					bind:this={passwordInput}
					type="password"
					class="mt-1 block w-full"
					autocomplete="new-password"
			/>

			<InputError message={$form.errors.password} />
		</div>

		<div>
			<InputLabel for="password_confirmation" value="Confirm New Password" />

			<TextInput
					classes="mt-1 block w-full"
					id="password_confirmation"
					bind:value={$form.password_confirmation}
					bind:this={confirmPasswordInput}
					type="password"
					class="mt-1 block w-full"
					autocomplete="new-password"
			/>

			<InputError message={$form.errors.password_confirmation} />
		</div>

		<div class="flex items-center gap-4">
			<TransitionButton disabled={$form.processing} buttonLabel="Save" visible={$form.recentlySuccessful} text="{ statusMessage }." />
		</div>
	</form>
</section>