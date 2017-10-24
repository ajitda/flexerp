@extends('layouts.app')
@section('content')

		<div class="row" id="app">
			<div class="col-md-6 col-md-offset-3">
				<!-- <div class="list-group">
				  <a href="#" class="list-group-item active">Chat Room</a>
				  <a href="#" class="list-group-item">Ajit Das</a>
				  <a href="#" class="list-group-item">Abhi Das</a>
					<input type="text" class="form-control" placeholder="Type your text" v-model='message'>
				</div> -->
				<h1>Chat Room</h1>
				<chat-log :messages="messages"></chat-log>
				<chat-composer v-on:messagesent="addMessage"></chat-composer>
			</div>
		</div>
		{!! Html::script('js/app.js', array('type' => 'text/javascript')) !!}
	@endsection