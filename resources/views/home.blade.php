<x-layout>
    <main class="mt-14">
        <span class="text-black dark:text-white">
            Maak een wervelende rondleiding door je volgende favoriete taal.
        </span>
        <div class="underline-offset-1">
            <div
                class="font text-2xl mt-10 border-b border-[#eeeeee] dark:border-[#252539] py-3  text-black dark:text-white">
                Talen
            </div>
            @foreach ($posts as $post)
                <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                    <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]" href="/post/{{ $post->id }}">{{ $post->title }}</a>
                </div>
            @endforeach
            {{-- <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]" href="">C</a>
            </div>
            <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]" href="">css</a>
            </div>
            <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]" href="">html</a>
            </div>
            <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]" href="">javascript</a>
            </div>

            <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]" href="">Python</a>
            </div> --}}
        </div>
    </main>
    <x-footer />
</x-layout>
