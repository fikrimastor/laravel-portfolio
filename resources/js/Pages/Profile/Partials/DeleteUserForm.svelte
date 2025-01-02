<script>
	import TextInput from "@/Components/Input.svelte";
	import InputLabel from "@/Components/Label.svelte";
	import InputError from "@/Components/Error.svelte";
	import { useForm } from "@inertiajs/svelte";
	import DangerButton from "@/Components/DangerButton.svelte";
	import Modal from "@/Components/Modal.svelte";
	import SecondaryButton from "@/Components/SecondaryButton.svelte";
	let err = {};
	export let errors = {};

	let confirmingUserDeletion = false;

	export let classes = "";

	const form = useForm({
		password: '',
	});

	$: {
		err = errors;
	}

	function confirmUserDeletion() {
		confirmingUserDeletion = true;
	}

	function deleteUser(e) {
		e.preventDefault();
		$form.delete(route('profile.destroy'), {
			preserveScroll: true,
			onSuccess: () => {
				$form.reset();
				closeModal();
			},
			onError: () => $form.reset(),
		});
	}

	function closeModal() {
		confirmingUserDeletion = false;

		$form.clearErrors();
		$form.reset();
	}
</script>

<section class=space-y-6 {classes}>
	<header>
		<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
			Delete Account
		</h2>

		<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
			Once your account is deleted, all of its resources and data will
			be permanently deleted. Before deleting your account, please
			download any data or information that you wish to retain.
		</p>
	</header>

	<DangerButton onClick="{ confirmUserDeletion }">Delete Account</DangerButton>

	<Modal show="{confirmingUserDeletion}" onClose="{ closeModal }">
		<div class="p-6">
			<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
				Are you sure you want to delete your account?
			</h2>

			<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
				Once your account is deleted, all of its resources and data will
				be permanently deleted. Please enter your password to confirm
				you would like to permanently delete your account.
			</p>

			<div class="mt-6">
				<InputLabel for="password" value="Password" classes="sr-only" />

				<TextInput
						id="password"
						bind:value={$form.password}
						type="password"
						classes="mt-1 block w-3/4"
						placeholder="Password"
						on:keyup.enter={deleteUser}
				/>

				<InputError message={$form.errors.password} />
			</div>

			<div class="mt-6 flex justify-end">
				<SecondaryButton onClick={closeModal}>Cancel</SecondaryButton>

				<DangerButton
						disabled={$form.processing}
						onClick={deleteUser}
						classes="ml-3"
				>
					Delete Account
				</DangerButton>
			</div>
		</div>
	</Modal>
</section>