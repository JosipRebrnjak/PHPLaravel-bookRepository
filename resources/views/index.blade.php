<h1>
  The list of tasks
</h1>
@extends('layouts.app')

<div>
@section('title', 'The list of tasks')

@section('content')
  {{-- @if (count($tasks)) --}}
  @forelse ($tasks as $task)
    <div>
    <div>There are no tasks!</div>
  @endforelse
  {{-- @endif --}}
</div>
@endsection