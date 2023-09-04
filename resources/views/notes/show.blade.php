<x-layouts.app
    :title="$note->title"
    :meta-description="$note->body"
>

    <div class="flex flex-col py-16">
        <div class="flex flex-col max-w-xl px-8 py-6 mx-auto overflow-x-hidden bg-white rounded shadow h-96 dark:bg-slate-800">
            <h1 class="font-serif text-3xl py-2 text-center text-sky-600 dark:text-sky-500">{{ $note->title }}</h1>
            <p class="font-serif text-sm pb-2 text-center text-slate-600 dark:text-slate-400">{{ $note->updated_at }}</p>
            <hr class="">
            <p class="font-serif text-xl py-2 text-slate-600 dark:text-slate-400">{{ $note->description }}</p>
        </div>
        <div class="flex justify-center items-center py-6">
            <a class="inline-flex items-center px-8 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" href="{{ route('notes.edit', $note) }}">
                Update
            </a>
        </div>
    </div>

</x-layouts.app>