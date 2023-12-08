<div class="w-screen h-[70vh] flex items-center justify-center">
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100 p-8">

        <div class="px-5 text-center space-y-3 mx-auto">
            <h1 class="text-2xl">Login</h1>
            <p class="text-sm">login with your credentials to access the portal</p>
        </div>

        <form class="" wire:submit='login'>

            <x-forms.error error='status' class="text-center mt-2" />

            <x-forms.input type='email' name='email' wire:model='email' label='Email Address' required />

            <x-forms.input type='password' name='password' wire:model='password' label='Password' required />

            <x-forms.button label="Login" />

            <label class="label">
                <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
            </label>

        </form>

    </div>
</div>