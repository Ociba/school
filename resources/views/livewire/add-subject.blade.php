<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @livewireStyles
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
        <form  wire:submit.prevent="addSubject">
            <div class="form-group" style="margin-bottom:5px;">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" wire:model="subject">
                @error('subject') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group row">
            <label for="exampleFormControlInput1">Subject Status</label>
                <div class="col-sm-4">
                <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" value="compulsory" wire:model="subject_status" checked class="form-check-input">
                        <label class="form-check-label" for="customRadio1">Compulsary</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" value="optional" wire:model="subject_status" class="form-check-input">
                        <label class="form-check-label" for="customRadio2">Optional</label>
                    </div>
                </div>
                @error('subject_status') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="text-center">
            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> Save</button>
            </div>
        </form>
    </div>
@livewireScripts
</div>
