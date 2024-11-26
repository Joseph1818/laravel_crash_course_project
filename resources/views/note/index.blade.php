<x-layout>
<div class="note-container">
    <a href="{{route('note.create')}}" class="new-note-btn">
        New note
    </a>
    <div class="notes">
        @foreach ($notes as $note)
        <div class="note">
            <div class="note-body">
                {{-- Str::words methods bellow the number of words you want to render from the database call. (30) for each notes --}}
                {{Str::words($note->note, 30)}}
            </div>
            <div class="note-buttons">
                <a href="{{route('note.show', $note)}}" class="note-edit-button">View</a>
                <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
             <button class="note-delete-button">Delete</button> 
            </div>
        </div>
        @endforeach
    </div>
</div>
</x-layout>