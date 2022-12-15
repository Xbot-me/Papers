@extends('layouts.guest')
@section('content')
    <div class="p-4">
        <h1 class="text-center pt-2 text-2xl"> <b>{{ $journal->title }}</b> </h1>
        <p class="text-center ">{{ $journal->a1fname }} {{ $journal->a1lname }}, {{ $journal->a2fname }} {{ $journal->a2lname }}</p>
        <p class="text-center">{{ $journal->jdate }}</p>
        <div class="bg-gray-100 mb-3 p-3 pt-3 rounded-l text-center">
            <p>{{ $journal->abstract }}</p>
        </div>


        <div id="example1"></div>
        <script>
            PDFObject.embed("{{ $pdf }}", "#example1");
        </script>
    </div>
@endsection
