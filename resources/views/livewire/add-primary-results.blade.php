<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
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
                <label for="exampleFormControlInput2">Class</label>
                <select wire:model="class_id" class="form-control">
                    @foreach($get_class as $class)
                    <option value="{{$class->id}}">{{$class->class}}</option>
                    @endforeach
                 </select>
                @error('class_id') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Class</label>
                <select wire:model="subject_id" class="form-control">
                    @foreach($get_subject as $subj)
                    <option value="{{$subj->id}}">{{$subj->subject}}</option>
                    @endforeach
                 </select>
                @error('subject_id') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Marks <span style="color:red">*</span></label>
                    <input type="text" id="Marks" wire:model="mark" class="form-control form-control-danger" placeholder="">
                    @error('mark') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> Save</button>
            </div>
        </form>
    </div>
@livewireScripts
</div>
