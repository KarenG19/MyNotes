<x-layouts.app
    title="Create new note"
    meta-description="Form to create a new note"
>

<h1 class="my-4 py-6 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Create New Note</h1>

<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('notes.store') }}" method="POST">
    @csrf
    
    @include('notes.form-fields')

    <div class="flex flex-col items-center justify-center my-4 mx-auto">
        {{-- <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('notes.index') }}">Regresar</a> --}}
        <button class="px-8 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit"> 
            Create
        </button>
    </div>
</form>


</x-layouts.app>
