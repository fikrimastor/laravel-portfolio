<script>
	import BreezeButton from "@/Components/Button.svelte";
	import BreezeGuestLayout from "@/Layouts/Guest.svelte";
	import { Link, useForm } from "@inertiajs/svelte";
	let verificationLinkSent = false;
	export let status;
  const route = window.route;
	const form = useForm({});
	function onSubmit(e)  {
		e.preventDefault();
		$form.post(route('verification.send'));
	};

	$: {
		verificationLinkSent = status === "verification-link-sent";
	}
</script>

<svelte:head>
	<title>Email Verification</title>
</svelte:head>

<BreezeGuestLayout>
	<div class="mb-4 text-sm text-gray-600">
		Thanks for signing up! Before getting started, could you verify your
		email address by clicking on the link we just emailed to you? If you
		didn't receive the email, we will gladly send you another.
	</div>

	{#if verificationLinkSent}
		<div class="mb-4 font-medium text-sm text-green-600">
			A new verification link has been sent to the email address you
			provided during registration.
		</div>
	{/if}

	<form onsubmit="{onSubmit}">
		<div class="mt-4 flex items-center justify-between">
			<BreezeButton
					disabled={$form.processing}
			>
				Resend Verification Email
			</BreezeButton>

			<Link
					href={ route('logout') }
					method="post"
					as="button"
					class="underline text-sm text-gray-600 hover:text-gray-900"
			>Log Out</Link
			>
		</div>
	</form>
</BreezeGuestLayout>