<div class="space-y-4">
    <label class="flex flex-col">
        <span class="py-2 font-serif text-slate-600 dark:text-slate-400">Title <span class="font-serif text-sky-600 dark:text-sky-500">*</span> </span>
        <input class="font-serif rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="title" type="text" value="{{old('title', $note->title)}}">
        @error('title')
            <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
        @enderror
        <input class="hidden" name="id_user" type="number" value="{{old('id_user', $note->iduser = Auth::user()->id)}}">
    </label>
    <br>
    <label class="flex flex-col">
        <span class="py-2 font-serif text-slate-600 dark:text-slate-400">Description <span class="font-serif text-sky-600 dark:text-sky-500">*</span> </span>
        <textarea class="font-serif rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="description">{{old('description', $note->description)}}</textarea>
        @error('description')
            <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <br>
</div>
