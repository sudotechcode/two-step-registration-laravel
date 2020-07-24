@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Step 2') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.step2') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <select name="country_id" class="form-control @if ($errors->has('country_id')) is-invalid @endif">
                                    <option value="">-- {{ __('choose your country') }} --</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('country_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="about_me" class="col-md-4 col-form-label text-md-right">{{ __('About Me') }}</label>
                            <div class="col-md-6">
                                <textarea name="about_me" class="form-control @if ($errors->has('about_me')) is-invalid @endif" cols="30" rows="10">
                                    {{ old('about_me') }}
                                </textarea>
                                @if ($errors->has('about_me'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('about_me') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Finish Registration') }}
                                </button>
                                <br><br>
                                <a href="{{ route('home') }}">Skip for now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
