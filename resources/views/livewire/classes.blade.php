<div>
    {{-- The whole world belongs to you. --}}
    @livewireStyles
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        
    @if(session()->has('success')) <div style="color:blue; font-weight:bold; text-align:center;">{{session('success')}}</div>@endif
        <form  wire:submit.prevent="savePrimaryClass">
            <div class="form-group" style="margin-bottom:5px;">
                <label for="exampleFormControlInput1">Class</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="class">
                @error('class') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Category</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="category" placeholder="Enter Email">
                @error('category') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@livewireScripts
</div>
