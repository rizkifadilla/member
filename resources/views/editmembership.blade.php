@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">upgrade</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                            <div class="col-md-6">
                                <input id="membership_id" type="hidden" name="membership_id" value="2" required>

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary m-5">
                                    upgrade
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
