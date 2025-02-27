<flux:table.row>
    <flux:table.cell>
        <flux:heading class="mb-1">{{ $dealership->name }}</flux:heading>
        <p class="text-xs">{{ $dealership->city }}, {{ $dealership->state }}</p>
    </flux:table.cell>
    <flux:table.cell>
        <flux:badge size="sm" :color="$dealership->status->color()" inset="top bottom">
            {{ $dealership->status->label() }}
        </flux:badge>
    </flux:table.cell>
    <flux:table.cell>
        <flux:badge size="sm" :color="$dealership->rating->color()" inset="top bottom">
            {{ $dealership->rating->label() }}
        </flux:badge>
    </flux:table.cell>
    <flux:table.cell>
        <flux:badge size="sm">{{ $dealership->stores()->count() + 1 }}</flux:badge>
    </flux:table.cell>
    <flux:table.cell class="text-xs">{{ $dealership->type->label() }}</flux:table.cell>
    <flux:table.cell>
        @foreach ($dealership->users as $user)
            <p class="text-xs">{{ $user->name }}</p>
        @endforeach
    </flux:table.cell>
    <flux:table.cell>
        <a wire:navigate href="{{ route('dealership.show', $dealership) }}">View</a>
    </flux:table.cell>
</flux:table.row>
