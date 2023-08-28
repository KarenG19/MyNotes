<x-layouts.app
    title="Notes"
    meta-description="Notes meta description"
>

    <h1>Notes</h1>

    @foreach ($mynotes as $note)
        <h2>
            <a href={{ route('notes.show', $note) }}>
                {{ $note->title }}
            </a>
        </h2>
    @endforeach

</x-layouts.app>
