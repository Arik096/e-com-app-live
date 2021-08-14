<div>
    @livewire('master.header')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="width: 500px">
                    <div>
                        <div class="card-header">
                            <h2>
                                Log into the System
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                        </div>
                        </h2>
                        <div class="card-body">
                            <form action="{{ route('Login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" style="padding: 5px;">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter your email address" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password" style="padding: 5px;">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter your Password" value="{{ old('password') }}">
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
