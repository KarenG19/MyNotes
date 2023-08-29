<x-layouts.app
    title="Notes"
    meta-description="Notes meta description"
>

    <h1>Notes</h1>
    <a href={{ route('notes.create') }}> Create new note </a>

    @foreach ($mynotes as $note)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href={{ route('notes.show', $note) }}>
                    {{ $note->title }}
                </a>
            </h2>
            &nbsp;
            <a href="{{ route('notes.edit', $note) }}"> Edit </a>
            
            <form action="{{ route('notes.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach

</x-layouts.app>
