<x-layouts.app
    title="Notes"
    meta-description="Notes meta description"
>

    <header class="px-6 py-16 space-y-2 text-center">
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" 
        href="{{ route('notes.create') }}">Create new note</a>
    </header>

    <main class="grid gap-4 px-4 sm:grid-cols-1 md:grid-cols-1">
        @foreach($mynotes as $note)
            @if($note->id_user == Auth::user()->id)
                <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800 text-center mx-auto w-full">
                    <h2 class="text-xl text-slate-600 dark:text-slate-300 font-serif">
                        <a href="{{ route('notes.show', $note) }}">
                            {{ $note->title }}
                        </a>
                    </h2>
                    <div class="flex justify-between">
                        <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('notes.show', $note) }}">View</a>
                       
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </main>

</x-layouts.app>
