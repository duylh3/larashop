@extends('layouts.master')
@section('title','Page title')

@section('sidebar')
@parent
<p> This is appended to master layout
@endsection

@section('content')
<p> This is my body contented </p>
@endsection
