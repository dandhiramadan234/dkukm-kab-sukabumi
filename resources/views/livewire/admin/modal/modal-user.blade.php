<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="grid-modal" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details User </h4>
                    <button class="btn-close" type="button" wire:click="$dispatch('close-modal-user')"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body custom-scrollbar">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="Name">Name</label>
                            <x-forms.text wire:model.defer="name" :placeholder="'Name'"></x-forms.text>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Username">Username</label>
                            @if($state == 'create')
                                <x-forms.text wire:model.defer="username" :placeholder="'Username'"></x-forms.text>
                            @else
                            <x-forms.text wire:model.defer="username" :placeholder="'Username'" readonly></x-forms.text>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" wire:model.defer="password" placeholder="**********"
                                        aria-describedby="password" autocomplete="off">
                                    @error('password')
                                        <div class="invalid-feedback">Please enter your password.</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Role">Role</label>
                            <select wire:model.defer="role"
                                class="form-select form-select-md  @error('role') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Role"></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            @error('role')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
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
                        wire:click="$dispatch('close-modal-user')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('close-modal-user', () => {
            $('#modal-user').modal('hide');
        });
    </script>
@endscript
