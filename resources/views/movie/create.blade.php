@extends('layouts.layout')

@section('body')
    <form method="POST" action="{{ route('movies.store') }}">
        @csrf
        <div class=" form-row">
            <div class="form-group col-md-6">
                <label for="name">Ime</label>
                <input name="name" id="name" type="text" class="form-control" placeholder="Naziv filma">
            </div>
            <div class="form-group col-md-6 mt-2">
                <label for="inputState">Glumci</label>
                <select id="inputState" class="form-control">
                    <option selected>Odaberite..</option>
                    @foreach ($actors as $actor)
                        <option value="{{ $actor->id }}">{{ $actor->firstName }} {{ $actor->lastName }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row mt-3">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Kreiraj</button>
            </div>
        </div>
    </form>
@endsection
