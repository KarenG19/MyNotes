<x-layouts.app
    :title="$note->title"
    :meta-description="$note->body"
>

    <h1>{{ $note->title }}</h1>

    <p>{{ $note->description }}</p>

    <a href={{ route('notes.index') }}>Regresar</a>
    
</x-layouts.app>