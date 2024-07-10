<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="modal fade" id="modal-pelatihan" tabindex="-1" role="dialog" aria-labelledby="grid-modal" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details Pelatihan </h4>
                    <button class="btn-close" type="button" wire:click="$dispatch('close-modal-pelatihan')"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body custom-scrollbar">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" for="Description">Description</label>
                            <x-forms.text wire:model.defer="description" :placeholder="'Description'"></x-forms.text>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if ($state == 'create')
                        <button class="btn btn-primary" type="button" wire:click="save">Save</button>
                    @elseif($state == 'edit')
                        <button class="btn btn-info" type="button" wire:click="edit">Edit</button>
                    @else
                        <button class="btn btn-danger" type="button" wire:click="delete">Delete</button>
                    @endif
                    <button class="btn btn-secondary" type="button"
                        wire:click="$dispatch('close-modal-pelatihan')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('close-modal-pelatihan', () => {
            $('#modal-pelatihan').modal('hide');
        });
    </script>
@endscript
