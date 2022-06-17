<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @livewireStyles
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
        <form  wire:submit.prevent="craeteUserCategory">
            <div class="form-group" style="margin-bottom:5px;">
                <label for="exampleFormControlInput1">User Category</label>
                <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="" wire:model="category">
                @error('category') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@livewireScripts
</div>
