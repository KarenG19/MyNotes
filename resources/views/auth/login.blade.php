<x-layouts.app
    title="Login"
    meta-description="Login meta description"
>
    <div class="flex justify-center items-center py-16">
        <form class="max-w-xl px-8 py-6 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="flex flex-col items-center">
                <svg class="svg-icon" 
                    style="width: 5em; height: 5em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                    viewBox="0 0 1024 1024" 
                    version="1.1" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M895.76 275l-4 0.36L232.72 876l13 73.68a32 32 0 0 0 37.16 26l682.64-120.36a32 32 0 0 0 26.04-37.16z" fill="#40BDFF" />
                    <path d="M118.48 102.48v725.28a32 32 0 0 0 32 32h527.04v-190.24a8 8 0 0 1 8-8h190.28V102.48z" fill="#EFFAFE" />
                    <path d="M991.52 818L895.76 275l-16.24-7.48-15.28 32.92 91.28 517.56a32 32 0 0 1-26.04 37.16l-666.4 117.48a32 32 0 0 0 19.76 2.88l682.64-120.36a32 32 0 0 0 26.04-37.16z" fill="#2197F7" />
                    <path d="M839.76 102.48v559.04h36V102.48z" fill="#E4EBED" /><path d="M138.792 235.848l97.072-97.072 20.792 20.788L159.584 256.64z" fill="#FFDD00" />
                    <path d="M763 762.96l85.48-85.44h-170.96v170.96l85.48-85.52z" fill="#EFFAFE" /><path d="M828.48 677.52l-85.48 85.44-65.48 65.52v20l85.48-85.52 85.48-85.44h-20z" fill="#E4EBED" />
                    <path d="M222.44 149.56L132 58.96A37.36 37.36 0 0 0 78.96 112l90.6 90.44zM138.792 235.848l97.072-97.072 20.792 20.788L159.584 256.64z" fill="#FFDD00" /><path d="M222.44 149.56L132 58.96A37.36 37.36 0 0 0 78.96 112l90.6 90.44z" fill="#FFDD00" />
                    <path d="M877.76 160V94.48a10 10 0 0 0-10-10H162.8l-38.24-38.24a55.36 55.36 0 0 0-78.32 78.32l38.24 38.24v664.96a50.12 50.12 0 0 0 50.08 50.08h64.2l13.2 74.8a50.04 50.04 0 0 0 58 40.6l682.64-120.36a50.08 50.08 0 0 0 40.64-58zM60.36 110.4A35.4 35.4 0 0 1 110.4 60.36l89.2 89.2L149.56 199.6zM236 141.6l17.96 17.96-94.4 94.24L141.6 236z m-28.68 716H134.56a30.12 30.12 0 0 1-30.08-30.08V182.76l30.96 30.96-15.04 15.04a10 10 0 0 0 0 14.16l32 32a10 10 0 0 0 14.16 0L213.76 228l57.12 57a10 10 0 1 0 14.16-14.16L228 213.76l47-47.12a10 10 0 0 0 0-14.16l-32-32a10 10 0 0 0-14.16 0l-15.04 15.04-31-31.04h674.96v555.04h-188.24a10 10 0 0 0-10 10v188.28z m636.48-178.28l-82.2 82.24-82.12 82.12v-164z m105.48 173.68l-682.8 120.52a30.12 30.12 0 0 1-34.84-24.4l-12.56-71.32h450.4a10 10 0 0 0 7.08-2.92l198.28-198.28a9.96 9.96 0 0 0 1.56-2.12l0.32-0.6a9.96 9.96 0 0 0 0.84-2.32v-0.32a10 10 0 0 0 0-1.72V275.32l95.76 543a30.08 30.08 0 0 1-24.2 34.84z" fill="#263238" />
                    <path d="M264.8 332.76h512.2a10 10 0 0 0 0-20H264.8a10 10 0 0 0 0 20zM185.24 412.36h591.76a10 10 0 1 0 0-20H185.24a10 10 0 1 0 0 20zM185.24 492h591.76a10 10 0 0 0 0-20H185.24a10 10 0 1 0 0 20zM185.24 571.52h591.76a10 10 0 0 0 0-20H185.24a10 10 0 0 0 0 20zM589.92 631.12H185.24a10 10 0 0 0 0 20h404.68a10 10 0 0 0 0-20zM589.92 710.68H185.24a10 10 0 0 0 0 20h404.68a10 10 0 0 0 0-20zM589.92 790.28H185.24a10 10 0 0 0 0 20h404.68a10 10 0 0 0 0-20z" fill="#263238" />
                    <path d="M956.4 208h-16v-16a4 4 0 0 0-8 0v16h-16a4 4 0 0 0 0 8h16v16a4 4 0 0 0 8 0v-16h16a4 4 0 0 0 0-8z" fill="#FFDD00" /><path d="M932.4 82h-16v-16a4 4 0 0 0-8 0v16h-16a4 4 0 0 0 0 8h16v16a4 4 0 0 0 8 0v-16h16a4 4 0 0 0 0-8zM944 363.16a24 24 0 1 1 24-24 24 24 0 0 1-24 24z m0-40a16 16 0 1 0 16 16 16 16 0 0 0-16-16z" fill="#40BDFF" />
                </svg>
                <h1 class="my-4 font-serif text-2xl text-sky-600 dark:text-sky-500">MyNotes</h1>
            </div>
            
            <div class="space-y-4">
        
                <label class="flex flex-col">
                    <span class="py-2 font-serif text-slate-600 dark:text-slate-400">
                        Email
                    </span>
                    <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                            name="email" type="email" value="{{old('email')}}">
                    @error('email')
                        <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
                    @enderror
                </label>

                <label class="flex flex-col">
                    <span class="py-2 font-serif text-slate-600 dark:text-slate-400">
                        Password
                    </span>
                    <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                            name="password" type="password">
                    @error('password')
                        <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
                    @enderror
                </label>

                <label class="py-2 flex items-center">
                    <input class="border rounded dark:bg-slate-900 dark:border-slate-800 border-slate-300 dark:border-slate-700 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50" 
                            name="remember" type="checkbox">
                    <span class="cursosr-pointer ml-2 font-serif text-slate-600 dark:text-slate-400">
                        Remember me
                    </span>
                </label>
            </div>

            <div class="flex flex-col items-center mt-6">
                <button class="inline-flex items-center px-8 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit"> 
                    Login
                </button>
                <p class="p-4 font-serif text-slate-600 dark:text-slate-400">
                    Don't have an account?
                    <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('register') }}">Register</a>
                </p>
            </div>
            
        </form>
    </div>

</x-layouts.app>