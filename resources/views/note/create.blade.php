<x-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
       <form action="{{route('note.store')}}" method="POST" class="note">
        <textarea name="note" id="" cols="30" rows="10" class="note-body">Enter your note here</textarea>
        <div class="note-buttons">
            <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
            <button class="note-submit-button">Submit</button>
        </div>
       </form>
    </div>
</x-layout>