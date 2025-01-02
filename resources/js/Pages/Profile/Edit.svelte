<script>
	import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.svelte";
	import UpdateProfileInformationForm from "@/Pages/Profile/Partials/UpdateProfileInformationForm.svelte";
	import UpdatePasswordForm from "@/Pages/Profile/Partials/UpdatePasswordForm.svelte";
	import DeleteUserForm from "@/Pages/Profile/Partials/DeleteUserForm.svelte";
	export let title, status, statusMessage, mustVerifyEmail;
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
				<UpdateProfileInformationForm
						class="max-w-xl"
						status="{status}"
						mustVerifyEmail="{mustVerifyEmail}"
				/>
			</div>

			<div
					class="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
			>
				<UpdatePasswordForm class="max-w-xl" statusMessage="{statusMessage}" />
			</div>

			<div
					class="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
			>
				<DeleteUserForm class="max-w-xl" />
			</div>
		</div>
	</div>
</BreezeAuthenticatedLayout>