@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $journal->title }}</h1>
        <p>{{ $journal->a1fname }} {{ $journal->a1lname }}</p>
        <p>{{ $journal->jdate }}</p>
        <p>{{ $journal->abstract }}</p>

        <div id="example1"></div>
        <script>PDFObject.embed("{{ $pdf }}", "#example1");</script>
    </div>
@endsection
