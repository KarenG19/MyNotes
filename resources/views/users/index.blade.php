<x-layouts.app
    title="Profile"
    meta-description="Profile"
>

    @foreach($users as $users)
        @if($users->id == Auth::user()->id)
            <div class="flex py-16">
                <div class="flex flex-col justify center items-center max-w-xl mx-auto px-4 py-4 bg-white rounded shadow dark:bg-slate-800">
                    <svg class="icon pb-2" height="150" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M512 24.380952C242.590476 24.380952 24.380952 242.590476 24.380952 512s218.209524 487.619048 487.619048 487.619048 487.619048-218.209524 487.619048-487.619048S781.409524 24.380952 512 24.380952z m-7.314286 170.666667c90.209524 0 164.571429 70.704762 164.571429 158.476191s-73.142857 158.47619-164.571429 158.47619C414.47619 512 341.333333 441.295238 341.333333 353.52381s73.142857-158.47619 163.352381-158.476191zM792.380952 782.628571c0 45.104762-95.085714 46.32381-212.114285 46.32381H443.733333C326.704762 828.952381 231.619048 828.952381 231.619048 782.628571v-13.409523c0-113.371429 95.085714-204.8 212.114285-204.8h136.533334c117.028571 0 212.114286 91.428571 212.114285 204.8v13.409523z" fill="#666666"/>
                    </svg>

                    <span class="text-2xl py-4 font-serif text-slate-600 dark:text-slate-400">
                        {{ $users->name }}
                    </span>

                    <span class="text-xl font-serif text-slate-600 dark:text-slate-400">
                        {{ $users->email }}
                    </span>

                    <div class="flex justify-between space-x-10 pt-10 pb-2">
                        <a class="inline-flex items-center px-8 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" href="{{ route('users.edit', $users) }}">Update</a>
    
                        <form action="{{ route('users.destroy', $users) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="inline-flex items-center px-8 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-red-700 hover:bg-red-600 active:bg-red-700 focus:outline-none focus:border-sky-500" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

</x-layouts.app>

