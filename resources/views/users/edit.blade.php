<x-layouts.app
    title="Update Profile"
    meta-description="Update Profile"
>

    <h1 class="my-4 py-6 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Update Profile</h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('users.update', $users) }}" method="POST">
        @csrf @method('PATCH')
       
        <div class="space-y-4">
            <label class="flex flex-col">
                <span class="py-2 font-serif text-slate-600 dark:text-slate-400">Fullname <span class="font-serif text-sky-600 dark:text-sky-500">*</span> </span>
                <input class="font-serif rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"
                    name="name" type="text" value="{{old('name', $users->name)}}">
                @error('name')
                    <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <br>
            <label class="flex flex-col">
                <span class="py-2 font-serif text-slate-600 dark:text-slate-400">Email <span class="font-serif text-sky-600 dark:text-sky-500">*</span> </span>
                <input class="font-serif rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                    name="email" type="email" value="{{old('email', $users->email)}}">
                @error('email')
                    <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <br>
        </div>
        
        <div class="flex flex-col items-center justify-center my-4 mx-auto">
            {{-- <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href={{ route('notes.index') }}>Regresar</a> --}}
            <button class="px-8 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit"> 
                Update
            </button>
        </div>
    </form>
    
</x-layouts.app>