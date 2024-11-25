<div class="mt-10 flex flex-col items-center">
        <h3 class="text-2xl font-bold">Counter</h3>
        <div class="flex items-center space-x-4 mt-4">
            <button
                class="bg-blue-500 text-white px-5 py-2 rounded-full text-lg font-medium hover:bg-blue-600 transition" wire:click="decrease">
                -
            </button>
            <span id="counter" class="text-4xl font-bold">{{$count}}</span>
            <button
                class="bg-green-500 text-white px-5 py-2 rounded-full text-lg font-medium hover:bg-green-600 transition" wire:click="increase">
                +
            </button>
        </div>
</div>
