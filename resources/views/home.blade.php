<x-layout>
    <main>
        <div class="flex justify-end underline-offset-1">
            <a href="/create" class="p-3 -mt-3 bg-[#eeeeee] font-bold dark:bg-[#252539] underline text-[#0000ee] dark:text-[#4499cc]">Add new language</a>
        </div>
        <span class="text-black dark:text-white">
            Maak een wervelende rondleiding door je volgende favoriete taal.
        </span>
        <div class="underline-offset-1">
            <div
                class="font text-2xl mt-20 border-b border-[#eeeeee] dark:border-[#252539] py-3  text-black dark:text-white">
                Talen
            </div>
            @foreach ($posts as $post)
                <div class="py-3 font-bold border-b border-[#eeeeee] dark:border-[#252539]">
                    <a class="text-xl underline text-[#0000ee] dark:text-[#4499cc]"
                        href="/post/{{ $post->id }}">{{ $post->title }}</a>
                </div>
            @endforeach
        </div>
    </main>
    <x-footer />
</x-layout>
