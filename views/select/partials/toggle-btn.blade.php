<div class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 border-l border-gray-300">
    <button type="button" x-show="isOpen() === true" x-on:click="open"
        class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
        <svg version="1.1" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                L17.418,6.109z" />
        </svg>
    </button>

    <button type="button" x-show="isOpen() === false" @click="close"
        class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                " />
        </svg>
    </button>
</div>
