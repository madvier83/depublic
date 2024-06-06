<x-admin.layout>
    <x-slot:title>Depublic - Admin</x-slot:title>
    <x-admin.navbar></x-admin.navbar>
    <x-admin.sidebar>
        <h1 class="mt-8 ml-8 text-4xl font-bold">Event Package</h1>
        <div class="m-8 max-w-lg">
            <div class="flex flex-col gap-4 mt-8">
                <label class="text-bold input input-bordered flex items-center gap-2">
                    Name :
                    <input disabled name="name" type="text" class="grow" placeholder=""
                        value="{{ old('name', $event->name) }}" />
                </label>
                @error('name')
                    <span class="text-error">{{ $message }}</span>
                @enderror
                <label class="input input-bordered flex items-center gap-2">
                    Location :
                    <input disabled name="location" type="text" class="grow" placeholder=""
                        value="{{ old('location', $event->location) }}" />
                </label>
                @error('location')
                    <span class="text-error">{{ $message }}</span>
                @enderror
                <label class="input input-bordered flex items-center gap-2">
                    Date :
                    <input disabled name="date" type="date" class="grow" placeholder=""
                        value="{{ old('date', $event->date) }}" />
                </label>
                @error('date')
                    <span class="text-error">{{ $message }}</span>
                @enderror
                <label class="input input-bordered flex items-center gap-2">
                    Description :
                    <input disabled name="description" type="text" class="grow" placeholder=""
                        value="{{ old('description', $event->description) }}" />
                </label>
                @error('description')
                    <span class="text-error">{{ $message }}</span>
                @enderror
                <label class="input input-bordered flex items-center gap-2">
                    Highlight :
                    <input disabled name="highlight" type="text" class="grow" placeholder=""
                        value="{{ old('highlight', $event->highlight) }}" />
                </label>
                @error('highlight')
                    <span class="text-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-8"></div>
            @foreach ($event->packages as $package)
                <div class="py-4">
                    <h1>{{ $package->name }}</h1>
                    <h1>Rp. {{ $package->price }}</h1>
                </div>
            @endforeach
        </div>

    </x-admin.sidebar>
</x-admin.layout>
