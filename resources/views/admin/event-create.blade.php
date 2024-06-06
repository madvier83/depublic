<x-admin.layout>
    <x-slot:title>Depublic - Admin</x-slot:title>
    <x-admin.navbar></x-admin.navbar>
    <x-admin.sidebar>
        <h1 class="mt-8 ml-8 text-4xl font-bold">Events</h1>
        <div class="m-8 max-w-lg">
            <form action="/admin/events" method="POST">
                @csrf
                <div class="flex flex-col gap-4 mt-8">
                    <label class="input input-bordered flex items-center gap-2">
                        Name : 
                        <input name="name" type="text" class="grow" placeholder="" value="{{ old('name', '') }}" />
                    </label>
                    @error('name')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                    <label class="input input-bordered flex items-center gap-2">
                        Location : 
                        <input name="location" type="text" class="grow" placeholder=""
                            value="{{ old('location', '') }}" />
                    </label>
                    @error('location')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                    <label class="input input-bordered flex items-center gap-2">
                        Date : 
                        <input name="date" type="date" class="grow" placeholder=""
                            value="{{ old('date', '') }}" />
                    </label>
                    @error('date')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                    <label class="input input-bordered flex items-center gap-2">
                        Description : 
                        <input name="description" type="text" class="grow" placeholder=""
                            value="{{ old('description', '') }}" />
                    </label>
                    @error('description')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                    <label class="input input-bordered flex items-center gap-2">
                        Highlight : 
                        <input name="highlight" type="text" class="grow" placeholder=""
                            value="{{ old('highlight', '') }}" />
                    </label>
                    @error('highlight')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="modal-action">
                    <a href="{{ url()->previous() }}" class="btn">Cancel</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </x-admin.sidebar>
</x-admin.layout>
