@extends('layouts.app')

@section('content')
    <h1>Chat Room</h1>

    <chat-log :messages="messages"></chat-log>
    <chat-composer @messagesent="addMessage"></chat-composer>
    
@endsection