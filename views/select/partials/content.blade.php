<div>
    <div x-show.transition.origin.top="isOpen()"
        class="absolute z-40 w-full overflow-y-auto bg-white rounded shadow top-100 lef-0 max-h-select"
        x-on:click.away="close">
        <div class="flex flex-col w-full">
            <template x-for="(option,index) in options" :key="option">
                <div>
                    <div x-bind:class="option.selected ? 'bg-black text-white' : ''"
                        class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-gray-200 hover:text-black"
                        @click="select(index,$event)">
                        <div x-bind:class="option.selected ? 'border-teal-600' : ''"
                            class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                            <div class="flex items-center w-full">
                                <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
