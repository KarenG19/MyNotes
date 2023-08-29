<x-layouts.app
    title="Create new note"
    meta-description="Form to create a new note"
>

    <h1>Create new note</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        
        @include('notes.form-fields')

        <button type="submit"> 
            Create
        </button>
    </form>

    <a href={{ route('notes.index') }}>Regresar</a>

</x-layouts.app>
