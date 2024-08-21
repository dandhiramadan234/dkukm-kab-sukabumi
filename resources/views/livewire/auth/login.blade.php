<div>
    {{-- Be like water. --}}
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div class="login-main">
                        <div>
                            <a class="logo" href="index.html">
                                <img class="img-fluid for-light" src="{{ asset('import/assets/images/logo/logo.png') }}"
                                    alt="looginpage">
                                <img class="img-fluid for-dark" src="{{ asset('import/assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage">
                                <p>Kabupaten Sukabumi</p>
                            </a>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                role="alert"><i data-feather="help-circle"></i>
                                <p>{{ session('error') }}</p>
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form class="theme-form" wire:submit="login">
                            <h4>Sign in to account</h4>
                            <p>Enter your username & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text"
                                    placeholder="Username" name="username" wire:model.defer="username"
                                    autocomplete="off">
                                @error('username')
                                    <div class="invalid-feedback">Please enter your name.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" wire:model.defer="password" placeholder="**********"
                                        aria-describedby="password" autocomplete="off">
                                    <div class="show-hide"><span class="show"> </span></div>
                                    @error('password')
                                        <div class="invalid-feedback">Please enter your password.</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Remember password</label>
                                </div>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign
                                        in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
