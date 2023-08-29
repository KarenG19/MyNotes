<x-layouts.app
    :title="$note->title"
    :meta-description="$note->description"
>

    <h1>Update your Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf @method('PATCH')
       
        @include('notes.form-fields')
    
        <button type="submit"> 
            Update
        </button>
    </form>

    <br>

    <a href={{ route('notes.index') }}>Regresar</a>
    
</x-layouts.app>