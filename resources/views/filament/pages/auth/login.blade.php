@push('styles')
<style>

    /* Logo Container */
    .login-logo {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .login-logo img {
        max-width: 120px;
        height: auto;
        margin-bottom: 1rem;
    }
    
</style>
@endpush

<x-filament-panels::page.simple>
    <div class="login-logo">
        <!-- Logo - Ganti src dengan path logo Anda -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo" onerror="this.style.display='none'">
    </div>
    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>
</x-filament-panels::page.simple>