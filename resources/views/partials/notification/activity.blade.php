<a href="{{route('students.show', $notification->data['student']['id'])}}" >
    {{$notification->data['user']['name']}} create a student <strong>{{$notification->data['student']['name']}}</strong>
</a>