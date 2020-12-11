<div class="flex flex-col justify-center sticky top-0 bg-white mb-5 px-5 pb-5 pt-10 shadow-md">
    <x-main-title icon="perm_identity" heading="PROFILE" />
    <h1 class="text-lg font-bold">Profile</h1>
</div>
<div>
    <ul class="flex flex-col justify-center px-5 divide-solid">
        <li class="mt-3 p-5 rounded-lg bg-blue-100 text-blue-500 w-full cursor-pointer" wire:click="$emit('show_profile')">
            <h2>Edit Profile</h2>
        </li>
        <hr class="mt-3">
        <li class="mt-3 p-5 rounded-lg bg-blue-500 text-blue-100 w-full cursor-pointer" >
            <form method="POST" action="{{ route('logout') }}">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <h2>Logout</h2>
                    @csrf
                </a>
            </form>
        </li>
    </ul>
</div>