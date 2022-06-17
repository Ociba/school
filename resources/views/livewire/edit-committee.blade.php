<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        @if(session()->has('success'))
        <div class="card-header bg-success">
            <h4 class="mb-0 text-white">{{session('success')}}</h4>
        </div>
        @endif
    <form x-on:update.window="on = false" wire:submit.prevent="update">
        <div class="row m-4">
            <div class="row col-lg-12 col-sm-12 col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="CommitteeName">Committtee<span style="color:red">*</span></label>
                    <input type="text" wire:model="committee_name" id="Committee" class="form-control">
                    @error('committee_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 m-2 text-center">
                    <button class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
