<x-admin.layout>
    <x-slot:title>Depublic - Admin</x-slot:title>
    <x-admin.navbar></x-admin.navbar>
    <x-admin.sidebar>
        <h1 class="text-4xl font-bold ml-8 mt-8">Events</h1>
        <div class="m-8">
            <a href="/admin/events/create" class="btn btn-primary mb-8">Create Event</a>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Description</th>
                            {{-- <th>Highlight</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr class="">
                                <th>{{ $loop->iteration + $events->firstItem() - 1 }}</th>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->location }}</td>
                                <td>{{ date('d M Y', strtotime($event->date)) }}</td>
                                <td>{{ $event->description }}</td>
                                {{-- <td>{{ $event->highlight }}</td> --}}
                                <td class="flex gap-2">
                                    <a href="/admin/packages/{{ $event->id }}"
                                        class="btn btn-info btn-xs">Packages</a>

                                    <a href="/admin/events/{{ $event->id }}/edit"
                                        class="btn btn-success btn-xs">Edit</a>

                                    <button class="btn btn-error btn-xs"
                                        onclick="modalDelete{{ $event->id }}.showModal()">Delete</button>
                                    <dialog id="modalDelete{{ $event->id }}" class="modal">
                                        <div class="modal-box py-8">
                                            <h3 class="font-bold text-xl text-center">Delete Event Permanently?</h3>
                                            <form action="/admin/events/{{ $event->id }}" method="POST">
                                                @csrf
                                                <div class="flex gap-2 mt-8 justify-center">
                                                    <p class="btn" onclick="modalDelete{{ $event->id }}.close()">
                                                        Cancel</p>
                                                    <button class="btn btn-error">Delete</button>
                                                </div>
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </dialog>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex items-center gap-8 ml-4">
                <p class="mt-4 text-sm">
                    Total {{ $events->total() }} Events
                </p>
                <p class="mt-4 text-sm">
                    Showing {{ $events->firstItem() }} - {{ $events->lastItem() }}
                </p>
                <div class="flex mt-4">
                    {{ $events->links() }}
                </div>
            </div>
        </div>


    </x-admin.sidebar>
</x-admin.layout>
