<div>
    {{-- The whole world belongs to you. --}}
    @livewireStyles
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
        <form  wire:submit.prevent="savePrimaryClass">
            <div class="form-group" style="margin-bottom:5px;">
                <label for="exampleFormControlInput1">Class</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="class">
                @error('class') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Category</label>
                <select wire:model="level_id" class="form-control">
                    @foreach($level as $lev)
                    <option value="{{$lev->id}}">{{$lev->level}}</option>
                    @endforeach
                 </select>
                @error('category') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="text-center">
            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> Save</button>
            </div>
        </form>
    </div>
@livewireScripts
</div>
