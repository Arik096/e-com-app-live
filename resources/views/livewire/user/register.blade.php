<div>
    @livewire('master.header')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="width: 500px">
                    <div>
                        <div class="card-header">
                            <h2>
                                Register into the System
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                        </div>
                        </h2>
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" style="padding: 5px;">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter your email address" value="{{ old('email') }}" required>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" style="padding: 5px;">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter your Password" value="{{ old('password') }}" required>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div style="padding: 10px;">
                                    @if (Session()->has('sms'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session('sms') }}
                                        </div>
                                    @endif
                                </div>
                                <div style="display: flex; justify-content:center; padding-top:10px;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('master.footer')
    <style>
        .container .row {
            display: flex;
            justify-content: center;
        }

        .container .row .col-md-8 {
            display: flex;
            justify-content: center;
            padding: 50px;
        }

    </style>
</div>
