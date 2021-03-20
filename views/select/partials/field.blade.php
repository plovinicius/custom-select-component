<div class="flex flex-wrap flex-auto">
    <template x-for="(option,index) in selectedItens()" :key="option">
        <div class="flex items-center justify-center py-1 pl-4 pr-2 m-1 text-white bg-black border rounded-full ">
            <div class="text-sm font-normal leading-none max-w-full flex-initial x-model=" options[option]" x-text="option.text"></div>
            <div class="flex flex-row-reverse flex-auto">
                <div x-on:click="remove(option)">
                    <svg class="w-5 h-5 ml-2 fill-current" role="button" viewBox="0 0 20 20">
                        <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                 C14.817,13.62,14.817,14.38,14.348,14.849z" />
                    </svg>

                </div>
            </div>
        </div>
    </template>

    <div x-show="selected.length == 0" class="flex-1">
        <input placeholder="{{ $placeholder }}"
            class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none">
    </div>
</div>
