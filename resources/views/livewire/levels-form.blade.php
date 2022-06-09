<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @livewireStyles
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        
    @if(session()->has('success')) <div style="color:blue; font-weight:bold; text-align:center;">{{session('success')}}</div>@endif
        <form  wire:submit.prevent="createLevel">
            <div class="form-group" style="margin-bottom:5px;">
                <label for="exampleFormControlInput1">Level</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Level" wire:model="level">
                @error('level') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@livewireScripts
</div>
