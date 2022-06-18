<div>
    {{-- The whole world belongs to you. --}}
    @livewireStyles
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
        <form x-on:EditCommittee.window="open = false" wire:submit.prevent="createCommittee">
            <div class="form-group" style="margin-bottom:5px;">
                <label for="exampleFormControlInput1">Committee Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" wire:model="committee_name">
                @error('committee_name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@livewireScripts
</div>
