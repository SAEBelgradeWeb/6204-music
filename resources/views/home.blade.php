@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p>
        <a class="btn btn-primary" href="/songs/create">Add new song</a>
        </p>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Album</th>
                </tr>
            @foreach($artists as $artist)
                @foreach($artist->songs as $song)
                    @if($loop->first)
                    <tr>
                        <td colspan="2" style="text-align: center"><b>{{$artist->name}}</b></td>

                    </tr>
                    @endif
                <tr>
                    <td>{{ $song->title }}</td>
                    <td>{{ $artist->name}}</td>
                    <td><img src="/storage/albums/{{$song->album->cover_art}}" alt="" width="30"></td>
                </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
